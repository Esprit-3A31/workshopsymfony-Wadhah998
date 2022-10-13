<?php

namespace App\Entity;

use App\Repository\ClassRoomRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClassRoomRepository::class)]
class ClassRoom
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $nbrstudent = null;

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

    public function getNbrstudent(): ?int
    {
        return $this->nbrstudent;
    }

    public function setNbrstudent(int $nbrstudent): self
    {
        $this->nbrstudent = $nbrstudent;

        return $this;
    }
}
