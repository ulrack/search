<?php
/**
 * Copyright (C) Jyxon, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Ulrack\Search\Tests\Component\Criteria;

use PHPUnit\Framework\TestCase;
use Ulrack\Search\Component\Criteria\SearchCriteria;
use Ulrack\Search\Common\SearchCriteriaInterface;
use Ulrack\Search\Common\FilterGroupInterface;
use Ulrack\Search\Common\SorterInterface;
use Ulrack\Search\Common\PagerInterface;
use Ulrack\Search\Common\LimiterInterface;

/**
 * @coversDefaultClass \Ulrack\Search\Component\Criteria\SearchCriteria
 */
class SearchCriteriaTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::addFilterGroup
     * @covers ::getFilterGroups
     * @covers ::addSorter
     * @covers ::getSorters
     * @covers ::addPager
     * @covers ::getPagers
     * @covers ::addLimiter
     * @covers ::getLimiters
     */
    public function testSearchCriteria(): void
    {
        $subject = new SearchCriteria();

        $filterGroupMock = $this->createMock(FilterGroupInterface::class);
        $subject->addFilterGroup($filterGroupMock);
        $this->assertEquals([$filterGroupMock], $subject->getFilterGroups());

        $sorterMock = $this->createMock(SorterInterface::class);
        $subject->addSorter($sorterMock);
        $this->assertEquals([$sorterMock], $subject->getSorters());

        $pagerMock = $this->createMock(PagerInterface::class);
        $subject->addPager($pagerMock);
        $this->assertEquals([$pagerMock], $subject->getPagers());

        $limiterMock = $this->createMock(LimiterInterface::class);
        $subject->addLimiter($limiterMock);
        $this->assertEquals([$limiterMock], $subject->getLimiters());
    }
}
