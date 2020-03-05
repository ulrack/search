<?php
/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Ulrack\Search\Common;

interface PagerInterface
{
    /**
     * Retrieves the currently requested page for the SearchCriteriaInterface.
     *
     * @return int
     */
    public function getPage(): int;

    /**
     * Retrieves the amount of items on the page.
     *
     * @return int
     */
    public function getAmount(): int;
}
