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
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(type: Types::TEXT)]
    // Constraint que obliga a que el texto contenga un numero al final
    #[Assert\Regex(pattern: '/\d/', message: 'El texto debe contener un número')]
    private ?string $direccion = null;

    #[ORM\Column(length: 255)]
    private ?string $ciudad = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $horario_apertura = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $horario_cierre = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $fecha_fundacion = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
 /*   private $normasName;

    /**
     * @Vich\UploadableField(mapping="normas", fileNameProperty="normasName")
     * @var File|null
     */
/*    private $normasFile;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
/*    private $updatedAt;*/

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): static
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getCiudad(): ?string
    {
        return $this->ciudad;
    }

    public function setCiudad(string $ciudad): static
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    public function getHorarioApertura(): ?\DateTimeInterface
    {
        return $this->horario_apertura;
    }

    public function setHorarioApertura(\DateTimeInterface $horario_apertura): static
    {
        $this->horario_apertura = $horario_apertura;

        return $this;
    }

    public function getHorarioCierre(): ?\DateTimeInterface
    {
        return $this->horario_cierre;
    }

    public function setHorarioCierre(\DateTimeInterface $horario_cierre): static
    {
        $this->horario_cierre = $horario_cierre;

        return $this;
    }

    public function getFechaFundacion(): ?\DateTimeInterface
    {
        return $this->fecha_fundacion;
    }

    public function setFechaFundacion(\DateTimeInterface $fecha_fundacion): static
    {
        $this->fecha_fundacion = $fecha_fundacion;

        return $this;
    }
/*
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
*/
}
