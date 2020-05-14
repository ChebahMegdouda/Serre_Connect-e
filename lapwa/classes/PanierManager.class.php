<?php
class PanierManager{
	public function __construct($db){
		$this->db = $db;
	}

public function add($Panier){
		$req = $this->db->prepare('INSERT INTO panier (idPanier, nom, panier) VALUES (:id, :nom, :panier )');
		$req->bindValue(':id',$Panier->getId(),PDO::PARAM_INT);
		$req->bindValue(':nom',$Panier->getNom(),PDO::PARAM_STR);
		$req->bindValue(':panier',$Panier->getPanier(),PDO::PARAM_STR);
		$req->execute();
	}


}