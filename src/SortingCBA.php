<?php


namespace FEV;

/**
 * Class SortingCBA
 * @package FEV/sorter
 * This class is realise of descending sorting method.
 */

final class SortingCBA implements SorterInterface
{
    public function sort(array $data): array
    {
        try {
            if (rsort($data)) {
                return $data;
            } else {
                throw new SorterException('Something wrong with sorting');
            }
        } catch (SorterException $error) {
            die("Error: {$error->getMessage()}" . PHP_EOL);
        }
    }
}
