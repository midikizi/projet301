<?php

namespace App\Entity;

use App\Repository\TontinesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TontinesRepository::class)]
class Tontines
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $Date_debut = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $Date_cloture = null;

    #[ORM\Column]
    private ?int $Montant = null;

    #[ORM\ManyToOne(inversedBy: 'tontines')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Clients $Clients = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->Date_debut;
    }

    public function setDateDebut(\DateTimeInterface $Date_debut): static
    {
        $this->Date_debut = $Date_debut;

        return $this;
    }

    public function getDateCloture(): ?\DateTimeInterface
    {
        return $this->Date_cloture;
    }

    public function setDateCloture(\DateTimeInterface $Date_cloture): static
    {
        $this->Date_cloture = $Date_cloture;

        return $this;
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

    public function getClients(): ?Clients
    {
        return $this->Clients;
    }

    public function setClients(?Clients $Clients): static
    {
        $this->Clients = $Clients;

        return $this;
    }
}
