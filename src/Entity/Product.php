<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
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
    private $productomschrijving;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $productbtw;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $productprijs;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductomschrijving(): ?string
    {
        return $this->productomschrijving;
    }

    public function setProductomschrijving(?string $productomschrijving): self
    {
        $this->productomschrijving = $productomschrijving;

        return $this;
    }

    public function getProductbtw(): ?int
    {
        return $this->productbtw;
    }

    public function setProductbtw(?int $productbtw): self
    {
        $this->productbtw = $productbtw;

        return $this;
    }

    public function getProductprijs(): ?int
    {
        return $this->productprijs;
    }

    public function setProductprijs(?int $productprijs): self
    {
        $this->productprijs = $productprijs;

        return $this;
    }
    public function __toString()
    {
        return $this->id.' -> '.$this->getProductomschrijving();
    }
}
