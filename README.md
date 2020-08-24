Simple library for sorting arrays.
===============
This library provide two methods (ascending, descending) for sorting arrays.

Installation
------------
For install this library just execute the following command

```bash
$ composer require fev/sorter
```
Usage
-----

For usage this library you need:

1. Create object form basic class `Sorter`
```php
$sorter = new Sorter();
```

2. Define 1 form 2 default sorting methods `SortingABC`, `SortingCBA` by method `setSortingMethod` 
```php
$sorter->setSortingMethod(new SortingABC());
```
or
```php
$sorter->setSortingMethod(new SortingCBA());
```

    2.1 If you not define sorting methods, then class will be work by default mode like null object pattern.

3. Use `sort` method for sorting your array.
```php
$sorter->sort($test_arr);
```

Extension
---------

For extended this library with own sorting rules create new sorting class which
implement `SorterInterface` with method `sort()`

Tests
-----

You can run tests with next command

`$ php test.php`.

License
-------

[![license](https://img.shields.io/github/license/greeflas/default-project.svg)](LICENSE)

This project is released under the terms of the BSD-3-Clause [license](LICENSE).

Copyright (c) 2020, FEV