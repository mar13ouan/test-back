<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PockRepository")
 */
class Pock
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pocket")
     */
    private $pocket;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pockito")
     */
    private $pockito;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Title")
     */
    private $title;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $enabled;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lat;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lng;

    /**
     * @ORM\Column(type="datetime")
     */
    private $update_at;

    public function __construct()
    {
        $this->setUpdateAt(new \DateTime());
        $this->setEnabled(false);
    }
    public function __toString()
    {
        return $this->id." ";
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPocket(): ?Pocket
    {
        return $this->pocket;
    }

    public function setPocket(?Pocket $pocket): self
    {
        $this->pocket = $pocket;

        return $this;
    }

    public function getPockito(): ?Pockito
    {
        return $this->pockito;
    }

    public function setPockito(?Pockito $pockito): self
    {
        $this->pockito = $pockito;

        return $this;
    }

    public function getTitle(): ?Title
    {
        return $this->title;
    }

    public function setTitle(?Title $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function setEnabled(?bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function getLat(): ?string
    {
        return $this->lat;
    }

    public function setLat(?string $lat): self
    {
        $this->lat = $lat;

        return $this;
    }

    public function getLng(): ?string
    {
        return $this->lng;
    }

    public function setLng(?string $lng): self
    {
        $this->lng = $lng;

        return $this;
    }

    public function getUpdateAt(): ?\DateTimeInterface
    {
        return $this->update_at;
    }

    public function setUpdateAt(\DateTimeInterface $update_at): self
    {
        $this->update_at = $update_at;

        return $this;
    }
}
