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

namespace Phalcon\Tests\Unit\Http\Message\UriFactory;

use Phalcon\Http\Message\Factories\UriFactory;
use Phalcon\Http\Message\Interfaces\UriFactoryInterface;
use Phalcon\Tests\AbstractUnitTestCase;

final class ConstructTest extends AbstractUnitTestCase
{
    /**
     * Tests Phalcon\Http\Message\UriFactory :: __construct()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2019-02-07
     */
    public function testHttpUriFactoryConstruct(): void
    {
        $factory = new UriFactory();
        $class   = UriFactoryInterface::class;
        $this->assertInstanceOf($class, $factory);
    }
}
