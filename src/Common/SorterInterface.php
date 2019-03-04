<?php
/**
 * Copyright (C) Jyxon, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Ulrack\Search\Common;

interface SorterInterface
{
    /**
     * Directs the sorting in ascending order.
     *
     * @var string
     */
    const DIRECTION_ASC = 'asc';

    /**
     * Directs the sorting in descending order.
     *
     * @var string
     */
    const DIRECTION_DESC = 'desc';

    /**
     * Retrieves the direction of the sorting.
     *
     * @return string
     */
    public function getDirection(): string;

    /**
     * Retrieves the field on which should be sorted.
     *
     * @return string
     */
    public function getField(): string;
}
