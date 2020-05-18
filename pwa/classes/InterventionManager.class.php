<?php
class InterventionManager{
	public function __construct($db){
		$this->db = $db;
	}

public function add($Intervention){
		$req = $this->db->prepare('INSERT INTO intervention (idInt, titre, description, nbrint,  serre, date) VALUES (:id, :nom, :prenom, :email, :mdp,  :adresse, :statu)');
		$req->bindValue(':idInt',$Intervention->getId(),PDO::PARAM_INT);
		$req->bindValue(':titre',$Intervention->getTitre(),PDO::PARAM_STR);
		$req->bindValue(':description',$Intervention->getDescreptif(),PDO::PARAM_STR);
		$req->bindValue(':nbrint',$Intervention->getNbrInt(),PDO::PARAM_INT);
		$req->bindValue(':serre',$Intervention->getSerre(),PDO::PARAM_STR);
		$req->bindValue(':date',$Intervention->getDate(),PDO::PARAM_STR);
		$req->execute();
	}


}