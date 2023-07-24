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
    private ?string $Email = null;

    #[ORM\Column]
    private ?int $telephone = null;

    #[ORM\OneToMany(mappedBy: 'clients', targetEntity: Comptes::class, orphanRemoval: true)]
    private Collection $client;

    #[ORM\OneToMany(mappedBy: 'Client', targetEntity: Retraits::class, orphanRemoval: true)]
    private Collection $clients;

    #[ORM\OneToMany(mappedBy: 'clients', targetEntity: Pret::class, orphanRemoval: true)]
    private Collection $pret;

    #[ORM\OneToMany(mappedBy: 'clients', targetEntity: Tontines::class, orphanRemoval: true)]
    private Collection $tontines;

    public function __construct()
    {
        $this->client = new ArrayCollection();
        $this->clients = new ArrayCollection();
        $this->pret = new ArrayCollection();
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
        return $this->Email;
    }

    public function setEmail(string $Email): static
    {
        $this->Email = $Email;

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
    public function getClient(): Collection
    {
        return $this->client;
    }

    public function addClient(Comptes $client): static
    {
        if (!$this->client->contains($client)) {
            $this->client->add($client);
            $client->setClients($this);
        }

        return $this;
    }

    public function removeClient(Comptes $client): static
    {
        if ($this->client->removeElement($client)) {
            // set the owning side to null (unless already changed)
            if ($client->getClients() === $this) {
                $client->setClients(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Retraits>
     */
    public function getClients(): Collection
    {
        return $this->clients;
    }

    /**
     * @return Collection<int, Pret>
     */
    public function getPret(): Collection
    {
        return $this->pret;
    }

    public function addPret(Pret $pret): static
    {
        if (!$this->pret->contains($pret)) {
            $this->pret->add($pret);
            $pret->setClients($this);
        }

        return $this;
    }

    public function removePret(Pret $pret): static
    {
        if ($this->pret->removeElement($pret)) {
            // set the owning side to null (unless already changed)
            if ($pret->getClients() === $this) {
                $pret->setClients(null);
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
