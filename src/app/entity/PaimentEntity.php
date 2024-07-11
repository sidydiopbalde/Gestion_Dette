<?php

namespace App\App\Entity;

use App\Core\Entity\Entity;

class PaimentEntity extends Entity
{
    private int $id=0;
    private string $date;
    private float $total_verse = 0;
    private float $total_paiement;
    private int $id_dette;

    public function __construct()
    {
        
    }
} 