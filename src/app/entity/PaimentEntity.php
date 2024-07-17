<?php

namespace App\App\Entity;

use App\Core\Entity\Entity;

class PaimentEntity extends Entity
{
    private int $id=0;
    private string $montant;
    private string $date;
    private int $id_dette;
    private int $montant_verse;

    public function __construct()
    {
        
    }
} 