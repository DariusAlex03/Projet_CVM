<?php
require_once "Model/Model.php";
class Controller_list extends Controller{

    public function action_liste(){
        $m = Model::getModel();
        $data = $m->getDemandes();
        $this->render("control", $data);
    }

    /*public function action_supprimer_demande(){
        $m = Model::getModel();
        $m->supprimerDemande($_GET["id_sup"]);
        $data = $m->getDemandes();
        $this->render('control', $data);
    }*/
    public function action_demande(){
        $m = Model::getModel();
        if (isset($_GET["id"])){
            $data = $m->getDemandesSpec($_GET["id"]);
            $this->render("demande", $data);
        }
        else{
            $this->action_default();
        }
    }
    public function action_default()
    {
        $this->action_liste();
    }
}