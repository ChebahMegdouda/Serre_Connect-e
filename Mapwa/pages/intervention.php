<?php 
$db= new Mypdo(); 
$interventionmanager = new InterventionManager($db); ?> 
<article id="main">
				<section class="wrapper style4 container">
 
					<div class="row">
					<div class="col-sm-6" style="margin:auto;">
						<h2> Ajouter une intervention </h2>
					</div>
				</div>
<?php if(empty($_POST["titre"])){ ?>
<form method="POST" action="#">
				<div class="row">
	<div class="col-6">
<label>choisir la serre : </label>
<select name="serre" class="custom-select">
  <option value="1">Serre Cuvier</option>
  <option value="2">Serre Anteuil</option>
  <option value="3">Serre Aubervilliers</option>
  <option value="4">Serre Charenton</option>
  <option value="5">Serre de la Montagne</option>
  <option value="6">Serre Arbalète</option>
</select>
</div>
 <div class='col-6'>
      <label for="inputNom">titre</label>
      <input name="titre "type="text" class="form-control" placeholder="Titre">
    </div>
</div></br>
<div class="row">
        <div class='col-6'>
      <label for="inputNom">Date</label>
      <input name="date "type="text" class="form-control" placeholder="Date">
    </div>
</div>

   
<div class="col-6">
 <div class="form-group">
    <label for="exampleFormControlInput1">Nombre intervenant</label>
    <input type="number" name="nbr"class="form-control" id="nbrintervenant" placeholder="0">
  </div>
</div>
	<div class="form-group">
    <label for="description">Description</label>
    <textarea name="description"class="form-control" id="description" rows="3"></textarea>
  </div></br>

  
 	
<div class="row">
          <div class="col-sm-3" style="margin: auto;">
  <input type="submit" value="valider" class="button primary"></input></br>
</div>  
 </div>
 </form>

<?} else {

  $intervention= new Intervention(
        array(
          'titre' => $_POST['titre'],
          'descriptif' => $_POST['description'],
          'nbrint'=> $_POST['nbr'],
          'serre' => $_POST['serre'],
          'date'=>$_POST['date']
      
  )   
);

$message= "ajout&eacute;"; 
$interventionmanager->add($intervention);?>

<article id="main">
        <section class="wrapper style4 container">
  <?php echo "l'intervention ".$_POST['titre']." a été ajouté;" ?>
 <?php }
		?>	
</section>
			</article>
	