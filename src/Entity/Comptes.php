<?php

namespace App\Entity;

use App\Repository\ComptesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ComptesRepository::class)]
class Comptes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Numero_compte = null;

    #[ORM\Column]
    private ?int $Solde = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $Date_ouvert = null;

    #[ORM\Column(length: 255)]
    private ?string $Type_compte = null;

    #[ORM\ManyToOne(inversedBy: 'comptes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Clients $Clients = null;

    #[ORM\OneToMany(mappedBy: 'Comptes', targetEntity: Retraits::class, orphanRemoval: true)]
    private Collection $retraits;

    #[ORM\OneToMany(mappedBy: 'Comptes', targetEntity: Depot::class)]
    private Collection $depots;

    public function __construct()
    {
        $this->retraits = new ArrayCollection();
        $this->depots = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroCompte(): ?string
    {
        return $this->Numero_compte;
    }

    public function setNumeroCompte(string $Numero_compte): static
    {
        $this->Numero_compte = $Numero_compte;

        return $this;
    }

    public function getSolde(): ?int
    {
        return $this->Solde;
    }

    public function setSolde(int $Solde): static
    {
        $this->Solde = $Solde;

        return $this;
    }

    public function getDateOuvert(): ?\DateTimeInterface
    {
        return $this->Date_ouvert;
    }

    public function setDateOuvert(\DateTimeInterface $Date_ouvert): static
    {
        $this->Date_ouvert = $Date_ouvert;

        return $this;
    }

    public function getTypeCompte(): ?string
    {
        return $this->Type_compte;
    }

    public function setTypeCompte(string $Type_compte): static
    {
        $this->Type_compte = $Type_compte;

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

    /**
     * @return Collection<int, Retraits>
     */
    public function getRetraits(): Collection
    {
        return $this->retraits;
    }

    public function addRetrait(Retraits $retrait): static
    {
        if (!$this->retraits->contains($retrait)) {
            $this->retraits->add($retrait);
            $retrait->setComptes($this);
        }

        return $this;
    }

    public function removeRetrait(Retraits $retrait): static
    {
        if ($this->retraits->removeElement($retrait)) {
            // set the owning side to null (unless already changed)
            if ($retrait->getComptes() === $this) {
                $retrait->setComptes(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Depot>
     */
    public function getDepots(): Collection
    {
        return $this->depots;
    }

    public function addDepot(Depot $depot): static
    {
        if (!$this->depots->contains($depot)) {
            $this->depots->add($depot);
            $depot->setComptes($this);
        }

        return $this;
    }

    public function removeDepot(Depot $depot): static
    {
        if ($this->depots->removeElement($depot)) {
            // set the owning side to null (unless already changed)
            if ($depot->getComptes() === $this) {
                $depot->setComptes(null);
            }
        }

        return $this;
    }

    public function __toString(){
        return $this->Numero_compte;
    }
}
