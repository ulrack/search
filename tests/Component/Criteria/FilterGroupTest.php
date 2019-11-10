<?php
/**
 * Copyright (C) Jyxon, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Ulrack\Search\Tests\Component\Criteria;

use PHPUnit\Framework\TestCase;
use Ulrack\Search\Component\Criteria\FilterGroup;
use Ulrack\Search\Common\FilterInterface;

/**
 * @coversDefaultClass \Ulrack\Search\Component\Criteria\FilterGroup
 */
class FilterGroupTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::getFilters
     * @covers ::addFilter
     */
    public function testFilter(): void
    {
        $subject = new FilterGroup();

        $filterMock = $this->createMock(FilterInterface::class);
        $subject->addFilter($filterMock);
        $this->assertEquals([$filterMock], $subject->getFilters());
    }
}
