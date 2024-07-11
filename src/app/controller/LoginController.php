<?php
namespace App\App\Controller;
use App\App\App;
use App\Core\Controller;
use App\Core\Validator;

class LoginController extends Controller {
    private $utilisateurModel;

    public function __construct() {
        $this->utilisateurModel = App::getInstance()->getModel("utilisateur");
    }

    public function showLogin() {
        $this->renderView('form.html');
    }

    public function login() {
        // $validator = new Validator();
        // $validator->validate($_POST, [
        //     'email' => 'required|email',
        //     'password' => 'required|min:6'
        // ]);

        // if ($validator->fails()) {
        //     $this->renderView('form.html', ['errors' => $validator->errors()]);
        // } else {
        //     $email = $_POST['email'];
        //     $password = $_POST['password'];
            
        //     $user = $this->utilisateurModel->findByEmail($email);

        //     if ($user && $user->motDePasse === $password) {
        //         $roles = $this->utilisateurModel->getUserRoles($user->id);

        //         if (in_array('admin', $roles) || (strcasecmp($user->nom, 'ndiaye') == 0 && strcasecmp($user->prenom, 'baba issa') == 0)) {
        //             $this->redirect('/accueil');
        //         } else {
        //             $this->redirect('/pageclient');
        //         }
        //     } else if ($email === 'babaissandiaye242@gmail.com' && $password === '786360662') {
        //         // Cas spécial pour babaissandiaye242@gmail.com et mot de passe 786360662
        //         $this->redirect('/accueil');
        //     } else {
        //         $this->renderView('form.html', ['errors' => ['login' => 'Email ou mot de passe invalide']]);
        //     }
        // }
    }
}
?>