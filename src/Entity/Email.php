<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\EmailRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmailRepository::class)]
#[ApiResource]
class Email
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
