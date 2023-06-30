<?php

namespace App\Entity;

use App\Repository\PretRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PretRepository::class)]
class Pret
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Somme = null;

    #[ORM\Column]
    private ?float $Taux_interet = null;

    #[ORM\ManyToOne(inversedBy: 'prets')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Clients $Clients = null;

    #[ORM\OneToOne(mappedBy: 'pret', cascade: ['persist', 'remove'])]
    private ?Remboursements $remboursements = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSomme(): ?int
    {
        return $this->Somme;
    }

    public function setSomme(int $Somme): static
    {
        $this->Somme = $Somme;

        return $this;
    }

    public function getTauxInteret(): ?float
    {
        return $this->Taux_interet;
    }

    public function setTauxInteret(float $Taux_interet): static
    {
        $this->Taux_interet = $Taux_interet;

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

    public function getRemboursements(): ?Remboursements
    {
        return $this->remboursements;
    }

    public function setRemboursements(Remboursements $remboursements): static
    {
        // set the owning side of the relation if necessary
        if ($remboursements->getPret() !== $this) {
            $remboursements->setPret($this);
        }

        $this->remboursements = $remboursements;

        return $this;
    }

    public function __toString(){
        return $this->Somme;
    }
}
