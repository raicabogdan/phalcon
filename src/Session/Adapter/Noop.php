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

namespace Phalcon\Session\Adapter;

use SessionHandlerInterface;

/**
 * Phalcon\Session\Adapter\Noop
 *
 * This is an "empty" or null adapter. It can be used for testing or any
 * other purpose that no session needs to be invoked
 *
 * ```php
 * <?php
 *
 * use Phalcon\Session\Manager;
 * use Phalcon\Session\Adapter\Noop;
 *
 * $session = new Manager();
 * $session->setAdapter(new Noop());
 * ```
 */
class Noop implements SessionHandlerInterface
{
    /**
     * Close
     */
    public function close(): bool
    {
        return true;
    }

    /**
     * Destroy
     *
     * @param string $sessionId
     *
     * @return bool
     */
    public function destroy(string $sessionId): bool
    {
        return true;
    }

    /**
     * Garbage Collector
     *
     * @param int $maxLifetime
     *
     * @return false|int
     */
    public function gc(int $maxLifetime): false|int
    {
        return true;
    }

    /**
     * Open
     *
     * @param string $savePath
     * @param string $sessionName
     *
     * @return bool
     */
    public function open(string $savePath, string $sessionName): bool
    {
        return true;
    }

    /**
     * Read
     *
     * @param string $sessionId
     *
     * @return string
     */
    public function read(string $sessionId): string
    {
        return '';
    }

    /**
     * Write
     *
     * @param string $sessionId
     * @param string $data
     *
     * @return bool
     */
    public function write(string $sessionId, string $data): bool
    {
        return true;
    }
}
