<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PockitoRepository")
 */
class Pockito
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
    private $pockito;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pockito")
     */
    private $__self;



    public function __construct()
    { }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPockito(): ?string
    {
        return $this->pockito;
    }

    public function setPockito(?string $pockito): self
    {
        $this->pockito = $pockito;

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
        return $this->getPockito();
    }
}
