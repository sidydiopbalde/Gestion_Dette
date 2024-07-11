<?php
//  public function findApproById($id) {
//     $stmt = $this->conn->prepare("SELECT *,c.nom,c.prenom,c.telephone FROM Approvisionnement a JOIN Client c ON c.id= a.client_id WHERE a.id = :id");
//     $stmt->bindParam(':id', $id);
//     $stmt->execute();
//     return $stmt->fetch(PDO::FETCH_ASSOC);
// }


namespace App\App\Controller;
use App\Core\Validator\Validator;
use App\App\App;
use App\Core\Controller;
use Collator;

class DetteController extends Controller{

    private $utilisateurModel;
    private $detteModel;
    private $paiementModel;
    public $validator;

    public function __construct(){
        $this->utilisateurModel = App::getInstance()->getModel("utilisateur");
        $this->detteModel = App::getInstance()->getModel("dette");
        $this->paiementModel = App::getInstance()->getModel("paiement");
    }

    //  public function findApproById($id) {
//     $stmt = $this->conn->prepare("SELECT *,c.nom,c.prenom,c.telephone FROM Approvisionnement a JOIN Client c ON c.id= a.client_id WHERE a.id = :id");
//     $stmt->bindParam(':id', $id);
//     $stmt->execute();
//     return $stmt->fetch(PDO::FETCH_ASSOC);
// }
public function getDette(){
    echo "dette";
}
public function newDette(){
    echo "nouvelle";
    $this->renderView('List_Dette',[1]);
}
}