<?php

namespace App\Entity;

use App\Repository\LibroRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: LibroRepository::class)]
class Libro
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Titulo = null;

    #[ORM\Column(length: 255)]
    private ?string $Autor = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Sinopsis = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $AnoPublicacion = null;

    #[ORM\Column(length: 255)]
    private ?string $Editorial = null;

    #[ORM\Column(length: 255)]
    #[Assert\Regex("/^[0-9]{1,5}([- ]?[0-9]+)*$/")]
    private ?string $ISBN = null;

    #[ORM\Column(type: Types::INTEGER)]
    private ?int $NumEjemplares = null;

    #[ORM\ManyToOne(targetEntity: Biblioteca::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?Biblioteca $Biblioteca = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitulo(): ?string
    {
        return $this->Titulo;
    }

    public function setTitulo(string $Titulo): static
    {
        $this->Titulo = $Titulo;

        return $this;
    }

    public function getAutor(): ?string
    {
        return $this->Autor;
    }

    public function setAutor(string $Autor): static
    {
        $this->Autor = $Autor;

        return $this;
    }

    public function getSinopsis(): ?string
    {
        return $this->Sinopsis;
    }

    public function setSinopsis(?string $Sinopsis): static
    {
        $this->Sinopsis = $Sinopsis;

        return $this;
    }

    public function getAnoPublicacion(): ?\DateTimeInterface
    {
        return $this->AnoPublicacion;
    }

    public function setAnoPublicacion(\DateTimeInterface $AnoPublicacion): static
    {
        $this->AnoPublicacion = $AnoPublicacion;

        return $this;
    }

    public function getEditorial(): ?string
    {
        return $this->Editorial;
    }

    public function setEditorial(string $Editorial): static
    {
        $this->Editorial = $Editorial;

        return $this;
    }

    public function getISBN(): ?string
    {
        return $this->ISBN;
    }

    public function setISBN(string $ISBN): static
    {
        $this->ISBN = $ISBN;

        return $this;
    }

    public function getNumEjemplares(): ?int
    {
        return $this->NumEjemplares;
    }

    public function setNumEjemplares(int $NumEjemplares): static
    {
        $this->NumEjemplares = $NumEjemplares;

        return $this;
    }

    public function getBiblioteca(): ?Biblioteca
    {
        return $this->Biblioteca;
    }

    public function setBiblioteca(?Biblioteca $Biblioteca): self
    {
        $this->Biblioteca = $Biblioteca;

        return $this;
    }
}
