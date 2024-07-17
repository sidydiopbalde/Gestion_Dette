<?php
namespace App\App\Model;
use App\Core\Model\Model;
use App\App\Entity\PaimentEntity;
class ListePaiementModel extends Model{

    public function getEntity()
    {
        return PaimentEntity::class;
    }
    
    public function getPaimentDebt($id_dette){

        $sql="SELECT
        p.montant_verse,
        p.date
    FROM
        Paiments p
    JOIN
        Dette d ON d.id = p.id_dette
    WHERE
        d.id = :id_dette;";
        $data=['id_dette'=>$id_dette];
      return $this->query($sql,$this->getEntity(),$data);
    }
}