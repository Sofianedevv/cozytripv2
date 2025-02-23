<?php

namespace App\DTO;

use Symfony\Component\Validator\Constraints as Assert;

class ReservationDTO
{
    #[Assert\NotBlank(message: 'La date de début est obligatoire')]
    #[Assert\Type("\DateTimeInterface")]
    private ?\DateTimeInterface $dateDebut = null;

    #[Assert\NotBlank(message: 'La date de fin est obligatoire')]
    #[Assert\Type("\DateTimeInterface")]
    #[Assert\GreaterThan(propertyPath: "dateDebut", message: "La date de fin doit être après la date de début")]
    private ?\DateTimeInterface $dateFin = null;

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(?\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;
        return $this;
    }
} 