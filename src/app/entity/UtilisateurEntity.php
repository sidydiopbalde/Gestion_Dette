<?php
namespace App\App\Entity;

use App\Core\Entity\Entity;

 class UtilisateurEntity extends Entity{
    private int $id;
    private string $nom;
    private string $prenom;
    private string $email;
    private string $motDePasse="passer123";
    private string $photo;
    private string $telephone;
    private int $montant= 0;

    public function __construct() {
        // Constructeur vide 
    }
  
}
?>