<?php
class Inscription{
  private $id; 
  private $nom;
	private $prenom; 
	private $mdp;
  private $adresse;
  private $email;
  private $statu;
 

	public function __construct($valeurs = array()){
    if (!empty($valeurs)){
      $this->affecte($valeurs);
    }
  }

public function affecte($donnees){
    foreach($donnees as $attribut => $valeur){
      switch ($attribut) {
        case 'id':
          $this->setId($valeur);
        break;
        case 'nom':
          $this->setNom($valeur);
        break;
        case 'prenom':
          $this->setPrenom($valeur);
        break;
        case 'email':
          $this->setEmail($valeur);
        break;
        case 'mdp':
          $this->setMdp($valeur);
        break;
        case 'adresse':
          $this->setAdresse($valeur);
        break;
        case 'statu':
          $this->setStatu($valeur);
        break;
      }
    }
  }

 
  public function setId($id){
    $this->id = $id;
  }
  public function setMdp($mdp){
    $this->mdp = $mdp;
  }

  public function setNom($nom){
    $this->nom = $nom;
  }

  public function setPrenom($prenom){
    $this->prenom = $prenom;
  }
  public function setStatu($statu){
    $this->statu = $statu;
  }

  public function setEmail($email){
    $this->email = $email;
  }

   public function setAdresse($adresse){
    $this->adresse = $adresse;
  }
  
  public function getId(){
    return $this->id;
  }
  public function getNom(){
    return $this->nom;
  }
  public function getPrenom(){
    return $this->prenom;
  }
  public function getAdresse(){
    return $this->adresse;
  }
  public function getEmail(){
    return $this->email;
  }
  public function getMdp(){
    return $this->mdp;
  }
  public function getStatu(){
    return $this->statu;
  }



}