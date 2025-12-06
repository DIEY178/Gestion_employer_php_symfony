<?php
namespace App\Repository;
use App\Entity\Departement;
interface DepartementRepository
{
    public function insert(Departement $departement):bool;
    public function selectAll():array;
}
