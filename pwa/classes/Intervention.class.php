<?php
class Intervention{
  private $id; 
  private $titre;
	private $descriptif; 
	private $date;
  private $nbrint;
  private $serre;
 

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
        case 'titre':
          $this->setTitre($valeur);
        break;
        case 'descriptif':
          $this->setDescriptif($valeur);
        break;
        case 'date':
          $this->setDate($valeur);
        break;
        case 'nbrint':
          $this->setNbrInt($valeur);
        break;
        case 'serre':
          $this->setSerre($valeur);
        break;
      }
    }
  }

 
  public function setId($id){
    $this->id = $id;
  }
  public function setTitre($titre){
    $this->titre = $titre;
  }

  public function setDescriptif($descriptif){
    $this->descriptif = $descriptif;
  }

  public function setSerre($serre){
    $this->serre = $serre;
  }
  public function setNbrInt($nbrint){
    $this->nbrint = $nbrint;
  }

  public function setDate($date){
    $this->date= $date;
  }


  
  public function getId(){
    return $this->id;
  }
  public function getTitre(){
    return $this->titre;
  }
  public function getDescrptif(){
    return $this->descriptif;
  }
  public function getNbrInt(){
    return $this->nbrint;
  }
  public function getDate(){
    return $this->date;
  }
  public function getSerre(){
    return $this->serre;
  }



}