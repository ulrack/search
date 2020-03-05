<?php
/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Ulrack\Search\Common;

interface FilterGroupInterface
{
    /**
     * Retrieves filters from the FilterGroupInterface.
     *
     * @return FilterInterface[]
     */
    public function getFilters(): array;

    /**
     * Add filter to the FilterGroupInterface
     *
     * @param FilterInterface $filter
     *
     * @return void
     */
    public function addFilter(FilterInterface $filter): void;
}
