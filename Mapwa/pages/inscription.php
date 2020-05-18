<?php 
$db= new Mypdo(); 
$inscriptionmanager = new InscriptionManager($db); 

  if(empty($_POST["nom"]) || empty($_POST["prenom"]) || empty($_POST["email"]) || empty($_POST["mdp"]) || empty($_POST["adresse"])){ ?>
    <article id="main">
				<section class="wrapper style4 container">
		<form method="post" action="#">
  <div class="row">
    <div class="form-group col-6">
      <label for="inputNom">Nom</label>
      <input type="text" class="form-control" name="nom" placeholder="Nom">
    </div>
    <div class="form-group col-6">
      <label for="inputPrenom">Prénom</label>
      <input type="text" class="form-control" name="prenom" placeholder="Prénom">
    </div>
</div>
 <div class="row">
     <div class="form-group col-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email" placeholder="Email">
    </div>
 </div>
 <div class="row">
  <div class="form-group col-6">
      <label for="inputPassword4">Mot de passe</label>
      <input type="password" class="form-control" name="mdp" placeholder="Mot de passe">
    </div>
    <div class="form-group col-6">
      <label for="inputPassword4">Confirmation</label>
      <input type="password" class="form-control" name="mdp" placeholder="Mot de passe">
    </div>
</div>
  <div class="form-group">
      <label for="inputState">Vous souhaitez nous rejoindre à titre : </label>
      <select id="inputState" class="form-control" name="statu">
        <option selected value="Contributeur">Contributeur</option>
        <option selected value="benevole">Bénévole</option>
        <option selected value="beneficiaire">Bénéficiair</option>
      </select>
    </div>
  <div class="form-group">
    <label for="inputAddress">Addresse</label>
    <input type="text" class="form-control" name="adresse" placeholder="123 Boulevard de charonne"></br>
  </div>
<div class="row">
					<div class="col-sm-3" style="margin: auto;">
	<input type="submit" class="button primary"></input></br>
</div>  
</form>

<?php }else {
    $inscription= new Inscription(
        array(
          'nom' => $_POST['nom'],
          'prenom'=>$_POST['prenom'],
          'mdp'=>$pass_hache = password_hash($_POST['mdp'], PASSWORD_DEFAULT),
          'email' => $_POST['email'],
          'adresse'=> $_POST['adresse'],
          'statu' => $_POST['statu']
      
  )   
);

$message= "ajout&eacute;"; 
$inscriptionmanager->add($inscription);?>

<article id="main">
        <section class="wrapper style4 container">
  <?php echo "Bienvenu ".$_POST['nom'] ; ?> <a href="index.php?page=0">connectez-vous </a>
</div>
</section>
</article>


<?php } ?>

</section>
</article>
