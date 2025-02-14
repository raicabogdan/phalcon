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

use function array_merge;
use function array_values;
use function is_array;

/**
 * Flattens an array up to the one level depth, unless `$deep` is set to
 * `true`
 */
class Flatten
{
    /**
     * @param array<array-key, mixed> $collection
     * @param bool                    $deep
     *
     * @return array<array-key, mixed>
     */
    public function __invoke(array $collection, bool $deep = false): array
    {
        $data = [];

        foreach ($collection as $item) {
            $data = $this->processNotArray($data, $item);
            $data = $this->processArrayDeep($data, $item, $deep);
            $data = $this->processArray($data, $item, $deep);
        }

        return $data;
    }

    /**
     * @param array<array-key, mixed> $data
     * @param mixed                   $item
     * @param bool                    $deep
     *
     * @return array<array-key, mixed>
     */
    private function processArray(array $data, $item, bool $deep): array
    {
        if (is_array($item) && true !== $deep) {
            $data = array_merge($data, array_values($item));
        }

        return $data;
    }

    /**
     * @param array<array-key, mixed> $data
     * @param mixed                   $item
     * @param bool                    $deep
     *
     * @return array<array-key, mixed>
     */
    private function processArrayDeep(array $data, $item, bool $deep): array
    {
        if (is_array($item) && true === $deep) {
            $data = array_merge($data, $this->__invoke($item, true));
        }

        return $data;
    }

    /**
     * @param array<array-key, mixed> $data
     * @param mixed                   $item
     *
     * @return array<array-key, mixed>
     */
    private function processNotArray(array $data, $item): array
    {
        if (!is_array($item)) {
            $data[] = $item;
        }

        return $data;
    }
}
