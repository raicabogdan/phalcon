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

namespace Phalcon\Tests\Unit\Mvc\Router\Group;

use Phalcon\Mvc\Router\Group;
use Phalcon\Tests\Fixtures\Traits\RouterTrait;
use Phalcon\Tests\AbstractUnitTestCase;

final class AddConnectTest extends AbstractUnitTestCase
{
    use RouterTrait;

    /**
     * Tests Phalcon\Mvc\Router\Group :: addConnect()
     *
     * @author Sid Roberts <https://github.com/SidRoberts>
     * @since  2019-04-17
     */
    public function testMvcRouterGroupAddConnect(): void
    {
        $router = $this->getRouter(false);

        $group = new Group();

        $group->addConnect(
            '/docs/index',
            [
                'controller' => 'documentation11',
                'action'     => 'index',
            ]
        );

        $router->mount($group);


        $_SERVER['REQUEST_METHOD'] = 'CONNECT';

        $router->handle('/docs/index');


        $this->assertSame(
            'documentation11',
            $router->getControllerName()
        );

        $this->assertSame(
            'index',
            $router->getActionName()
        );

        $this->assertSame(
            [],
            $router->getParams()
        );
    }
}
