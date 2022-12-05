<?php

declare(strict_types=1);

 /**
 * Flextype - Hybrid Content Management System with the freedom of a headless CMS 
 * and with the full functionality of a traditional CMS!
 * 
 * Copyright (c) Sergey Romanenko (https://awilum.github.io)
 *
 * Licensed under The MIT License.
 *
 * For full copyright and license information, please see the LICENSE
 * Redistributions of files must retain the above copyright notice.
 */

namespace Flextype\Plugin\Twig\Expressions;

use Symfony\Component\ExpressionLanguage\ExpressionFunction;
use Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface;
use Twig\Error\LoaderError;
use Twig\Error\SyntaxError;
use Glowy\Macroable\Macroable;
use function Flextype\twig;

class TwigExpression implements ExpressionFunctionProviderInterface
{
    public function getFunctions()
    {
        return [
            new ExpressionFunction('twig', fn() => '(new \Flextype\Plugin\Twig\Expressions\TwigExpressionMethods())', fn($arguments) => (new TwigExpressionMethods()))
        ];
    }
}

class TwigExpressionMethods
{
    use Macroable;

    /**
     * Fetch rendered string
     *
     * @param  string               $string String
     * @param  array<string, mixed> $data   Associative array of template variables
     *
     * @throws LoaderError When the template cannot be found
     * @throws SyntaxError When an error occurred during compilation
     *
     * @return string
     */
    public function fetchFromString(string $string = '', array $data = []): string
    {
        return twig()->getEnvironment()->createTemplate($string)->render($data);
    }
}