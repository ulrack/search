<?php
/**
 * Copyright (C) Jyxon, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Ulrack\Search\Common;

interface LimiterInterface
{
    /**
     * Retrieves the fields which should be fetched by the SearchCriteriaInterface.
     *
     * @return string[]
     */
    public function getFields(): array;
}
