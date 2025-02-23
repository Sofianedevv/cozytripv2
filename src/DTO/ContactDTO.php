<?php

namespace App\DTO;

use Symfony\Component\Validator\Constraints as Assert;

class ContactDTO
{
    #[Assert\NotBlank(message: 'L\'email est obligatoire')]
    #[Assert\Email(message: 'L\'email {{ value }} n\'est pas un email valide')]
    #[Assert\Length(max: 180, maxMessage: 'L\'email ne peut pas dépasser {{ limit }} caractères')]
    private ?string $votre_email = null;

    #[Assert\NotBlank(message: 'Le message est obligatoire')]
    #[Assert\Length(
        min: 10,
        max: 1000,
        minMessage: 'Le message doit faire au moins {{ limit }} caractères',
        maxMessage: 'Le message ne peut pas dépasser {{ limit }} caractères'
    )]
    #[Assert\Regex(
        pattern: '/^[^<>]*$/',
        message: 'Les caractères HTML ne sont pas autorisés'
    )]
    private ?string $message = null;

    public function getVotreEmail(): ?string
    {
        return $this->votre_email;
    }

    public function setVotreEmail(?string $votre_email): self
    {
        $this->votre_email = $votre_email;
        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = strip_tags($message);
        return $this;
    }
} 