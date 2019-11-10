<?php
/**
 * Copyright (C) Jyxon, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Ulrack\Search\Tests\Component\Criteria;

use PHPUnit\Framework\TestCase;
use Ulrack\Search\Component\Criteria\Limiter;

/**
 * @coversDefaultClass \Ulrack\Search\Component\Criteria\Limiter
 */
class LimiterTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::__construct
     * @covers ::getFields
     */
    public function testLimiter(): void
    {
        $subject = new Limiter('foo', 'bar');
        $this->assertInstanceOf(Limiter::class, $subject);
        $this->assertEquals(['foo', 'bar'], $subject->getFields());
    }
}
