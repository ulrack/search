<?php
/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Ulrack\Search\Common;

interface SearchCriteriaCompilerInterface
{
    /**
     * Compiles the SearchCriteriaInterface to a purposeful export.
     *
     * @param SearchCriteriaInterface $searchCriteria
     *
     * @return mixed
     */
    public function compile(SearchCriteriaInterface $searchCriteria);
}
