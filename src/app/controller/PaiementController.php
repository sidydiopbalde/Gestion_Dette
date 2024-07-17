<?php

namespace App\App\Controller;

use App\Core\Session;
use App\App\App;
use App\App\Model\PaiementModel;
use App\Core\Controller;
use App\Core\RECU\Recu;
use Dompdf\Dompdf;
use Dompdf\Options;


class PaiementController extends Controller
{
    private $paiementModel;
    private $session;
    public function __construct()
    {
        $this->paiementModel = App::getInstance()->getModel('paiement');
        Session::start();
    }

    public function payeDebt()
    {

        $id_dette = $_POST['payer'];
        Session::set('id_dette', $id_dette);
        $det = Session::get('det');

        //HASmENY=============
        //$this->paiementModel->hasMany(PaiementModel::class,'id_dette',$id_dette));

        $this->renderView('Paiement_form', ['det' => $det, 'id_dette' => $id_dette, 'error' => $error ?? '']);
    }

    public function savePaiement()
    {

        $bool = 1;
        $montant = $_POST['montant_paye'];
        $id_dette = Session::get('id_dette');
        //les dettes du client
        $det = Session::get('det');

        foreach ($det as $de) {
            if ($de->id == $id_dette) {
                if ($de->montantRestant < $montant) {
                    $bool = 0;
                    break;
                }
            }
        }
        $error = '';
        if (!$bool) {
            $error = 'le montant doit étre < au montant restant ';
        } elseif ($montant <= 0) {
            $error = 'montant must be  > 0';
        } else {

            $data = ['id_dette' => $id_dette, 'montant_verse' => $montant];
            $this->paiementModel->payerDetteRequest($data);
            $recu = new Recu();
            $recu->generateRecu($det);
        }
        $this->renderView('Paiement_form', ['error' => $error ?? '']);
    }
}
