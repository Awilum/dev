<?php

declare(strict_types=1);

/**
 * @link https://flextype.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Slim\Http\Environment;
use Slim\Http\Uri;
use Flextype\Plugin\Site\Controllers\SiteController;


flextype('emitter')->addListener('onFlextypeBeforeRun', static function (): void {
    flextype()->get('{uri:.+}', SiteController::class . ':index')
              ->setName('site.index')
              ->add('csrf');
});


flextype()->get('/generate-static-site', function () {

    // Set static site directory path
    $staticSitePath = '../awilum.github.io/';

    // Set static site base url
    //flextype('registry')->set('flextype.settings.url', 'CUSTOM_BASE_URL');

    // Get entries list
    $entriesFiles = filesystem()->find()->files()->in(PATH['project'] . '/entries/');

    // Create static site directory
    filesystem()->directory($staticSitePath)->create(0755, true);

    // Create static site entries
    $i = 0;
    foreach($entriesFiles as $file) {
        $i++;
        $entryID = strings($file->getPath() . '/' . $file->getFilename())->replace('/entry.md', '')->replace(ROOT_DIR . '/project/entries/', '')->toString(); 
        $entry = flextype('entries')->fetch($entryID);
        echo $i . ' - ' . $entryID  . "<br>";
        filesystem()->directory($staticSitePath . $entryID)->create(0755, true);
        filesystem()
            ->file($staticSitePath . $entryID . '/index.html')
            ->put(flextype('twig')->fetch('themes/' . flextype('registry')->get('plugins.site.settings.theme') . '/' . (empty($entry['template']) ? 'templates/default' : 'templates/' . $entry['template']) . '.html', ['entry' => $entry]));
    }
    
    // Create static site project index.html for main main entry
    filesystem()->file($staticSitePath . '/index.html')->put(file_get_contents($staticSitePath . '/' . flextype('registry')->get('plugins.site.settings.entries.main') . '/index.html'));
    filesystem()->directory($staticSitePath . '/' . flextype('registry')->get('plugins.site.settings.entries.main'))->delete();
    
    // Create empty index.html file in static site project directory
    filesystem()->file($staticSitePath . '/project/index.html')->put('');
    
    // Create assets directory and copy all assets into the static site directory
    filesystem()->directory($staticSitePath . 'project/themes/' . flextype('registry')->get('plugins.site.settings.theme') . '/assets/')->create(0755, true);
    filesystem()->directory(PATH['project'] . '/themes/' . flextype('registry')->get('plugins.site.settings.theme') . '/assets/')->copy($staticSitePath . 'project/themes/' . flextype('registry')->get('plugins.site.settings.theme') . '/assets/');

    // Create sitemap
    filesystem()->file(ROOT_DIR . '/sitemap.xml')->copy($staticSitePath . '/sitemap.xml');
    filesystem()->directory($staticSitePath . '/project/plugins/sitemap/templates/')->create(0755, true);
    filesystem()->file(PATH['project'] . '/plugins/sitemap/templates/sitemap.xsl')->copy($staticSitePath . '/project/plugins/sitemap/templates/sitemap.xsl');

    die('Done :)');    
});

