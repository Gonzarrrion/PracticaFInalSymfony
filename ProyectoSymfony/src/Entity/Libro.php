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
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Biblioteca::class)]
    #[ORM\JoinColumn(name: "biblioteca_id", referencedColumnName: "id", nullable: false)]
    private ?Biblioteca $Biblioteca = null;

    #[ORM\Column(type: "string", length: 255)]
    private ?string $titulo = null;

    #[ORM\Column(type: "string", length: 255)]
    private ?string $autor = null;

    #[ORM\Column(type: "text", nullable: true)]
    private ?string $sinopsis = null;

    #[ORM\Column(type: "date")]
    private ?\DateTimeInterface $anoPublicacion = null;

    #[ORM\Column(type: "string", length: 255)]
    private ?string $editorial = null;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\Regex("/^[0-9]{1,5}([- ]?[0-9]+)*$/")]
    private ?string $isbn = null;

    #[ORM\Column(type: "integer")]
    private ?int $numEjemplares = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): static
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getAutor(): ?string
    {
        return $this->autor;
    }

    public function setAutor(string $autor): static
    {
        $this->autor = $autor;

        return $this;
    }

    public function getSinopsis(): ?string
    {
        return $this->sinopsis;
    }

    public function setSinopsis(?string $sinopsis): static
    {
        $this->sinopsis = $sinopsis;

        return $this;
    }

    public function getAnoPublicacion(): ?\DateTimeInterface
    {
        return $this->anoPublicacion;
    }

    public function setAnoPublicacion(\DateTimeInterface $anoPublicacion): static
    {
        $this->anoPublicacion = $anoPublicacion;

        return $this;
    }

    public function getEditorial(): ?string
    {
        return $this->editorial;
    }

    public function setEditorial(string $editorial): static
    {
        $this->editorial = $editorial;

        return $this;
    }

    public function getISBN(): ?string
    {
        return $this->isbn;
    }

    public function setISBN(string $isbn): static
    {
        $this->isbn = $isbn;

        return $this;
    }

    public function getNumEjemplares(): ?int
    {
        return $this->numEjemplares;
    }

    public function setNumEjemplares(int $numEjemplares): static
    {
        $this->numEjemplares = $numEjemplares;

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
