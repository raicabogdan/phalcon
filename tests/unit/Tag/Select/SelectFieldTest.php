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

namespace Phalcon\Tests\Unit\Tag\Select;

use Phalcon\Tag\Select;
use Phalcon\Tests\Unit\Tag\AbstractTagSetup;
use PHPUnit\Framework\Attributes\Test;

class SelectFieldTest extends AbstractTagSetup
{
    /**
     * Tests Phalcon\Tag\Select :: selectField()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function testTagSelectSelectField(): void
    {
        $sSelect = Select::selectField('city', ['Lyon', 'Miramas']);

        $expected = "<select id=\"city\" name=\"city\">" . PHP_EOL . "\t" .
            "<option value=\"0\">Lyon</option>" . PHP_EOL . "\t<option value=\"1\">" .
            "Miramas</option>" . PHP_EOL . "</select>";

        $this->assertSame(
            $expected,
            $sSelect
        );
    }
}
