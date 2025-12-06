<?php
namespace App\Controller;

use App\Repository\DepartementRepository;

class DepartementController
{
    private  DepartementRepository $departementRepository;

    public function __construct(DepartementRepository $departementRepository)
    {
        $this->departementRepository = $departementRepository;
    }
    public function AddDepartement(string $name):bool
    {
        $departement = new \App\Entity\Departement();
        $departement->setName($name);
        return $this->departementRepository->insert($departement);
    }
    public function getDepartements():array
    {
        return $this->departementRepository->selectAll();
    }
    public function index():void
    {
        $departements = $this->getDepartements();
        foreach($departements as $departement){
            echo "Departement ID: ".$departement->getId()." - Name: ".$departement->getName()."\n";
        }
    }
}
    