<?php
/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Ulrack\Search\Common;

interface FilterInterface
{
    /**
     * Equals comparator "=".
     * Checks if the field equals the value.
     *
     * @var string
     */
    const COMPARATOR_EQ = 'eq';

    /**
     * Not equals comparator "!=".
     * Checks if the field does not equal the value.
     *
     * @var string
     */
    const COMPARATOR_NEQ = 'neq';

    /**
     * Greater than comparator ">".
     * Checks if the field is greater than the value.
     *
     * @var string
     */
    const COMPARATOR_GT = 'gt';

    /**
     * Greater than or equals comparator ">=".
     * Checks if the field is greater than or equals the value.
     *
     * @var string
     */
    const COMPARATOR_GTEQ = 'gteq';

    /**
     * Less than comparator "<".
     * Checks if the field is less than the value.
     *
     * @var string
     */
    const COMPARATOR_LT = 'lt';

    /**
     * Less than or equals comparator "<=".
     * Checks if the field is less than or equals the value.
     *
     * @var string
     */
    const COMPARATOR_LTEQ = 'lteq';

    /**
     * In comparator.
     * Checks if the field occurs in the value.
     *
     * @var string
     */
    const COMPARATOR_IN = 'in';

    /**
     * Not in comparator.
     * Checks if the field does not occur in the value.
     *
     * @var string
     */
    const COMPARATOR_NIN = 'nin';

    /**
     * Like comparator.
     * Checks if the field looks like the value.
     *
     * @var string
     */
    const COMPARATOR_LIKE = 'like';

    /**
     * Not comparator.
     * Checks if the field is not like the value.
     * Can be used for example in a query for a NOT NULL statement.
     *
     * @var string
     */
    const COMPARATOR_NOT = 'not';

    /**
     * Retrieves the field which should be compared.
     *
     * @return string
     */
    public function getField(): string;

    /**
     * Retrieves the comparator used in the comparison of field and value.
     *
     * @return string
     */
    public function getComparator(): string;

    /**
     * Retrieves the value which should be compared against.
     *
     * @return mixed
     */
    public function getValue();
}
