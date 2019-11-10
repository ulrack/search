<?php
/**
 * Copyright (C) Jyxon, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Ulrack\Search\Component\Criteria;

use Ulrack\Search\Common\PagerInterface;

class Pager implements PagerInterface
{
    /** @var int */
    private $page;

    /** @var int */
    private $amount;

    /**
     * Constructor
     *
     * @param int $page
     * @param int $amount
     */
    public function __construct(int $page, int $amount)
    {
        $this->page = $page;
        $this->amount = $amount;
    }

    /**
     * Retrieves the currently requested page for the SearchCriteriaInterface.
     *
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * Retrieves the amount of items on the page.
     *
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }
}
