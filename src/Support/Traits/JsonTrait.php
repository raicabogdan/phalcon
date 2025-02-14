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

namespace Phalcon\Support\Traits;

use function is_object;
use function method_exists;

trait JsonTrait
{
    /**
     * @param mixed $value
     */
    private function checkSerializable(mixed $value): mixed
    {
        if (
            is_object($value) &&
            true === method_exists($value, 'jsonSerialize')
        ) {
            return $value->jsonSerialize();
        }

        return $value;
    }
}
