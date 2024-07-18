<?php

namespace App\App\Controller;

use App\App\App;
use App\App\Model\ArticleDetteModel;
use App\Core\Controller;
use App\Core\Session;


class DetteController extends Controller
{

    private $detteModel;
    private $paiementModel1;
    public $validator;
    public $article_detteModel;
    private $detailsDetteModel;
    private $paiementModel;
    private $utilisateurModel;
    private $session;


    public function __construct()
    {

        $this->utilisateurModel = App::getInstance()->getModel("utilisateur");
        $this->detteModel = App::getInstance()->getModel("dette");
        $this->paiementModel = App::getInstance()->getModel("paiement");
        $this->article_detteModel = App::getInstance()->getModel("articleDette");
        $this->paiementModel1 = App::getInstance()->getModel("ListePaiement");
        $this->detailsDetteModel = App::getInstance()->getModel("detailsDette");
        Session::start();
    }

    public function getDette()
    {

        if (isset($_POST['dette'])) {

            $telephone = $_POST['dette'];
            $dette = $this->detteModel->getDettesByUtilisateurPhone2($telephone);

            $dette[] = $dette;
            $tel = $dette[0]->telephone;
            $prenom = $dette[0]->prenom;
            $nom = $dette[0]->nom;
        }
        $this->renderView('List_Dette', ['dette' => $dette, 'tel' => $tel, 'nom' => $nom, 'prenom' => $prenom]);
    }

    public function getDette1()
    {
        if (isset($_POST['dette'])) {
            $telephone = $_POST['dette'];
            if (isset($telephone)) {

                Session::set('telephone', $telephone);
            }
            $filter = isset($_POST['filter']) ? $_POST['filter'] : 'non_soldes';


            // Pagination parameters
            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
            $limit = 3;
            $telephone = Session::get('telephone');

            $dette = $this->detteModel->getDettesByUtilisateurPhone3($telephone, $filter);
            if ($filter == 'non_soldes') {
                Session::set('det', $dette);
            }
            $detteCount = count($dette);
            if (!empty($dette)) {
                $tel = $dette[0]->telephone;
                $prenom = $dette[0]->prenom;
                $nom = $dette[0]->nom;
            }
            // Count total records for pagination
            $totalPages = ceil($detteCount / $limit);
            $this->renderView('List_Dette', [
                'dette' => $dette,
                'tel' => $tel ?? '',
                'nom' => $nom ?? '',
                'prenom' => $prenom ?? '',
                'page' => $page,
                'totalPages' => $totalPages,
                'filter' => $filter // Add the filter to the view data
            ]);
            // $this->renderView('List_Dette',['dette'=>$dette,'tel'=>$tel,'nom'=>$nom,'prenom'=>$prenom,'filter'=>$filter]);
        }
    }

    public function productList()
    {

        if (isset($_POST['product'])) {
            $id = $_POST['product'];
            var_dump($id);
            $products = $this->article_detteModel->getArticlesByDetteId($id);
        }
        $this->renderView('Product_List', ['products' => $products]);
    }

    public function ViewPaiement()
    {
        if (isset($_POST['list_paiement'])) {
            $id = $_POST['list_paiement'];

            $paiements = $this->paiementModel1->getPaimentDebt($id);
        }
        $this->renderView('List_Paiement', ['paiements' => $paiements]);
    }
    public function newDebt()
    {
        Session::set('id_user_for_debt', $_POST['nouvelle']);
        $this->renderView('New_dette', ['client' => 1]);
    }

    public function searchArticleByRef()
    {
// Session::remove('panier');
        $error_ref='';
        if (isset($_POST['ref'])) {
            $ref = $_POST['ref'];
            $articles = [];
            $article = $this->article_detteModel->getArticleByRef($ref);
            if(!$article){
                $error_ref='Ce produit ne se trouve pas dans le dépot';
              
            }else if(empty($_POST['ref'])){
                $error_ref='Veuillez entrer un reference';
            }else{

                if ($article) {
                    $articles = [
                        'libelle' => $article[0]->libelle,
                        'prix' => $article[0]->prix
                    ];
                   
                    Session::set('article', $articles);
                }
            }
        }
        $error_qte='';
        if (isset($_POST['quantite'])) {
            // if(empty($_POST['quantite'])){
            //     $error['qte']='Veuillez entrer une quantité';
            // }else{

                $article = $this->article_detteModel->getArticleByLibelle($_POST['libelle']);
                // var_dump($article[0]->quantite_stock);die;
                $error_qte='';
                if($article[0]->quantite_stock < $_POST['quantite']){
                    $error_qte='quantite non disponible';
                }else if($_POST['quantite'] < 0 || empty($_POST['quantite'])){
                    $error_qte='veuillez entrer une quantite valide';
                }else{

              
            $article = [
                'libelle' => $_POST['libelle'],
                'prix' => (float) $_POST['prix'],
                'quantite' => (int) $_POST['quantite'],
                'montant' => (float) $_POST['prix'] * (int) $_POST['quantite']
            ];

            if (!Session::get('panier')) {
                Session::set('panier', []);
            }
            $articleExists = false;
            $panier = Session::get('panier');
            // Vérifier si l'article existe déjà dans le panier
            foreach ($panier as &$existingArticle) {
                if ($existingArticle['libelle'] == $article['libelle']) {
                    $existingArticle['quantite'] += $article['quantite'];
                    $existingArticle['montant'] += $article['montant'];
                    $articleExists = true;
                    break;
                }
            }
            // Si l'article n'existe pas, l'ajouter au panier
            if (!$articleExists) {
                $panier[] = $article;
            }
            if (Session::isset('panier')) {
                Session::set('panier', $panier);
            }
            // Calculer le montant total des articles dans le panier
             $montantTotalArticle = 0;
            foreach ($panier as $item) {
                $montantTotalArticle += $item['montant'];
            }
        }
        }
        $panier = Session::get('panier');
   
        $this->renderView('New_dette', [
            'panier' => Session::get('panier') ?? '',
            'articles' => $articles ?? '',
            'montantTotalArticle' => $montantTotalArticle ?? 0,
            'error_qte'=>$error_qte,
            'error_ref'=>$error_ref
         
        ]);
    // }
    }

    public function saveDebt()
    {
        $cl_id = Session::get('id_user_for_debt');
        //    var_dump($_SESSION);
        if ($cl_id) {
            $this->detteModel->transaction(
                function () use ($cl_id) {
                    $clientId = $cl_id;
                    $panier = Session::get('panier');

                    if ($panier && count($panier) > 0) {
                        // Calculer le montant total de la dette
                        $totalDette = 0;
                        foreach ($panier as $item) {
                            $totalDette += $item['montant'];
                        }

                        // Insérer la dette dans la table Dette
                        $data = ['id_client' => $clientId, 'montant' => $totalDette];
                        $detteId = $this->detteModel->insertDette($data);
                        $id = $this->detteModel->recuplastId();

                      
                        if ($id) {
                            foreach ($panier as $item) {
                                $article = $this->article_detteModel->getArticleByLibelle($item['libelle']);
                                if ($article) {
                                    // Mettre à jour la quantité de stock de l'article
                                    $newQuantity = $article[0]->quantite_stock - $item['quantite'];
                                    // var_dump($newQuantity );die();
                                    $quantite_idArt = ['id' => $article[0]->id, 'quantite_stock' => $newQuantity];

                                    $this->article_detteModel->updateArticleQuantity($quantite_idArt);
                                    // Insérer dans la table DetailsDette
                                    $this->detailsDetteModel->insertDetailsDette([
                                        'dette_id' => $id,
                                        'id_Dette' => 1,
                                        'id_Article' => $article[0]->id,
                                        'quantite' => $item['quantite'],
                                        'montant' => $item['montant'],
                                        'prix_unitaire' => $item['prix']
                                    ]);
                                }
                            }
                            // Vider le panier après l'insertion
                            Session::set('panier', []);
        
                            echo "La dette a été enregistrée avec succès.";
                        } else {
                            echo "Erreur lors de l'enregistrement de la dette.";
                        }
                    } else {
                        echo "Le panier est vide.";
                    }
                }
            );
        } else {
            echo "ID du client non spécifié.";
        }
    }
}
