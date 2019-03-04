<?php
/**
 * Copyright (C) Jyxon, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Ulrack\Search\Criteria;

use Ulrack\Search\Common\FilterGroupInterface;
use Ulrack\Search\Common\LimiterInterface;
use Ulrack\Search\Common\PagerInterface;
use Ulrack\Search\Common\SearchCriteriaInterface;
use Ulrack\Search\Common\SorterInterface;

class SearchCriteria implements SearchCriteriaInterface
{
    /** @var FilterGroupInterface[] */
    private $filterGroups;

    /** @var LimiterInterface[] */
    private $limiters;

    /** @var PagerInterface[] */
    private $pagers;

    /** @var SorterInterface[] */
    private $sorters;

    /**
     * Adds a filter group to the SearchCriteriaInterface.
     *
     * @param FilterGroupInterface $filter
     *
     * @return void
     */
    public function addFilterGroup(FilterGroupInterface $filterGroup): void
    {
        $this->filterGroups[] = $filterGroup;
    }

    /**
     * Retrieves the filter groups from the SearchCriteriaInterface.
     *
     * @return FilterGroupInterface[]
     */
    public function getFilterGroups(): array
    {
        return $this->filterGroups;
    }

    /**
     * Adds a sorter to the SearchCriteriaInterface.
     *
     * @param SorterInterface $sorter
     *
     * @return void
     */
    public function addSorter(SorterInterface $sorter): void
    {
        $this->sorters[] = $sorter;
    }

    /**
     * Retrieves the sorters from the SearchCriteriaInterface.
     *
     * @return SorterInterface[]
     */
    public function getSorters(): array
    {
        return $this->sorters;
    }

    /**
     * Adds a pager to the SearchCriteriaInterface.
     *
     * @param PagerInterface $pager
     *
     * @return void
     */
    public function addPager(PagerInterface $pager): void
    {
        $this->pagers[] = $pager;
    }

    /**
     * Retrieves the pagers from the SearchCriteriaInterface.
     *
     * @return PagerInterface[]
     */
    public function getPagers(): array
    {
        return $this->pagers;
    }

    /**
     * Adds a limiter to the SearchCriteriaInterface.
     *
     * @param LimiterInterface $limiter
     *
     * @return void
     */
    public function addLimiter(LimiterInterface $limiter): void
    {
        $this->limiters[] = $limiter;
    }

    /**
     * Retrieves the limiters from the SearchCriteriaInterface.
     *
     * @return LimiterInterface[]
     */
    public function getLimiters(): array
    {
        return $this->limiters;
    }
}
