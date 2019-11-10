<?php
/**
 * Copyright (C) Jyxon, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Ulrack\Search\Tests\Component\Criteria;

use PHPUnit\Framework\TestCase;
use Ulrack\Search\Component\Criteria\Pager;

/**
 * @coversDefaultClass \Ulrack\Search\Component\Criteria\Pager
 */
class PagerTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::__construct
     * @covers ::getPage
     * @covers ::getAmount
     */
    public function testPager(): void
    {
        $subject = new Pager(1, 50);
        $this->assertInstanceOf(Pager::class, $subject);
        $this->assertEquals(1, $subject->getPage());
        $this->assertEquals(50, $subject->getAmount());
    }
}
