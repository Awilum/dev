---
title: "Flextype 1.0 <br><span class='text-sm lowercase border-2 border-black px-2 py-1'>alpha.1</span>"
template: flextype/releases
visibility: visible
---

<h3 class="text-5xl text-center border-b-2 border-black pb-4 uppercase">Features</h3>

<div class="px-4 lg:flex lg:p-0">
    <div class="w-full lg:w-6/12 lg:mr-3">
        <h3 class="text-4xl">Core</h3>
        <div class=" border-black border-2  p-4 mb-6">
            Core application updated from Slim 3 to Slim 4!
            <div class="text-sm">See: <a href="https://www.slimframework.com/docs/v4/start/upgrade.html">Upgrade Guide</a></div>
        </div>
        <div class=" border-black border-2 p-4 mb-6">
            New PHP-DI added instead of Pimple DI.
            <div class="text-sm">See: <a href="https://php-di.org/doc/frameworks/slim.html">Usage Guide</a></div>
        </div>
        <div class=" border-black border-2 p-4 mb-6">
            Added Thermage library for better Flextype CLI Application styling.
            <div class="text-sm">See: <a href="https://php-di.org/doc/frameworks/slim.html">Documentation</a></div>
        </div>
        <div class=" border-black border-2 p-4 mb-6">
            Added new core constants: <code>PROJECT_NAME</code>, <code>PATH_PROJECT</code>, <code>PATH_TMP</code>.
        </div>
        <div class=" border-black border-2 p-4 mb-6">
            Added New <a href="https://awilum.github.io/glowyphp/">Glowy PHP</a> Packages <code>View</code>, <code>Macroable</code>, <code>Strings</code>, <code>Arrays</code>, <code>Csrf</code>, <code>Filesystem</code>, <code>Registry</code>, <code>Session</code>.
        </div>
        <h3 class="text-4xl">Rest API</h3>
        <div class=" border-black border-2 p-4 mb-6">
            All Rest API Endpoints codebase was rewritten from scratch.<br><br>
            <div class="text-sm">See: <a href="https://awilum.github.io/flextype/documentation/rest-api/introduction">Documentation</a></div>
        </div>
        <div class=" border-black border-2 p-4 mb-6">
            Added new Rest API Endpoints:<br><br>
            <ul>
                <li class="p-2 mb-2 border-2 border-black">Endpoint <code>POST /api/v1/cache/clear</code> to clear cache.</li>
                <li class="p-2 mb-2 border-2 border-black">Endpoint <code>POST /api/v1/tokens/generate</code> to generate token hash.</li>
                <li class="p-2 mb-2 border-2 border-black">Endpoint <code>POST /api/v1/tokens/verify-hash</code> to verify token hash.</li>
                <li class="p-2 mb-2 border-2 border-black">Endpoint <code>POST /api/v1/tokens</code> to create token entry.</li>
                <li class="p-2 mb-2 border-2 border-black">Endpoint <code>PATCH /api/v1/tokens</code> to update token entry.</li>
                <li class="p-2 mb-2 border-2 border-black">Endpoint <code>DELETE /api/v1/tokens</code> to delete token entry.</li>
                <li class="p-2 mb-2 border-2 border-black">Endpoint <code>GET /api/v1/tokens</code> to fetch token entry.</li>
            </ul>
        </div>
        <h3 class="text-4xl">Serializers</h3>
        <div class=" border-black border-2 p-4 mb-6">
            Added new serializer <code>Json5</code>
            <div class="text-sm">See: <a href="https://awilum.github.io/flextype/documentation/core/serializers/json5">Documentation</a></div>
        </div>
        <div class=" border-black border-2 p-4 mb-6">
            Added new serializer <code>Neon</code>
            <div class="text-sm">See: <a href="https://awilum.github.io/flextype/documentation/core/serializers/neon">Documentation</a></div>
        </div>
        <div class=" border-black border-2 p-4 mb-6">
            Added ability to set global settings for all built-in serializers.
        </div> 
        <div class=" border-black border-2 p-4 mb-6">
            Added ability to set specific header serializer for <code>Frontmatter</code> serializer (default is <code>YAML</code>).
        </div> 
        <h3 class="text-4xl">Parsers</h3>
        <div class=" border-black border-2 p-4 mb-6">
            Added new Markdown parser Commonmark v2.
            <div class="text-sm">See: <a href="https://awilum.github.io/flextype/documentation/core/parsers/markdown">Documentation</a></div>
        </div>
        <div class=" border-black border-2 p-4 mb-6">
            Added new Textile parser.
        </div>
        <div class=" border-black border-2 p-4 mb-6">
            Added ability to set global settings for all parsers. 
        </div>
        <div class=" border-black border-2 p-4 mb-6">
            Added ability to override logic for built-in shortcodes. 
        </div>
        <div class=" border-black border-2 p-4 mb-6">
            Added new shortcodes:<br><br>
            <ul>
                <li class="p-2 mb-2 border-2 border-black">Shortcode <code>(entries)</code> to fetch entry (or entries collection) or specific field.</li>
                <li class="p-2 mb-2 border-2 border-black">Shortcode <code>(registry)</code> to fetch data from registry.</li>
                <li class="p-2 mb-2 border-2 border-black">Shortcode <code>(filesystem)</code> to work with filesystem.</li>
                <li class="p-2 mb-2 border-2 border-black">Shortcode <code>(uuid)</code> to generate uuid.</li>
                <li class="p-2 mb-2 border-2 border-black">Shortcode <code>(strings)</code> for strings manipulation.</li>
                <li class="p-2 mb-2 border-2 border-black">Shortcode <code>(textile)</code> to parse textile text.</li>
                <li class="p-2 mb-2 border-2 border-black">Shortcode <code>(php)</code> to execute php code.</li>
                <li class="p-2 mb-2 border-2 border-black">Shortcode <code>(eval)</code> to eval expression.</li>
                <li class="p-2 mb-2 border-2 border-black">Shortcode <code>(calc)</code> to calculate values.</li>
                <li class="p-2 mb-2 border-2 border-black">Shortcode <code>(type)</code> to set field type.</li>
                <li class="p-2 mb-2 border-2 border-black">Shortcode <code>(markdown)</code> to parse markdown text.</li>
                <li class="p-2 mb-2 border-2 border-black">Shortcode <code>(getBaseUrl)</code> to get base url.</li>
                <li class="p-2 mb-2 border-2 border-black">Shortcode <code>(getBasePath)</code> to get base path.</li>
                <li class="p-2 mb-2 border-2 border-black">Shortcode <code>(getAbsoluteUrl)</code> to get absolute url.</li>
                <li class="p-2 mb-2 border-2 border-black">Shortcode <code>(urlFor)</code> to get url for route.</li>
                <li class="p-2 mb-2 border-2 border-black">Shortcode <code>(getUriString)</code> to get uri string.</li>
                <li class="p-2 mb-2 border-2 border-black">Shortcode <code>(filesystem)</code> to do filesytem manipulations.</li>
                <li class="p-2 mb-2 border-2 border-black">Shortcode <code>(tr)</code> to returns translation of a string.</li>
                <li class="p-2 mb-2 border-2 border-black">Shortcode <code>(if)</code> to use logical if conditions.</li>
                <li class="p-2 mb-2 border-2 border-black">Shortcode <code>(when)</code> to use logical positive if conditions.</li>
                <li class="p-2 mb-2 border-2 border-black">Shortcode <code>(unless)</code> to use logical negative if conditions.</li>
                <li class="p-2 mb-2 border-2 border-black">Shortcode <code>(var)</code> to get and set entry variables values.</li>
                <li class="p-2 mb-2 border-2 border-black">Shortcode <code>(field)</code> to get entry fields values.</li>
                <li class="p-2 mb-2 border-2 border-black">Shortcode <code>(const)</code> to get defined costants.</li>
                <li class="p-2 mb-2 border-2 border-black">Shortcode <code>(raw)</code> to ignore shortcodes processing.</li>
            </ul>
        </div>
        <h3 class="text-4xl">Router</h3>
        <div class=" border-black border-2 p-4 mb-6">
            Added ability to set custom projects routes in <code>/projects/routes/routes.php</code>
        </div>
        <div class=" border-black border-2 p-4 mb-6">
            Added ability to enabled router caching.
        </div>
    </div>
    <div class="w-full lg:w-6/12 lg:ml-3">
        <h3 class="text-4xl">Entries</h3>
        <div class=" border-black border-2 p-4 mb-6">
            Added ability to set custom events for each entries collections.
        </div>
        <div class=" border-black border-2 p-4 mb-6">
            Added new functionality that allows implementing Virtual Entries by overriding default entries CRUD methods with the help of events.
        </div>
        <div class=" border-black border-2 p-4 mb-6">
            Added ability to create completely customisable high-level collections for entries with their fields and various formats.
        </div>
        <div class=" border-black border-2 p-4 mb-6">
            Added ability to set custom events for each entries collections.
        </div>
        <div class=" border-black border-2 p-4 mb-6">
            Added ability to create and use entries fields directives.
            <br><br>
            <ul>
                <li class="p-2 mb-2 border-2 border-black">Directive <code>@type</code> to set field type.</li>
                <li class="p-2 mb-2 border-2 border-black">Directive <code>@markdown</code> to parse markdown text inside current field.</li>
                <li class="p-2 mb-2 border-2 border-black">Directive <code>@shortcodes</code> to parse shortcodes text inside current field.</li>
                <li class="p-2 mb-2 border-2 border-black">Directive <code>@textile</code> to parse textile text inside current field.</li>
                <li class="p-2 mb-2 border-2 border-black">Directive <code>@php</code> to execute php code text inside current field.</li>
                <li class="p-2 mb-2 border-2 border-black">Directive <code>[[ ]]</code> to eval expression.</li>
            </ul>
            <div class="text-sm">See: <a href="https://awilum.github.io/flextype/documentation/core/entries#directives">Documentation</a></div>
        </div>
        <div class=" border-black border-2 p-4 mb-6">
            Added ability to create custom entries macros.<br><br>
            Built-in macros: <code>entries</code>, <code>php</code>, <code>registry</code>.
        </div>
        <div class=" border-black border-2 p-4 mb-6">
            Added new public methods <code>options</code>, <code>setOptions</code>, <code>registry</code>, <code>setRegistry</code>.
        </div>
        <div class=" border-black border-2 p-4 mb-6">
            Added ability to override logic for built-in custom fields.<br><br>
            Example: <br>
            If you want to have your custom logic for processing field <code>uuid</code> just update flextype project settings.
            <br><br>
            from:<br><br>
<pre class="text-sm"><code class="language-yaml">
...
entries:
    default:
    ...
    fields:
        ...
        uuid:
        enabled: true
        path: "src/flextype/core/Entries/Fields/Default/UuidField.php"
        ...
    ...
    ...
...
</code></pre>

    to:<br><br>
<pre class="text-sm"><code class="language-yaml">
...
entries:
    default:
    ...
    fields:
        ...
        uuid:
        enabled: true
        path: "project/plugins/your-custom-plugin/Entries/Fields/Default/UuidField.php"
        ...
    ...
    ...
...
</code></pre>
        </div>
        <div class=" border-black border-2 p-4 mb-6">
            Added ability to create custom entries macros. Built-in macros: <code>entries</code>, <code>php</code>, <code>registry</code>.
        </div>
        <h3 class="text-4xl">Expressions</h3>
        <div class=" border-black border-2 p-4 mb-6">
            Added a new configurable and extendable expressions engine with a collection of predefined expressions.
        </div>
        <div class="border-black border-2 p-4 mb-6">
            Expressions:
            <br><br>
            <ul>
                <li class="p-2 mb-2 border-2 border-black">Expression function <code>actions</code> to get actions service.</li>
                <li class="p-2 mb-2 border-2 border-black">Expression function <code>collection</code> to create a new arrayable collection object from the given elements.</li>
                <li class="p-2 mb-2 border-2 border-black">Expression function <code>collectionFromJson</code> to create a new arrayable collection object from the given JSON string.</li>
                <li class="p-2 mb-2 border-2 border-black">Expression function <code>collectionFromString</code> to create a new arrayable collection object from the given string.</li>
                <li class="p-2 mb-2 border-2 border-black">Expression function <code>collectionWithRange</code> to create a new arrayable object with a range of elements.</li>
                <li class="p-2 mb-2 border-2 border-black">Expression function <code>collectionFromQueryString</code> to create a new arrayable object from the given query string.</li>
                <li class="p-2 mb-2 border-2 border-black">Expression function <code>filterCollection</code> to filter collection.</li>
                <li class="p-2 mb-2 border-2 border-black">Expression function <code>const</code> to get defined constants.</li>
                <li class="p-2 mb-2 border-2 border-black">Expression function <code>var</code> to get current entry var.</li>
                <li class="p-2 mb-2 border-2 border-black">Expression function <code>field</code> to get current entry field.</li>
                <li class="p-2 mb-2 border-2 border-black">Expression function <code>csrf</code> to get csrf hidden input.</li>
                <li class="p-2 mb-2 border-2 border-black">Expression function <code>entries</code> to get entries service.</li>
                <li class="p-2 mb-2 border-2 border-black">Expression function <code>filesystem</code> to get filesystem instance.</li>
                <li class="p-2 mb-2 border-2 border-black">Expression function <code>strings</code> to get strings instance.</li>
                <li class="p-2 mb-2 border-2 border-black">Expression function <code>tr</code> to return translation of a string. If no translation exists, the original string will be returned.</li>
                <li class="p-2 mb-2 border-2 border-black">Expression function <code>parsers</code> to get parsers service.</li>
                <li class="p-2 mb-2 border-2 border-black">Expression function <code>serializers</code> to get serializers service.</li>
                <li class="p-2 mb-2 border-2 border-black">Expression function <code>registry</code> to get registry service.</li>
                <li class="p-2 mb-2 border-2 border-black">Expression function <code>slugify</code> to get slugify service.</li>
            </ul>
        </div>
        <h3 class="text-4xl">Cache</h3>
        <div class=" border-black border-2 p-4 mb-6">
            Added new cache driver <code>Phparray</code> to store cache data in raw php arrays files.
        </div>
        <div class=" border-black border-2 p-4 mb-6">
            Added ability to set custom cache ID string for entries, parsers and serializers.
        </div>
    </div>
</div>

<div class="px-4 lg:flex lg:p-0">
    <div class="w-full">
        <h3 class="text-4xl">Console</h3>
        <div class="border-black border-2 p-4">
            <div class=" mb-6">Added Extendable Flextype CLI Application.</div>
<pre><code class="language-plaintext">
$ ./bin/flextype

Flextype CLI Application 1.0.0-alpha.1

Usage:
command [options] [arguments]

Options:
-h, --help            Display help for the given command. When no command is given display help for the list command
-q, --quiet           Do not output any message
-V, --version         Display this application version
    --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
-n, --no-interaction  Do not ask any interactive question
-v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

Available commands:
completion                  Dump the shell completion script
help                        Display help for a command
list                        List commands
cache
cache:clear                 Clear cache.
cache:clear-config          Clear cache config.
cache:clear-data            Clear cache data.
cache:clear-routes          Clear cache routes.
cache:delete                Delete item.
cache:delete-multiple       Delete mutiple items.
cache:get                   Get item.
cache:get-multiple          Get multiple items.
cache:has                   Check whether cache item exists.
cache:set                   Set item.
cache:set-multiple          Set multiple items.
entries
entries:copy                Copy entry.
entries:create              Create entry.
entries:delete              Delete entry.
entries:fetch               Fetch entry.
entries:has                 Check whether entry exists.
entries:move                Move entry.
entries:update              Update entry.
tokens
tokens:create               Create a new unique token.
tokens:delete               Delete token entry.
tokens:fetch                Fetch token entry.
tokens:generate             Generate token.
tokens:generate-hash        Generate token hash.
tokens:has                  Check whether token entry exists.
tokens:update               Update tokens entry.
tokens:verify-hash          Verify token hash.
</code></pre>
        </div>
    </div>
</div>


<div class="px-4 lg:flex lg:p-0">
    <div class="w-full lg:w-6/12 lg:mr-3">
        <h3 class="text-4xl">Uploader</h3>
        <div class="border-black border-2 p-4 mb-6">
            Added Configurable <a href="https://github.com/siriusphp/upload">Sirius Uploader</a> for files upload. 
        </div>
        <h3 class="text-4xl">Tokens</h3>
        <div class="border-black border-2 p-4 mb-6">
            Added new Tokens API.
        </div>
        <h3 class="text-4xl">Macros</h3>
        <div class="border-black border-2 p-4 mb-6">
            All core macros are located in the <code>/src/flextype/macros/</code>
        </div>
        <div class="border-black border-2 p-4 mb-6">
            Added new <code>onlyFromCollection</code> and <code>exceptFromCollection</code> macros for Arrays.
        </div>
        <h3 class="text-4xl">Actions</h3>
        <div class=" border-black border-2 p-4 mb-6">
            Added new Actions API.<br><br>
            The Flextype Actions API provides new capabilities to extend the Flextype core by registering and reusing useful code snippets from global actions namespace.<br><br>
Example 1:<br><br>
<pre>
<code class="language-php">
// Set new action entries.create
actions()->set('entries.create', function($id, $data) {
    return entries()->create($id, $data);
});

// Get action entries.create
actions()->get('entries.create')('hello-world', []);
</code>
</pre>
Example 2:<br><br>
<pre>
<code class="language-php">
// Set new action entries.update
actions()->set('entries.update', function($id, $data) {
    if (entries()->update($id, $data)) {
        logger()->info("Content {$id} successfully updated");
        cache()->delete($id);
    } else {
        logger()->error("Content {$id} was not updated");
    }
});

// Get action entries.update
actions()->get('entries.update')('hello-world', []);
</code>
</pre>
Example 3:<br><br>
<pre class="mb-0">
<code class="language-php" style="margin-bottom: 0;">
// Set new action entries.create
actions()->set('entries.create', function($id, $data) {
    if(registry()->get('database') == 'MySQL') {
        // ... create new entry in the MySQL database.
    } else {
        return entries()->create($id, $data);
    }
});

// Get action entries.create
actions()->get('entries.create')('blog/post-1', []);
actions()->get('entries.create')('blog/post-2', []);
actions()->get('entries.create')('blog/post-3', []);
</code>
</pre>
        </div>
    </div>
    <div class="w-full lg:w-6/12 lg:ml-3">
        <h3 class="text-4xl">Helpers</h3>
        <div class=" border-black border-2 p-4 mb-6">
            All core helpers are located in the <code>/src/flextype/helpers/</code>
        </div>
        <div class="border-black border-2 p-4 mb-6">
            New helpers added:
            <br><br>
            <ul>
                <li class="p-2 mb-2 border-2 border-black">Helper function <code>app</code> to get Flextype Application instance.</li>
                <li class="p-2 mb-2 border-2 border-black">Helper function <code>container</code> to get Flextype Application Container instance.</li>
                <li class="p-2 mb-2 border-2 border-black">Helper function <code>emitter</code> to get Flextype Emitter Service.</li>
                <li class="p-2 mb-2 border-2 border-black">Helper function <code>cache</code> to get Flextype Cache Service.</li>
                <li class="p-2 mb-2 border-2 border-black">Helper function <code>entries</code> to get Flextype Entries Service.</li>
                <li class="p-2 mb-2 border-2 border-black">Helper function <code>parsers</code> to get Flextype Parsers Service.</li>
                <li class="p-2 mb-2 border-2 border-black">Helper function <code>serializers</code> to get Flextype Serializers Service.</li>
                <li class="p-2 mb-2 border-2 border-black">Helper function <code>logger</code> to get Flextype Logger Service.</li>
                <li class="p-2 mb-2 border-2 border-black">Helper function <code>session</code> to get Flextype Session Service.</li>
                <li class="p-2 mb-2 border-2 border-black">Helper function <code>csrf</code> to get Flextype CSRF Service.</li>
                <li class="p-2 mb-2 border-2 border-black">Helper function <code>plugins</code> to get Flextype Plugins Service.</li>
                <li class="p-2 mb-2 border-2 border-black">Helper function <code>console</code>to get Flextype Console Service.</li>
                <li class="p-2 mb-2 border-2 border-black">Helper function <code>imageFile</code> to create a new image instance for image file.</li>
                <li class="p-2 mb-2 border-2 border-black">Helper function <code>imageCanvas</code> to create a new image canvas instance.</li>
                <li class="p-2 mb-2 border-2 border-black">Helper function <code>generateToken</code> to generate unique token.</li>
                <li class="p-2 mb-2 border-2 border-black">Helper function <code>generateTokenHash</code> to generate unique token hash.</li>
                <li class="p-2 mb-2 border-2 border-black">Helper function <code>verifyTokenHash</code> to validate token hash.</li>
                <li class="p-2 mb-2 border-2 border-black">Helper function <code>urlFor</code> to get url for a named route.</li>
                <li class="p-2 mb-2 border-2 border-black">Helper function <code>fullUrlFor</code> to get full url for a named route.</li>
                <li class="p-2 mb-2 border-2 border-black">Helper function <code>isCurrentUrl</code> to determine is current url equal to route name.</li>
                <li class="p-2 mb-2 border-2 border-black">Helper function <code>getCurrentUrl</code> to get current path on given Uri.</li>
                <li class="p-2 mb-2 border-2 border-black">Helper function <code>getBasePath</code> to get base path.</li>
                <li class="p-2 mb-2 border-2 border-black">Helper function <code>setBasePath</code> to set base path.</li>
                <li class="p-2 mb-2 border-2 border-black">Helper function <code>redirect</code> to create redirect.</li>
                <li class="p-2 mb-2 border-2 border-black">Helper function <code>upload</code> to upload files and process uloaded images.</li>
            </ul>
        </div>
    </div>
</div>

<h3 class="text-5xl text-center border-b-2 border-black mt-12 pb-4 uppercase">Bug Fixes</h3>

<div class="px-4 lg:flex lg:p-0">
    <div class="w-full lg:w-6/12 lg:mr-3">
        <h3 class="text-4xl">Parsers</h3>
        <div class=" border-black border-2  p-4 mb-6">
            Fixed issue with double cashing.
        </div>
        <h3 class="text-4xl">Parsers</h3>
        <div class=" border-black border-2  p-4 mb-6">
            Fixed issue with double cashing.
        </div>
    </div>
    <div class="w-full lg:w-6/12 lg:ml-3">
        <h3 class="text-4xl">Entries</h3>
        
        <div class=" border-black border-2 p-4 mb-6">
            Added ability to create custom entries macros. Built-in macros: <code>entries</code>, <code>php</code>, <code>registry</code>.
        </div>
        <h3 class="text-4xl">Expressions</h3>
        <div class=" border-black border-2 p-4 mb-6">
            Added a new configurable and extendable expressions engine with a collection of predefined expressions.
        </div>
        
        <h3 class="text-4xl">Cache</h3>
        <div class=" border-black border-2 p-4 mb-6">
            Added new cache driver <code>Phparray</code> to store cache data in raw php arrays files.
        </div>
        <div class=" border-black border-2 p-4 mb-6">
            Added ability to set custom cache ID string for entries, parsers and serializers.
        </div>
    </div>
</div>