<?php


namespace FEV;

class Sorter
{
    private object $sortmethod;

    /**
     * Sorter constructor which define default sorting method - Do nothing.
     */
    public function __construct()
    {
        $this->sortmethod = new SortingNull();
    }

    /**
     * Method for define sorting type realisation.
     * @param SorterInterface $sortmethod
     */

    public function setSortingMethod(SorterInterface $sortmethod)
    {
        $this->sortmethod = $sortmethod;
    }

    /**
     * Sorting input array with define sorting type.
     * @param array $data
     * @return array
     */

    public function sort(array $data): array
    {
        return $this->sortmethod->sort($data);
    }
}
