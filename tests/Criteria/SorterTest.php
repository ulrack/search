<?php
/**
 * Copyright (C) Jyxon, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Ulrack\Search\Tests\Criteria;

use PHPUnit\Framework\TestCase;
use Ulrack\Search\Criteria\Sorter;
use Ulrack\Search\Common\SorterInterface;

/**
 * @coversDefaultClass \Ulrack\Search\Criteria\Sorter
 */
class SorterTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::__construct
     * @covers ::getDirection
     * @covers ::getField
     */
    public function testSorter(): void
    {
        $subject = new Sorter('foo', SorterInterface::DIRECTION_ASC);
        $this->assertInstanceOf(Sorter::class, $subject);
        $this->assertEquals('foo', $subject->getField());
        $this->assertEquals(
            SorterInterface::DIRECTION_ASC,
            $subject->getDirection()
        );
    }
}
