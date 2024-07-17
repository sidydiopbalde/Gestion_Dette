<?php

namespace App\App\Model;

use App\Core\Model\Model;
use App\App\Entity\PayerEntity;

class PaiementModel extends Model
{
    protected string $table = 'Paiments';

    public function getEntity()
    {
        return PayerEntity::class;
    }

    public function getTotalPaiementByDetteId($detteId)
    {
        $sql = "SELECT IFNULL(SUM(montant_verse), 0) as total_paiement FROM $this->table WHERE id_dette = :detteId";
        $statement=$this->query($sql, $this->getEntity(),['detteId' => $detteId], true);
        
        if ($statement) {
        return $statement->total_paiement;
        }
    }

   public function payerDetteRequest($data){
    $sql = "INSERT INTO $this->table (id_dette, montant_verse, date) VALUES (:id_dette, :montant_verse, NOW())";
    $this->database->prepare($sql, $data,$this->getEntity());
   }

}



// public function getTotalPaiementByDetteId1($detteId)
// {
//     $sql = "SELECT IFNULL(SUM(montant_verse), 0) as total_paiement FROM $this->table WHERE id_dette = :detteId";
//     $params = ['detteId' => $detteId];
    
//     // Assurez-vous que votre méthode query retourne le bon résultat
//     $statement = $this->query($sql, $params, true);
    
//     // Vérifiez si le résultat est correct avant de le retourner
//     if ($statement) {
//         return $statement->total_paiement;
//     }
    
//     // Si quelque chose ne va pas, vous pouvez retourner 0 ou gérer l'erreur autrement
//     return 0;
// }




