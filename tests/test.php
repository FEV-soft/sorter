<?php

require_once __DIR__ . '/../vendor/autoload.php';

use FEV\SortingABC;
use FEV\SortingCBA;
use FEV\Sorter;

$test_num_arr = [ 1,9,7,5,2 ];
$test_str_arr = [ "a", "z", "k", "t", "d"];

$sorter = new Sorter();

$result = $sorter->Sorting($test_str_arr);
echo "Sorting method not define, use NullObject mode:" . PHP_EOL;
print_r($result);

$sorter->setSortingMethod(new SortingABC());
echo "Sorting method ABCDE...:" . PHP_EOL;
$result = $sorter->Sorting($test_str_arr);
print_r($result);
$result = $sorter->Sorting($test_num_arr);
print_r($result);

$sorter->setSortingMethod(new SortingCBA());
echo "Sorting method ZYXWV...:" . PHP_EOL;
$result = $sorter->Sorting($test_str_arr);
print_r($result);
$result = $sorter->Sorting($test_num_arr);
print_r($result);
