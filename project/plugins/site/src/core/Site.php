<?php

namespace Flextype\Plugin\Site;

use function Flextype\registry;
use function Glowy\View\view;
use Glowy\View\View;
use function Glowy\Filesystem\filesystem;
use function Glowy\Strings\strings;
use function Flextype\Plugin\Twig\twig; 
use voku\helper\HtmlMin;

class Site {
    /**
     * Fetch.
     */
    public function fetch(array $data)
    {
        $template = isset($data['template']) ? $data['template'] : registry()->get('plugins.site.settings.templates.default');
        $template = registry()->get('plugins.site.settings.templates.directory') . '/' .  $template;

        switch (registry()->get('plugins.site.settings.templates.engine')) {
            case 'twig':
                return twig()->fetch($template . '.'. registry()->get('plugins.site.settings.templates.extension'), $data);
                break;

            case 'view':
            default:
                View::setExtension(registry()->get('plugins.site.settings.templates.extension'));
                return view($template)->fetch($template, $data);
                break;
        }
    }

    /**
     * Render response.
     */
    public function renderResponse($response, array $data) 
    {
        $response->getBody()->write($this->render($data));
        $response = $response->withStatus($data['http_status_code']);
        return $response;
    }

    /**
     * Render.
     */
    public function render(array $data) 
    {
        if (isset($data['id'])) {
            $dataID = $data['id'];
        } else {
            $dataID = strings($data['title'] . 
                              $data['description'] .
                              $data['content'] .
                              $data['template'])->hash()->toString();
        }

        if (registry()->get('plugins.site.settings.cache.enabled')) {
            filesystem()->directory(FLEXTYPE_PATH_TMP . '/site/')->ensureExists(0755, true);

            $cacheFileID = FLEXTYPE_PATH_TMP . '/site/' . $this->getCacheID($dataID) . '.html';

            if (filesystem()->file($cacheFileID)->exists()) {
                $renderedTemplate = filesystem()->file(FLEXTYPE_PATH_TMP . '/site/' . $this->getCacheID($dataID) . '.html')->get();
            } else {
                $renderedTemplate = $this->fetch($data);
                filesystem()->file(FLEXTYPE_PATH_TMP . '/site/' . $this->getCacheID($dataID) . '.html')->put($renderedTemplate);
            }
            
        } else {
            $renderedTemplate = $this->fetch($data);
        }

        $renderedTemplate = $this->htmlMinify($renderedTemplate); 
 
        return $renderedTemplate;
    }

    /**
     * HTML Compressor and Minifier
     */
    public function htmlMinify(string $html): string
    {
        $options = registry()->get('plugins.site.settings.minify.html');
        
        if ($options['enabled'] === false) {
            return $html;
        }

        $htmlMin = new HtmlMin();

        // optimize html via "HtmlDomParser()"
        if ($options['optimize_via_dom_parser']) {
            $htmlMin->doOptimizeViaHtmlDomParser();        
        }

        // remove default HTML comments (depends on "doOptimizeViaHtmlDomParser(true)")
        if ($options['remove_comments'] && $options['optimize_via_dom_parser']) {
            $htmlMin->doRemoveComments();        
        }

        // sum-up extra whitespace from the Dom (depends on "doOptimizeViaHtmlDomParser(true)")
        if ($options['sum_up_whitespace'] && $options['optimize_via_dom_parser']) {
            $htmlMin->doSumUpWhitespace();  
        }

        // remove whitespace around tags (depends on "doOptimizeViaHtmlDomParser(true)")
        if ($options['remove_whitespace_around_tags'] && $options['optimize_via_dom_parser']) {
            $htmlMin->doRemoveWhitespaceAroundTags();  
        }
        
        // optimize html attributes (depends on "doOptimizeViaHtmlDomParser(true)")
        if ($options['optimize_attributes'] && $options['optimize_via_dom_parser']) {
            $htmlMin->doOptimizeAttributes();  
        }

        // remove optional "http:"-prefix from attributes (depends on "doOptimizeAttributes(true)")
        if ($options['remove_http_prefix_from_attributes'] && $options['optimize_attributes']) {
            $htmlMin->doRemoveHttpPrefixFromAttributes();  
        }

        // remove optional "https:"-prefix from attributes (depends on "doOptimizeAttributes(true)")
        if ($options['remove_https_prefix_from_attributes'] && $options['optimize_attributes']) {
            $htmlMin->doRemoveHttpsPrefixFromAttributes();  
        }

        // keep "http:"- and "https:"-prefix for all external links 
        if ($options['keep_http_and_https_prefix_on_external_attributes']) {
            $htmlMin->doKeepHttpAndHttpsPrefixOnExternalAttributes();  
        }

        // make some links relative, by removing the domain from attributes
        if ($options['make_same_domains_links_relative']) {
            $htmlMin->doMakeSameDomainsLinksRelative($options['make_same_domains_links_relative']); 
        }

        // remove defaults (depends on "doOptimizeAttributes(true)" | disabled by default)
        if ($options['remove_default_attributes'] && $options['optimize_attributes']) {
            $htmlMin->doRemoveDefaultAttributes($options['remove_default_attributes']); 
        }

        // remove deprecated anchor-jump (depends on "doOptimizeAttributes(true)")
        if ($options['remove_deprecated_anchor_name'] && $options['optimize_attributes']) {
            $htmlMin->doRemoveDeprecatedAnchorName(); 
        }

        // remove deprecated charset-attribute - the browser will use the charset from the HTTP-Header, anyway (depends on "doOptimizeAttributes(true)")
        if ($options['remove_deprecated_script_charset_attribute'] && $options['optimize_attributes']) {
            $htmlMin->doRemoveDeprecatedScriptCharsetAttribute(); 
        }

        // remove deprecated script-mime-types (depends on "doOptimizeAttributes(true)")
        if ($options['remove_deprecated_type_from_script_tag'] && $options['optimize_attributes']) {
            $htmlMin->doRemoveDeprecatedTypeFromScriptTag(); 
        }

        // remove "type=text/css" for css links (depends on "doOptimizeAttributes(true)")
        if ($options['remove_deprecated_type_from_stylesheet_link'] && $options['optimize_attributes']) {
            $htmlMin->doRemoveDeprecatedTypeFromStylesheetLink(); 
        }

        // remove "type=text/css" from all links and styles
        if ($options['remove_deprecated_type_from_style_and_link_tag']) {
            $htmlMin->doRemoveDeprecatedTypeFromStyleAndLinkTag(); 
        }

        // remove "media="all" from all links and styles
        if ($options['remove_default_media_type_from_style_and_link_tag']) {
            $htmlMin->doRemoveDefaultMediaTypeFromStyleAndLinkTag();
        }
       
        // remove type="submit" from button tags 
        if ($options['remove_default_type_from_button']) {
            $htmlMin->doRemoveDefaultTypeFromButton();
        }

        // remove some empty attributes (depends on "doOptimizeAttributes(true)")
        if ($options['remove_empty_attributes'] && $options['optimize_attributes']) {
            $htmlMin->doRemoveEmptyAttributes();
        }

        // remove 'value=""' from empty <input> (depends on "doOptimizeAttributes(true)")
        if ($options['remove_value_from_empty_input'] && $options['optimize_attributes']) {
            $htmlMin->doRemoveValueFromEmptyInput();
        }
        
        // sort css-class-names, for better gzip results (depends on "doOptimizeAttributes(true)")
        if ($options['sort_css_class_names'] && $options['optimize_attributes']) {
            $htmlMin->doSortCssClassNames();
        }
        
        // sort html-attributes, for better gzip results (depends on "doOptimizeAttributes(true)")
        if ($options['sort_html_attributes'] && $options['optimize_attributes']) {
            $htmlMin->doSortHtmlAttributes();
        }

        // remove more (aggressive) spaces in the dom (disabled by default)
        if ($options['remove_spaces_between_tags']) {
            $htmlMin->doRemoveSpacesBetweenTags();
        }

        // remove quotes e.g. class="lall" => class=lall
        if ($options['remove_omitted_quotes']) {
            $htmlMin->doRemoveOmittedQuotes();
        }

        // remove ommitted html tags e.g. <p>lall</p> => <p>lall 
        if ($options['remove_omitted_html_tags']) {
            $htmlMin->doRemoveOmittedHtmlTags();
        }

        return $htmlMin->minify($html);
    }

    /**
     * Get Cache ID for entry.
     *
     * @param  string $id Unique identifier of the entry.
     *
     * @return string Cache ID.
     *
     * @access public
     */
    public function getCacheID(string $id): string
    {
        return strings(registry()->get('plugins.site.settings.templates.directory') .
                       registry()->get('plugins.site.settings.templates.engine') .
                       registry()->get('plugins.site.settings.templates.extension') . 
                       $id)->hash()->toString();
    }

    /**
     * Error404 page
     *
     * @return array The 404 error entry array data.
     *
     * @access public
     */
    public function error404(): array
    {
        return [
            'title'            => registry()->get('plugins.site.settings.entries.error404.title'),
            'description'      => registry()->get('plugins.site.settings.entries.error404.description'),
            'content'          => registry()->get('plugins.site.settings.entries.error404.content'),
            'template'         => registry()->get('plugins.site.settings.entries.error404.template'),
            'http_status_code' => 404,
        ];
    }
}