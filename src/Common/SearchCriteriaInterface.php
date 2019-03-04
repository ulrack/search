<?php
/**
 * Copyright (C) Jyxon, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Ulrack\Search\Common;

interface SearchCriteriaInterface
{
    /**
     * Adds a filter group to the SearchCriteriaInterface.
     *
     * @param FilterGroupInterface $filter
     *
     * @return void
     */
    public function addFilterGroup(FilterGroupInterface $filterGroup): void;

    /**
     * Retrieves the filter groups from the SearchCriteriaInterface.
     *
     * @return FilterGroupInterface[]
     */
    public function getFilterGroups(): array;

    /**
     * Adds a sorter to the SearchCriteriaInterface.
     *
     * @param SorterInterface $sorter
     *
     * @return void
     */
    public function addSorter(SorterInterface $sorter): void;

    /**
     * Retrieves the sorters from the SearchCriteriaInterface.
     *
     * @return SorterInterface[]
     */
    public function getSorters(): array;

    /**
     * Adds a pager to the SearchCriteriaInterface.
     *
     * @param PagerInterface $pager
     *
     * @return void
     */
    public function addPager(PagerInterface $pager): void;

    /**
     * Retrieves the pagers from the SearchCriteriaInterface.
     *
     * @return PagerInterface[]
     */
    public function getPagers(): array;

    /**
     * Adds a limiter to the SearchCriteriaInterface.
     *
     * @param LimiterInterface $limiter
     *
     * @return void
     */
    public function addLimiter(LimiterInterface $limiter): void;

    /**
     * Retrieves the limiters from the SearchCriteriaInterface.
     *
     * @return LimiterInterface[]
     */
    public function getLimiters(): array;
}
