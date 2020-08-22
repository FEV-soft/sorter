<?php


namespace FEV;

class Sorter
{
    private object $sortmethod;

    public function __construct()
    {
        $this->sortmethod = new SortingNull();
    }

    public function setSortingMethod(SorterInterface $sortmethod)
    {
        $this->sortmethod = $sortmethod;
    }

    public function Sorting(array $data): array
    {
        return $this->sortmethod->Sorting($data);
    }
}
