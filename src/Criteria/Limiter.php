<?php
/**
 * Copyright (C) Jyxon, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Ulrack\Search\Criteria;

use Ulrack\Search\Common\LimiterInterface;

class Limiter implements LimiterInterface
{
    /** @var array */
    private $fields;

    /**
     * Constructor
     *
     * @param string ...$fields
     */
    public function __construct(string ...$fields)
    {
        $this->fields = $fields;
    }

    /**
     * Retrieves the fields which should be fetched by the SearchCriteriaInterface.
     *
     * @return string[]
     */
    public function getFields(): array
    {
        return $this->fields;
    }
}
