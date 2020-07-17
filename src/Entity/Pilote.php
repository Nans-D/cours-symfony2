<?php

namespace App\Entity;

use App\Repository\PiloteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PiloteRepository::class)
 */
class Pilote
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=160)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=160)
     */
    private $prenom;

    /**
     * @ORM\Column(type="integer")
     */
    private $age;

    /**
     * @ORM\Column(type="string", length=160)
     */
    private $ecurie;

    /**
     * @ORM\Column(type="integer")
     */
    private $numero;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombreCourse;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombrePodium;

    /**
     * @ORM\Column(type="integer")
     */
    private $victoire;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getEcurie(): ?string
    {
        return $this->ecurie;
    }

    public function setEcurie(string $ecurie): self
    {
        $this->ecurie = $ecurie;

        return $this;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getNombreCourse(): ?int
    {
        return $this->nombreCourse;
    }

    public function setNombreCourse(int $nombreCourse): self
    {
        $this->nombreCourse = $nombreCourse;

        return $this;
    }

    public function getNombrePodium(): ?int
    {
        return $this->nombrePodium;
    }

    public function setNombrePodium(int $nombrePodium): self
    {
        $this->nombrePodium = $nombrePodium;

        return $this;
    }

    public function getVictoire(): ?int
    {
        return $this->victoire;
    }

    public function setVictoire(int $victoire): self
    {
        $this->victoire = $victoire;

        return $this;
    }
}
