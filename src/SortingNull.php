<?php


namespace FEV;

/**
 * Class SortingNull
 * @package FEV/sorter
 * This class is realise of Null object patter.
 * Do nothing if not define sorting method.
 */

final class SortingNull implements SorterInterface
{
    public function sort(array $data): array
    {
        return $data;
    }
}
