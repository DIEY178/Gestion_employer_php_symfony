<?php
namespace App\Entity;
class Departement
{
    private int $id;
    private  string $name;

    public function __construct( String $name = "")
    {
        $this->name = $name;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
     public function __toString(): string
     {
        return  "id: $this->id, name: $this->name";
     }
}