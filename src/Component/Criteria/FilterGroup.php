<?php
/**
 * Copyright (C) Jyxon, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Ulrack\Search\Component\Criteria;

use Ulrack\Search\Common\FilterInterface;

class FilterGroup
{
    /** @var FilterInterface[] */
    private $filters;

    /**
     * Retrieves filters from the FilterGroupInterface.
     *
     * @return FilterInterface[]
     */
    public function getFilters(): array
    {
        return $this->filters;
    }

    /**
     * Add filter to the FilterGroupInterface
     *
     * @param FilterInterface $filter
     *
     * @return void
     */
    public function addFilter(FilterInterface $filter): void
    {
        $this->filters[] = $filter;
    }
}
