<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Phalcon\Tests\Unit\Image\Adapter\Gd;

use Phalcon\Image\Adapter\Gd;
use Phalcon\Tests\Fixtures\Traits\GdTrait;
use Phalcon\Tests\AbstractUnitTestCase;

final class GetRealpathTest extends AbstractUnitTestCase
{
    use GdTrait;

    /**
     * Tests Phalcon\Image\Adapter\Gd :: getRealpath()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function testImageAdapterGdGetRealpath(): void
    {
        $this->checkJpegSupport();

        foreach ($this->getImages() as $image) {
            $image = str_replace("/", DIRECTORY_SEPARATOR, $image);
            $gd    = new Gd($image);

            $actual = $gd->getRealpath();
            $this->assertSame($image, $actual);
        }
    }
}
