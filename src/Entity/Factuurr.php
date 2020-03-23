<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FactuurrRepository")
 */
class Factuurr
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Klant")
     */
    private $klant_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $factuurdatum;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $vervaldatum;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $inzakeopdracht;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $korting;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKlantId(): ?Klant
    {
        return $this->klant_id;
    }

    public function setKlantId(?Klant $klant_id): self
    {
        $this->klant_id = $klant_id;

        return $this;
    }

    public function getFactuurdatum(): ?string
    {
        return $this->factuurdatum;
    }

    public function setFactuurdatum(string $factuurdatum): self
    {
        $this->factuurdatum = $factuurdatum;

        return $this;
    }

    public function getVervaldatum(): ?string
    {
        return $this->vervaldatum;
    }

    public function setVervaldatum(string $vervaldatum): self
    {
        $this->vervaldatum = $vervaldatum;

        return $this;
    }

    public function getInzakeopdracht(): ?string
    {
        return $this->inzakeopdracht;
    }

    public function setInzakeopdracht(string $inzakeopdracht): self
    {
        $this->inzakeopdracht = $inzakeopdracht;

        return $this;
    }

    public function getKorting(): ?float
    {
        return $this->korting;
    }

    public function setKorting(?float $korting): self
    {
        $this->korting = $korting;

        return $this;
    }
    public function __toString()
    {
        return $this->id.' -> '.$this->getFactuurdatum();
    }
}
