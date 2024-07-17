<?php

namespace App\App\Entity;

use App\Core\Entity\Entity;

class DetailsDetteEntity extends Entity
{
    private int $id;
    private int $Dette_id;
    private int $dette_id;
    private int $id_Article;
    private int $quantite;
    private float $prix_unitaire;
    private float $montant;
  
    public function __construct()
    {
        
    }
} 