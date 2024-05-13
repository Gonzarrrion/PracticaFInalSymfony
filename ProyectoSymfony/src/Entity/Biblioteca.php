<?php

namespace App\Entity;

use App\Repository\BibliotecaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

//IMPORTANTE, FALTA POR PONER EL CAMPO DE NORMAS QUE SERA UN PDF
#[ORM\Entity(repositoryClass: BibliotecaRepository::class)]
class Biblioteca
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nombre = null;

    #[ORM\Column(type: Types::TEXT)]
    // Constraint que obliga a que el texto contenga un numero al final
    #[Assert\Regex(pattern: '/\d/', message: 'El texto debe contener un número')]
    private ?string $Direccion = null;

    #[ORM\Column(length: 255)]
    private ?string $Ciudad = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $HorarioApertura = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $HorarioCierre = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $FechaFundacion = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $normasName;

    /**
     * @Vich\UploadableField(mapping="normas", fileNameProperty="normasName")
     * @var File|null
     */
    private $normasFile;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updatedAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->Nombre;
    }

    public function setNombre(string $Nombre): static
    {
        $this->Nombre = $Nombre;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->Direccion;
    }

    public function setDireccion(string $Direccion): static
    {
        $this->Direccion = $Direccion;

        return $this;
    }

    public function getCiudad(): ?string
    {
        return $this->Ciudad;
    }

    public function setCiudad(string $Ciudad): static
    {
        $this->Ciudad = $Ciudad;

        return $this;
    }

    public function getHorarioApertura(): ?\DateTimeInterface
    {
        return $this->HorarioApertura;
    }

    public function setHorarioApertura(\DateTimeInterface $HorarioApertura): static
    {
        $this->HorarioApertura = $HorarioApertura;

        return $this;
    }

    public function getHorarioCierre(): ?\DateTimeInterface
    {
        return $this->HorarioCierre;
    }

    public function setHorarioCierre(\DateTimeInterface $HorarioCierre): static
    {
        $this->HorarioCierre = $HorarioCierre;

        return $this;
    }

    public function getFechaFundacion(): ?\DateTimeInterface
    {
        return $this->FechaFundacion;
    }

    public function setFechaFundacion(\DateTimeInterface $FechaFundacion): static
    {
        $this->FechaFundacion = $FechaFundacion;

        return $this;
    }

    public function getNormasName(): ?string
    {
        return $this->normasName;
    }

    public function setNormasName(?string $normasName): self
    {
        $this->normasName = $normasName;

        return $this;
    }

    public function getNormasFile(): ?File
    {
        return $this->normasFile;
    }

    public function setNormasFile(?File $normasFile = null): void
    {
        $this->normasFile = $normasFile;

        if (null !== $normasFile) {
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

}
