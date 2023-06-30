<?php

namespace App\Entity;

use App\Repository\ClientsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClientsRepository::class)]
class Clients
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $profession = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column]
    private ?int $telephone = null;

    #[ORM\OneToMany(mappedBy: 'Clients', targetEntity: Comptes::class)]
    private Collection $comptes;

    #[ORM\Column(length: 255)]
    private ?string $Mots_de_passe = null;

    #[ORM\OneToMany(mappedBy: 'Clients', targetEntity: Pret::class)]
    private Collection $prets;

    #[ORM\OneToMany(mappedBy: 'Clients', targetEntity: Remboursements::class)]
    private Collection $remboursements;

    #[ORM\OneToMany(mappedBy: 'Clients', targetEntity: Depot::class)]
    private Collection $depots;

    #[ORM\OneToMany(mappedBy: 'Clients', targetEntity: Tontines::class)]
    private Collection $tontines;

    public function __construct()
    {
        $this->comptes = new ArrayCollection();
        $this->prets = new ArrayCollection();
        $this->remboursements = new ArrayCollection();
        $this->depots = new ArrayCollection();
        $this->tontines = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getProfession(): ?string
    {
        return $this->profession;
    }

    public function setProfession(string $profession): static
    {
        $this->profession = $profession;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): static
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * @return Collection<int, Comptes>
     */
    public function getComptes(): Collection
    {
        return $this->comptes;
    }

    public function addCompte(Comptes $compte): static
    {
        if (!$this->comptes->contains($compte)) {
            $this->comptes->add($compte);
            $compte->setClients($this);
        }

        return $this;
    }

    public function removeCompte(Comptes $compte): static
    {
        if ($this->comptes->removeElement($compte)) {
            // set the owning side to null (unless already changed)
            if ($compte->getClients() === $this) {
                $compte->setClients(null);
            }
        }

        return $this;
    }

    public function getMotsDePasse(): ?string
    {
        return $this->Mots_de_passe;
    }

    public function setMotsDePasse(string $Mots_de_passe): static
    {
        $this->Mots_de_passe = $Mots_de_passe;

        return $this;
    }

    /**
     * @return Collection<int, Pret>
     */
    public function getPrets(): Collection
    {
        return $this->prets;
    }

    public function addPret(Pret $pret): static
    {
        if (!$this->prets->contains($pret)) {
            $this->prets->add($pret);
            $pret->setClients($this);
        }

        return $this;
    }

    public function removePret(Pret $pret): static
    {
        if ($this->prets->removeElement($pret)) {
            // set the owning side to null (unless already changed)
            if ($pret->getClients() === $this) {
                $pret->setClients(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Remboursements>
     */
    public function getRemboursements(): Collection
    {
        return $this->remboursements;
    }

    public function addRemboursement(Remboursements $remboursement): static
    {
        if (!$this->remboursements->contains($remboursement)) {
            $this->remboursements->add($remboursement);
            $remboursement->setClients($this);
        }

        return $this;
    }

    public function removeRemboursement(Remboursements $remboursement): static
    {
        if ($this->remboursements->removeElement($remboursement)) {
            // set the owning side to null (unless already changed)
            if ($remboursement->getClients() === $this) {
                $remboursement->setClients(null);
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
            $depot->setClients($this);
        }

        return $this;
    }

    public function removeDepot(Depot $depot): static
    {
        if ($this->depots->removeElement($depot)) {
            // set the owning side to null (unless already changed)
            if ($depot->getClients() === $this) {
                $depot->setClients(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Tontines>
     */
    public function getTontines(): Collection
    {
        return $this->tontines;
    }

    public function addTontine(Tontines $tontine): static
    {
        if (!$this->tontines->contains($tontine)) {
            $this->tontines->add($tontine);
            $tontine->setClients($this);
        }

        return $this;
    }

    public function removeTontine(Tontines $tontine): static
    {
        if ($this->tontines->removeElement($tontine)) {
            // set the owning side to null (unless already changed)
            if ($tontine->getClients() === $this) {
                $tontine->setClients(null);
            }
        }

        return $this;
    }

    public function __toString(){
        return $this->nom;
    }
}
