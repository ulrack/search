<?php
/**
 * Copyright (C) Jyxon, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Ulrack\Search\Component\Criteria;

use Ulrack\Search\Common\FilterInterface;

class Filter implements FilterInterface
{
    /** @var string */
    private $field;

    /** @var string */
    private $comparator;

    /** @var mixed */
    private $value;

    /**
     * Constructor
     *
     * @param string $field
     * @param string $comparator
     * @param mixed  $value
     */
    public function __construct(string $field, string $comparator, $value)
    {
        $this->field = $field;
        $this->comparator = $comparator;
        $this->value = $value;
    }

    /**
     * Retrieves the field which should be compared.
     *
     * @return string
     */
    public function getField(): string
    {
        return $this->field;
    }

    /**
     * Retrieves the comparator used in the comparison of field and value.
     *
     * @return string
     */
    public function getComparator(): string
    {
        return $this->comparator;
    }

    /**
     * Retrieves the value which should be compared against.
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}
