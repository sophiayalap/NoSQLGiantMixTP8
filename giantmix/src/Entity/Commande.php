<?php

class Commande
{
    function __construct(string $idClient, array|object $detailsProduits)
    {
        $this->idClient = $idClient;
        $this->detailsProduits = $detailsProduits;
        $this->dateCommande = date("Y-m-d H:i:s");
    }

    /**
     * @var string
     */
    private string $idClient;

    /**
     * @var string
     */
    private string $dateCommande;

    /**
     * @var array|object
     */
    private array|object $detailsProduits;

    /**
     * @return array|object
     */
    public function getDetailsProduits(): array|object
    {
        return $this->detailsProduits;
    }

    /**
     * @param array|object $detailsProduits
     */
    public function setDetailsProduits(object|array $detailsProduits): void
    {
        $this->detailsProduits = $detailsProduits;
    }

    /**
     * @return string
     */
    public function getIdClient(): string
    {
        return $this->idClient;
    }

    /**
     * @return string
     */
    public function getDateCommande()
    {
        return $this->dateCommande;
    }

    /**
     * @param string $dateCommande
     */
    public function setDateCommande($dateCommande): void
    {
        $this->dateCommande = $dateCommande;
    }

}
