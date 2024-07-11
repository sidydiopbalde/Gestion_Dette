<?php

namespace App\App\Model;

use App\Core\Model\Model;
use App\App\Entity\DetteEntity;

class DetteModel extends Model
{
    protected string $table = 'Dette';

    public function getEntity()
    {
        return DetteEntity::class;
    }

    public function getTotalDettesByUtilisateurId($utilisateurId)
    {
        $sql = "SELECT IFNULL(SUM(montant), 0) as total_dette FROM $this->table WHERE id_client = :utilisateurId";
        $statement=$this->query($sql, $this->getEntity(),['utilisateurId' => $utilisateurId], true);
        return  $statement;
    
    }

}