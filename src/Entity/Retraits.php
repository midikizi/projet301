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
    private ?int $montant = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_retrait = null;

    #[ORM\ManyToOne(inversedBy: 'compte')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Comptes $comptes = null;

    #[ORM\ManyToOne(inversedBy: 'clients')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Clients $Client = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): static
    {
        $this->montant = $montant;

        return $this;
    }

    public function getDateRetrait(): ?\DateTimeInterface
    {
        return $this->date_retrait;
    }

    public function setDateRetrait(\DateTimeInterface $date_retrait): static
    {
        $this->date_retrait = $date_retrait;

        return $this;
    }

    public function getComptes(): ?Comptes
    {
        return $this->comptes;
    }

    public function setComptes(?Comptes $comptes): static
    {
        $this->comptes = $comptes;

        return $this;
    }

    public function getClient(): ?Clients
    {
        return $this->Client;
    }

    public function setClient(?Clients $Client): static
    {
        $this->Client = $Client;

        return $this;
    }
}
