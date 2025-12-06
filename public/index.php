<?php
 require_once __DIR__ . "/../vendor/autoload.php";

$departementRepository = new \App\Repository\Impl\DepartementRepositoryImpl();
$departementController = new \App\Controller\DepartementController($departementRepository);
$departementController->index();

for ($i = 1; $i <= 10; $i++) {
    $departementController->AddDepartement("Departement " . $i);
}
foreach ($departementController->getDepartements() as $departement) {
    echo $departement . "\n";
}