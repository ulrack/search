<?php
/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Ulrack\Search\Tests\Component\Criteria;

use PHPUnit\Framework\TestCase;
use Ulrack\Search\Component\Criteria\Filter;
use Ulrack\Search\Common\FilterInterface;

/**
 * @coversDefaultClass \Ulrack\Search\Component\Criteria\Filter
 */
class FilterTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::__construct
     * @covers ::getField
     * @covers ::getValue
     * @covers ::getComparator
     */
    public function testFilter(): void
    {
        $subject = new Filter('foo', FilterInterface::COMPARATOR_EQ, 'bar');
        $this->assertInstanceOf(Filter::class, $subject);
        $this->assertEquals('foo', $subject->getField());
        $this->assertEquals(FilterInterface::COMPARATOR_EQ, $subject->getComparator());
        $this->assertEquals('bar', $subject->getValue());
    }
}
