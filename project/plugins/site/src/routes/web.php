<?php

declare(strict_types=1);

/**
 * @link https://awilum.github.io/flextype
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Flextype\Plugin\Site\Controllers\SiteController;
use Flextype\Middlewares\CsrfMiddleware;
use function Flextype\app;
use function Flextype\emitter;

emitter()->addListener('onFlextypeBeforeRun', static function (): void {    
    app()->get('{uri:.+}', [SiteController::class, 'index'])
              ->setName('site.index')
              ->add(new CsrfMiddleware());
});
