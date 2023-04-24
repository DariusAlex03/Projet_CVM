<?php
class Model
{
    private $bd;
    private static $instance = null;

    private function __construct()
    {
        $this->bd = new PDO("pgsql:host=localhost;dbname=darius", "darius", "buzurica03");
        $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->bd->query("SET nameS 'utf8'");
    }

    public static function getModel()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * @param $identifiant
     * @return mixed
     * Pour cette methode l'identifiant est le mail de l'utilisateur.
     * L'identifiant est defini comme étant le mail
     */
    public function getMotDePasse($identifiant){
        $requette = $this->bd->prepare("SELECT mdp from administrateur where mail = :mail");
        $requette->bindValue('mail', $identifiant);
        $requette->execute();
        $tableau = $requette->fetch(PDO::FETCH_NUM);
        return $tableau[0];
    }

    /**
     * @param $identifiant
     * @return mixed
     * Pour cette methode l'identifiant est le mail de l'utilisateur
     * L'identifiant est defini comme étant le mail
     */
    public function getNom($identifiant){
        $requette = $this->bd->prepare("SELECT nom from administrateur where mail = :identifiant");
        $requette->bindValue('identifiant', $identifiant);
        $requette->execute();
        $tableau = $requette->fetch(PDO::FETCH_NUM);
        return $tableau[0];
    }

    /**
     * @param $identifiant
     * @return mixed
     * Pour cette methode l'identifiant est le mail de l'utilisateur
     * L'identifiant est defini comme étant le mail
     */
    public function getPrenom($identifiant){
        $requette = $this->bd->prepare("SELECT prenom from administrateur where mail = :identifiant");
        $requette->bindValue('identifiant', $identifiant);
        $requette->execute();
        $tableau = $requette->fetch(PDO::FETCH_NUM);
        return $tableau[0];
    }

    /**
     * @param $identifiant
     * @return mixed
     * Pour cette methode l'identifiant est le mail de l'utilisateur
     * L'identifiant est defini comme étant le mail
     */
    public function getRole($identifiant){
        $requette = $this->bd->prepare("SELECT role from administrateur where mail = :identifiant");
        $requette->bindValue('identifiant', $identifiant);
        $requette->execute();
        $tableau = $requette->fetch(PDO::FETCH_NUM);
        return $tableau[0];
    }

    /**
     * @param $identifiant
     * @return mixed
     * Pour cette methode l'identifiant est le mail de l'utilisateur
     * L'identifiant est defini comme étant le mail
     */
    public function getDateCreation($identifiant){
        $requette = $this->bd->prepare("SELECT date_creation from administrateur where mail = :identifiant");
        $requette->bindValue('identifiant', $identifiant);
        $requette->execute();
        $tableau = $requette->fetch(PDO::FETCH_NUM);
        return $tableau[0];
    }

    public function ajouterCompte($identifiant, $nom, $prenom,  $motDePasse){
        $requette = $this->bd->prepare("INSERT INTO administrateur(mail, nom, prenom, mdp, role, date_creation ) VALUES (:identifiant , :nom , :prenom, :motDePasse, :role, :date)");
        $role = 'utilisateur';
        $motDePasseHash = crypt($motDePasse, 'md5');
        $dt = 1649318400;
        $date_creation = date("Y-m-d", $dt);
        $requette->execute(array(
            'identifiant' => $identifiant ,
            'nom' => $nom ,
            'prenom' => $prenom ,
            'motDePasse' => $motDePasseHash,
            'role' => "administrateur",
            'date' => $date_creation));
    }

}