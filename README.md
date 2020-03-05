[![Build Status](https://travis-ci.com/ulrack/search.svg?branch=master)](https://travis-ci.com/ulrack/search)

# Ulrack Search

Ulrack Search is an implementation of search criteria for applications.
It tries to talk to data in application through a common interface.

## Installation

To install the package run the following command:

```
composer require ulrack/search
```

## Usage

### Search Criteria Compilers

Search criteria compilers are used to compile a filled search criteria object.
The output can be used by a package apply the search criteria to the data query.

There is no implementation provided in this package for a compiler.
This is because it is application specific.

A search criteria compiler can be created by extending the `\Ulrack\Search\Common\SearchCriteriaCompilerInterface`.
The implementation expects one function `compile`.
The function accepts a `\Ulrack\Search\Common\SearchCriteriaInterface` object as an argument.
This object should then be compiled to whatever the application expects.

### Search Criteria

Search criteria objects are build on the `\Ulrack\Search\Common\SearchCriteriaInterface`.
These objects group all underlying search related objects by getting these injected.

The implementation is provided in the class `\Ulrack\Search\Component\Criteria\SearchCriteria`.

The `SearchCriteria` object can receive and retrieve the following objects:
- `\Ulrack\Search\Common\FilterGroupInterface`
Can be added by calling: `addFilterGroup` with the `FilterGroup` as an argument.
Can be retrieved by calling: `getFilterGroups` and will return an array of `FilterGroups`.

- `\Ulrack\Search\Common\LimiterInterface`
Can be added by calling: `addLimiter` with the `Limiter` as an argument.
Can be retrieved by calling: `getLimiters` and will return an array of `Limiters`.

- `\Ulrack\Search\Common\PagerInterface`
Can be added by calling: `addPager` with the `Pager` as an argument.
Can be retrieved by calling: `getPagers` and will return an array of `Pagers`.

- `\Ulrack\Search\Common\SorterInterface`
Can be added by calling: `addSorter` with the `Sorter` as an argument.
Can be retrieved by calling: `getSorters` and will return an array of `Sorters`.

### Filter Groups

Filter groups are used to combine filters into one (in the case of SQL `AND` separated) group of filters.
Multiple `FilterGroups` on a `SearchCriteria` would result in (in the case of SQL) `OR` separated filters.

A `Filter` can be added to the filter group by calling: `addFilter`.
It accepts an instance of `\Ulrack\Search\Common\FilterInterface` as its argument.
To retrieve the added `Filters` in an array, the function `getFilters` can be called.

### Filters

Filters are used to narrow down the results of a request by matching values to a field with a comparator.

Filters expect their arguments in the constructor.
The first argument expects a field for the filter.
The second argument expects a comparator,
which should be one of of the following out of the `\Ulrack\Search\Common\FilterInterface`:
- `FilterInterface::COMPARATOR_EQ`
Equals comparator "=". Checks if the field equals the value.

- `FilterInterface::COMPARATOR_NEQ`
Not equals comparator "!=". Checks if the field does not equal the value.

- `FilterInterface::COMPARATOR_GT`
Greater than comparator ">". Check if the field is greater than the value.

- `FilterInterface::COMPARATOR_GTEQ`
Greater than or equals comparator ">=".
Checks if the field is greater than or equals the value.

- `FilterInterface::COMPARATOR_LT`
Less than comparator "<". Check if the field is less than the value.

- `FilterInterface::COMPARATOR_LTEQ`
Less than or equals comparator "<=".
Checks if the field is less than or equals the value.

- `FilterInterface::COMPARATOR_IN`
In comparator. Checks if the field occurs in the value.

- `FilterInterface::COMPARATOR_NIN`
Not in comparator. Checks if the field does not occur in the value.

- `FilterInterface::COMPARATOR_LIKE`
Like comparator. Checks if the field looks like the value.

- `FilterInterface::COMPARATOR_NOT`
Not comparator. Checks if the field is not like the value.
Can be used for example in a query for a NOT NULL statement.

The third argument expects the value which should be compared.

The field can be retrieved with the `getField` function.
The comparator can be retrieved with the `getComparator` function.
The value can be retrieved with the `getValue` function.

### Limiters

Limiters are used to reduce the size of the result.

Limiters expect their arguments in the constructor.
One variadic argument can be supplied which consists of the fields.

The fields can be retrieved with the `getFields` function.

### Pagers

Pagers are used to retrieve a section of the results.

Pagers expect their arguments in the constructor.
The first argument of a `Pager` expects an integer which indicates the page.
The second argument of a `Pager` expects an integer which determines the page size.

The page can be retrieved with the function `getPage`.
The size can be retrieved with the function `getSize`.

### Sorters

Sorters are used to sort the results of a data request.

Sorters expect their arguments in the constructor.
The first argument of a `Sorter` expects a string which indicates the field.
The second argument of a `Sorter` expects a string which indicates the direction.

The direction can be one of the following from the `\Ulrack\Search\Common\SorterInterface`:
- `SorterInterface::DIRECTION_ASC`
This sets the sorting pattern to ascending.

- `SorterInterface::DIRECTION_DESC`
This sets the sorting pattern to descending.

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## MIT License

Copyright (c) 2019 GrizzIT

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
