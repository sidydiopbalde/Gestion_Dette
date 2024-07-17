<?php

namespace App\App\Entity;

use App\Core\Entity\Entity;

class DetteEntity extends Entity
{
    private int $id =1;
    private string $date;
    private string $nom;
    private string $prenom;
    private string $email;
    private string $date_dette;
    private float $totalDette=0;
    private float $montantVerse;
    private float $telephone;
    private float $montantDette;
    private float $montant;
    private float $montantRestant;
    private int $id_dette;

   
    // u.id,
    //     u.nom,
    //     u.prenom,
    //     u.email,
    //     d.date as date_dette,
    //     SUM(d.montant) AS totalDette,
    //     SUM(p.montant_verse) AS montantVerse
    public function __construct()
    {
        
    }
} 