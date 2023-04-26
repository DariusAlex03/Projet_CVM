<?php
require_once "Model/Model.php";
class Controller_identification extends Controller{

    public function action_identification(){
        $m = Model::getModel();
        $data = $m->getDemandes();
        session_start();
        if(isset($_POST['identifiant'])&& isset($_POST['mdp'])){
            $mdp = $m->getMotDePasse($_POST['identifiant']);
            $identifiant = $_POST['identifiant'];
            if (password_verify($_POST['mdp'], $mdp)){
                $_SESSION['connecte'] = true;
                $_SESSION['identifiant'] = $identifiant;
                $_SESSION['nom'] = $m->getNom($identifiant);
                $_SESSION['prenom'] = $m->getPrenom($identifiant);
                $_SESSION['date_creation'] = $m->getDateCreation($identifiant);
                $this->render('control', $data);
            }
        }
        elseif (isset($_SESSION["connecte"]) && $_SESSION["connecte"]) {
            $identifiant = $_SESSION["identifiant"];
            $this->render('control', $data);
        }
        else{
            $this->render("login", $data);
        }
    }

    public function action_creation(){
        $m = Model::getModel();
        $data = [];
        if(isset($_POST['identifiant'])&& isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mdp'])){
            $m->ajouterCompte($_POST["identifiant"], $_POST["nom"], $_POST["prenom"], $_POST["mdp"]);
            $identifiant = $_POST['identifiant'];
            $_SESSION['connecte'] = true;
            $_SESSION['identifiant'] = $identifiant;
            $_SESSION['nom'] = $m->getNom($identifiant);
            $_SESSION['prenom'] = $m->getPrenom($identifiant);
            $_SESSION['date_creation'] = $m->getDateCreation($identifiant);
            $this->render("control", $data);
        }
        elseif (isset($_SESSION["connecte"]) && $_SESSION["connecte"]){
            $this->render("control" , $data);
        }
        else {
            $this->render("signin", $data);
        }
    }

    public function action_destroy(){
        session_destroy();
        $this->action_identification();
    }

    public function action_default()
    {
        $this->action_identification();
    }
}