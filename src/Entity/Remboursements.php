<?php

namespace App\Entity;

use App\Repository\RemboursementsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RemboursementsRepository::class)]
class Remboursements
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Payement = null;

    #[ORM\OneToOne(inversedBy: 'remboursements', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Pret $pret = null;

    #[ORM\ManyToOne(inversedBy: 'remboursements')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Clients $Clients = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPayement(): ?int
    {
        return $this->Payement;
    }

    public function setPayement(int $Payement): static
    {
        $this->Payement = $Payement;

        return $this;
    }

    public function getPret(): ?Pret
    {
        return $this->pret;
    }

    public function setPret(Pret $pret): static
    {
        $this->pret = $pret;

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
