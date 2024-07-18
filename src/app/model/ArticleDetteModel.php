<?php
namespace App\App\Model;
use App\Core\Model\Model;
use App\App\Entity\Article_DetteEntity;

class ArticleDetteModel extends Model
{
    protected string $table = 'Dette';

    public function getEntity()
    {
        return Article_DetteEntity::class;
    }
    
    public function getArticlesByDetteId($id)
    {
        $sql = "SELECT 
        a.libelle, 
        a.ref, 
        det.prix_unitaire, 
        det.quantite, 
        det.montant AS total_mont_art
    FROM 
        Articles a
    LEFT JOIN 
        DetailsDettes det ON a.id = det.id_Article
    WHERE 
        det.dette_id = :id;";
        $data = ["id" => $id];
        return $this->query($sql,$this->getEntity(),   $data);
    
    }

public function getArticleByRef($ref){

    $sql="SELECT  * from
    Articles 
    where ref =:ref;";
    $data=['ref'=>$ref];
    return $this->query($sql,$this->getEntity(),$data);

}
public function getArticleByLibelle($libelle){

    $sql="SELECT  * from
    Articles 
    where libelle =:libelle;";
    $data=['libelle'=>$libelle];
    return $this->query($sql,$this->getEntity(),$data);

}
public function updateArticleQuantity($data){

    $sql="UPDATE Articles SET quantite_stock = :quantite_stock where id= :id";
  
 
    $this->database->prepare($sql, $data,$this->getEntity());
    // return  $this->query($sql,$this->getEntity(),$data);
}

// public function updateArticleQuantity($articleId, $newQuantity) {
//     $stmt = $this->db->prepare("UPDATE articles SET quantite_stock = :quantite_stock WHERE id = :id");
//     $stmt->bindParam(':quantite_stock', $newQuantity);
//     $stmt->bindParam(':id', $articleId);
//     return $stmt->execute(); // Retourne true en cas de succès
// }
}