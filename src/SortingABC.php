<?php


namespace FEV;

/**
 * Class SortingABC
 * @package FEV/sorter
 * This class is realise of ascending sorting method.
 */

final class SortingABC implements SorterInterface
{
    public function sort(array $data): array
    {
        try {
            if (sort($data)) {
                return $data;
            } else {
                throw new SorterException('Something wrong with sorting');
            }
        } catch (SorterException $error) {
            die("Error: {$error->getMessage()}" . PHP_EOL);
        }
    }
}
