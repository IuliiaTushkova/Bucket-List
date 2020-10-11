<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoryRepository::class)
 */
class Category
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $categorie;


    /**
     * @ORM\OneToMany(targetEntity=Idea::class, mappedBy="categorie")
     */
    private $idees;

    public function __construct()
    {
        $this->ideas = new ArrayCollection();
        $this->idees = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }


    /**
     * @return Collection|Idea[]
     */
    public function getIdees(): Collection
    {
        return $this->idees;
    }

    public function addIdee(Idea $idee): self
    {
        if (!$this->idees->contains($idee)) {
            $this->idees[] = $idee;
            $idee->setCategorie($this);
        }

        return $this;
    }

    public function removeIdee(Idea $idee): self
    {
        if ($this->idees->contains($idee)) {
            $this->idees->removeElement($idee);
            // set the owning side to null (unless already changed)
            if ($idee->getCategorie() === $this) {
                $idee->setCategorie(null);
            }
        }

        return $this;
    }
}
