<?php
class Panier{
  private $id; 
  private $nom;
	private $panier; 
	
 

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
        case 'panier':
          $this->setPanier($valeur);
        break;
      }
    }
  }

 
  public function setId($id){
    $this->id = $id;
  }
  public function setPanier($panier){
    $this->panier = $panier;
  }
  public function setNom($nom){
    $this->nom = $nom;
  } 
  
  public function getId(){
    return $this->id;
  }
  public function getNom(){
    return $this->nom;
  }
  public function getPanier(){
    return $this->panier;
  }
  


}