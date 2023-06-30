<?php

namespace App\Entity;

use App\Repository\RetraitsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RetraitsRepository::class)]
class Retraits
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Montant = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $Date_retrait = null;

    #[ORM\ManyToOne(inversedBy: 'retraits')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Comptes $Comptes = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMontant(): ?int
    {
        return $this->Montant;
    }

    public function setMontant(int $Montant): static
    {
        $this->Montant = $Montant;

        return $this;
    }

    public function getDateRetrait(): ?\DateTimeInterface
    {
        return $this->Date_retrait;
    }

    public function setDateRetrait(\DateTimeInterface $Date_retrait): static
    {
        $this->Date_retrait = $Date_retrait;

        return $this;
    }

    public function getComptes(): ?Comptes
    {
        return $this->Comptes;
    }

    public function setComptes(?Comptes $Comptes): static
    {
        $this->Comptes = $Comptes;

        return $this;
    }
}
