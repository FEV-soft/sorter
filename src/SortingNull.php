<?php


namespace FEV;

class SortingNull implements SorterInterface
{
    public function Sorting(array $data): array
    {
        return $data;
    }
}
