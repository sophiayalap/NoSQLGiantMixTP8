<?php

namespace App\Entity;

class Panier
{
    /**
     * @var string
     */
    private $idPanier;

    /**
     * @var array
     */
    private $produits;

    /**
     * @return array
     */
    public function getProduits(): array
    {
        return $this->produits;
    }

    /**
     * @param array $produits
     */
    public function setProduits(array $produits): void
    {
        $this->produits = $produits;
    }

    /**
     * @return string
     */
    public function getIdPanier(): string
    {
        return $this->idPanier;
    }
}
