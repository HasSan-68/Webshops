<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FactuurregelRepository")
 */
class Factuurregel
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Factuurr")
     */
    private $factuur_id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Product")
     */
    private $product_id;

    /**
     * @ORM\Column(type="float")
     */
    private $productaantal;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFactuurId(): ?Factuurr
    {
        return $this->factuur_id;
    }

    public function setFactuurId(?Factuurr $factuur_id): self
    {
        $this->factuur_id = $factuur_id;

        return $this;
    }

    public function getProductId(): ?Product
    {
        return $this->product_id;
    }

    public function setProductId(?Product $product_id): self
    {
        $this->product_id = $product_id;

        return $this;
    }

    public function getProductaantal(): ?float
    {
        return $this->productaantal;
    }

    public function setProductaantal(float $productaantal): self
    {
        $this->productaantal = $productaantal;

        return $this;
    }
}
