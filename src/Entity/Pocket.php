<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PocketRepository")
 */
class Pocket
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pocket;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pocket")
     */
    private $__self;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPocket(): ?string
    {
        return $this->pocket;
    }

    public function setPocket(?string $pocket): self
    {
        $this->pocket = $pocket;

        return $this;
    }

    public function getSelf(): ?self
    {
        return $this->__self;
    }

    public function setSelf(?self $__self): self
    {
        $this->__self = $__self;

        return $this;
    }
    public function __toString()
    {
        return $this->getPocket();
    }
}
