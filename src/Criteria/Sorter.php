<?php
/**
 * Copyright (C) Jyxon, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Ulrack\Search\Criteria;

use Ulrack\Search\Common\SorterInterface;

class Sorter implements SorterInterface
{
    /** @var string */
    private $direction;

    /** @var string */
    private $field;

    /**
     * Constructor
     *
     * @param string $field
     * @param string $direction
     */
    public function __construct(string $field, string $direction)
    {
        $this->field = $field;
        $this->direction = $direction;
    }

    /**
     * Retrieves the direction of the sorting.
     *
     * @return string
     */
    public function getDirection(): string
    {
        return $this->direction;
    }

    /**
     * Retrieves the field on which should be sorted.
     *
     * @return string
     */
    public function getField(): string
    {
        return $this->field;
    }
}
