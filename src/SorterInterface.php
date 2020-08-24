<?php


namespace FEV;

/**
 * Interface SorterInterface
 * @package FEV/sorter
 * Interface with general method for realise any sorting methods.
 */

interface SorterInterface
{
    public function sort(array $data): array;
}
