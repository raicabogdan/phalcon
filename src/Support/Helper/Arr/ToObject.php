<?php

/**
 * This file is part of the Phalcon.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Phalcon\Support\Helper\Arr;

/**
 * Returns the passed array as an object.
 */
class ToObject
{
    /**
     * @param array<array-key, mixed> $collection
     *
     * @return object
     */
    public function __invoke(array $collection): object
    {
        return (object)$collection;
    }
}
