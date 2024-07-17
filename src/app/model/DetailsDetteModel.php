<?php
namespace App\App\Model;
use App\Core\Model\Model;
use App\App\Entity\DetailsDetteEntity;

class DetailsDetteModel extends Model
{
    protected string $table = 'DetailsDettes';

    public function getEntity()
    {
        return DetailsDetteEntity::class;
    }

    // 'dette_id' => $id,
    // 'id_Dette' => $id,
    // 'id_Article' => $article[0]->id,
    // 'quantite' => $item['quantite'],
    // 'montant' => $item['montant'],
    // 'prix_unitaire' => $item['prix']
    // inserer une nouvelle dette
    public function insertDetailsDette($data){
        $sql = "INSERT INTO $this->table (dette_id, id_Article,quantite,montant,prix_unitaire,id_Dette) VALUES (:dette_id, :id_Article,:quantite,:montant,:prix_unitaire,:id_Dette);";
        // var_dump($data);
        // die();
         $this->database->prepare($sql, $data,$this->getEntity());
       
    }
    
}