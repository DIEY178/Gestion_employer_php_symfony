<?php
namespace App\Repository\Impl;
use App\Repository\DepartementRepository;
use App\Entity\Departement;
class DepartementRepositoryImpl implements DepartementRepository
{
    private array $departements = [];
     public function insert(Departement $departement): bool{
        array_push($this->departements, $departement);
        return true;
    }

    public function selectAll(): array
    {
        // Implementation code here
        return $this->departements;
    }
}