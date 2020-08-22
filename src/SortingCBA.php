<?php


namespace FEV;

class SortingCBA implements SorterInterface
{
    public function Sorting(array $data): array
    {
        if (rsort($data)) {
            return $data;
        } else {
            echo "Something wrong with sorting";
        }
    }
}
