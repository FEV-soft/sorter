<?php


namespace FEV;

class SortingABC implements SorterInterface
{
    public function Sorting(array $data): array
    {
        if (sort($data)) {
            return $data;
        } else {
            echo "Something wrong with sorting";
        }
    }
}
