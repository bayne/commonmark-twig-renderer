<?php

/*
 * This is part of the webuni/commonmark-twig-renderer package.
 *
 * (c) Martin Hasoň <martin.hason@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Webuni\CommonMark\TwigRenderer\Tests\Functional;

use League\CommonMark\Tests\Functional\SpecTest as BaseSpecTest;
use Webuni\CommonMark\TwigRenderer\Tests\CommonMarkConverter;

class SpecTest extends BaseSpecTest
{
    protected function setUp()
    {
        $this->converter = new CommonMarkConverter();
    }
}
