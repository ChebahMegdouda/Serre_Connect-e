<?php
$db= new Mypdo(); 
$inscriptionmanager = new InscriptionManager($db);
 if (!isset($_SESSION['prenom'])){?>

				<section id="banner">
					<div class="inner">
						<img src="images/logo.png"></br>
					</div>
						<footer>
					<strong><h1 id="cnx"> Connexion </h1></strong>
	
<?php if(empty($_POST["email"]) || empty($_POST["mdp"])){ ?>
<form method="post" action="#">

<div class="d-flex justify-content-center">
	<div class="form-group col-4">
      <label for="inputEmail4">Email</label>
      <input style="background-color:white";type="email" class="form-control" name="email" placeholder="Email">
    </div></br>
</div>
<div class="d-flex justify-content-center">
	<div class="form-group col-4">
      <label for="inputPassword4">Confirmation</label>
      <input type="password" style="background-color:white" class="form-control" name="mdp" placeholder="Mot de passe">
    </div>

</div>


<ul class="buttons">
	<li><a href="index.php?page=10" class="button primary"> s'inscrire</a></li></br>

	<input type="submit" class="button primary" value="Connexion"></input></br>
	</footer>
</form>
<?php } else {

$email = $_POST["email"];  
$req = $db->prepare('SELECT * FROM utilisateur where email=:email');
$req->execute(array(
    'email' => $email));
$resultat = $req->fetch();

$_SESSION['prenom']=$resultat['prenom']; 

if(password_verify($_POST['mdp'],$resultat['mdp'])){?>
<article id="main">
        <section style="background-color: green" class="wrapper style4 container">
	<?php 
	echo"Bienvenu sur votre espace ".$_SESSION['prenom']; ?>
</section>
</article>
<?php } else{ ?>
<article id="main">
        <section style="background-color: green" class="wrapper style4 container">
	<p> connexion échouéé,<a href="index.php?page=0">veuillez réassayer</a>
</section>
</article
 <?php  



}

 } } else { ?>
 	<article id="main">
				<section class="wrapper style4 container">
				<?php echo"bienvenu ".$_SESSION['prenom']; ?> 
				</section> 
			</article>


 <?php }
?>


