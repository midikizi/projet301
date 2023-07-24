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
    private ?string $numero_compte = null;

    #[ORM\Column]
    private ?int $solde = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_ouvert = null;

    #[ORM\Column(length: 255)]
    private ?string $Type = null;

    #[ORM\ManyToOne(inversedBy: 'client')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Clients $clients = null;

    #[ORM\OneToMany(mappedBy: 'comptes', targetEntity: Retraits::class, orphanRemoval: true)]
    private Collection $compte;

    #[ORM\OneToMany(mappedBy: 'compte', targetEntity: Depot::class, orphanRemoval: true)]
    private Collection $comptes;

    public function __construct()
    {
        $this->compte = new ArrayCollection();
        $this->comptes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroCompte(): ?string
    {
        return $this->numero_compte;
    }

    public function setNumeroCompte(string $numero_compte): static
    {
        $this->numero_compte = $numero_compte;

        return $this;
    }

    public function getSolde(): ?int
    {
        return $this->solde;
    }

    public function setSolde(int $solde): static
    {
        $this->solde = $solde;

        return $this;
    }

    public function getDateOuvert(): ?\DateTimeInterface
    {
        return $this->date_ouvert;
    }

    public function setDateOuvert(\DateTimeInterface $date_ouvert): static
    {
        $this->date_ouvert = $date_ouvert;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(string $Type): static
    {
        $this->Type = $Type;

        return $this;
    }

    public function getClients(): ?Clients
    {
        return $this->clients;
    }

    public function setClients(?Clients $clients): static
    {
        $this->clients = $clients;

        return $this;
    }

    /**
     * @return Collection<int, Retraits>
     */
    public function getCompte(): Collection
    {
        return $this->compte;
    }

    public function addCompte(Retraits $compte): static
    {
        if (!$this->compte->contains($compte)) {
            $this->compte->add($compte);
            $compte->setComptes($this);
        }

        return $this;
    }

    public function removeCompte(Retraits $compte): static
    {
        if ($this->compte->removeElement($compte)) {
            // set the owning side to null (unless already changed)
            if ($compte->getComptes() === $this) {
                $compte->setComptes(null);
            }
        }

        return $this;
    }

    public function __toString(){

        return $this->numero_compte;
    }

    /**
     * @return Collection<int, Depot>
     */
    public function getComptes(): Collection
    {
        return $this->comptes;
    }
}
