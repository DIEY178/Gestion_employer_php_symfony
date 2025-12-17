<?php
namespace App\Repository\Impl;
use App\Repository\DepartmentRepository;
use App\Entity\Department;

class DepartmentRepositoryImpl implements DepartmentRepository
{
    private array $departements = [];

    public function insert(Department $department): bool{
        array_push($this->departements, $department);
        return true;
    }

    public function selectAll(): array
    {
        
        return $this->departements;
    }
}