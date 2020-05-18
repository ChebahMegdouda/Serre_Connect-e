<?php
class InscriptionManager{
	public function __construct($db){
		$this->db = $db;
	}

public function add($Inscription){
		$req = $this->db->prepare('INSERT INTO utilisateur (idUtilisateur, nom, prenom, email,  mdp, adresse, statu) VALUES (:id, :nom, :prenom, :email, :mdp,  :adresse, :statu)');
		$req->bindValue(':id',$Inscription->getId(),PDO::PARAM_INT);
		$req->bindValue(':nom',$Inscription->getNom(),PDO::PARAM_STR);
		$req->bindValue(':prenom',$Inscription->getPrenom(),PDO::PARAM_STR);
		$req->bindValue(':email',$Inscription->getEmail(),PDO::PARAM_STR);
		$req->bindValue(':mdp',$Inscription->getMdp(),PDO::PARAM_STR);
		$req->bindValue(':adresse',$Inscription->getAdresse(),PDO::PARAM_STR);
		$req->bindValue(':statu',$Inscription->getStatu(),PDO::PARAM_STR);
		$req->execute();
	}

public function getmdp($email){
		$sql = $this->db->prepare('SELECT * FROM utilisateur where email=:email');
		$sql->bindValue(':email',$email);
		$sql->execute();
		$Inscription = $sql->fetch(PDO::FETCH_OBJ);
			
			$Inscription = new Inscription($Inscription);
			return $Inscription;
		 
	}

}