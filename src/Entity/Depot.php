<?php

namespace App\Entity;

use App\Repository\DepotRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DepotRepository::class)]
class Depot
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Montant = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $Date_depot = null;

    #[ORM\ManyToOne(inversedBy: 'depots')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Comptes $Comptes = null;

    #[ORM\ManyToOne(inversedBy: 'depots')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Clients $Clients = null;

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

    public function getDateDepot(): ?\DateTimeInterface
    {
        return $this->Date_depot;
    }

    public function setDateDepot(\DateTimeInterface $Date_depot): static
    {
        $this->Date_depot = $Date_depot;

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
