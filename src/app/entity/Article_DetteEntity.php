<?php

namespace App\App\Entity;

use App\Core\Entity\Entity;

class Article_DetteEntity extends Entity
{
    private int $id =1;
    private string $libelle; 
    private string $ref;
    private int $quantite_stock;
    private float $total_mont_art;
    private int $id_Dette;
    private float $prix_unitaire;
    private int $quantite;
    private float $prix;
    public function __construct()
    {
        
    }
} 