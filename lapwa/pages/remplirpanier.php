<?php
$db= new Mypdo(); 
$paniermanager = new PanierManager($db);
if (!isset($_POST['submit']))
{?>

<form method="post">
<div class="d-flex justify-content-center row h-40">
	<div class="image_outer_container">
				<div class="image_inner_container">
					<img src="images/tomate.jpg">
				</div>
		<div class="d-flex justify-content-center row">
			<div class="custom-control custom-checkbox custom-control-inline">
  				<input type="checkbox" name="panier[]" value="; tomate" onclick="verify()"class="custom-control-input" id="defaultInline1">
  				<label class="custom-control-label" for="defaultInline1">tomate</label>
			</div>
		</div>
	</div>
	<div class="image_outer_container">
				<div class="image_inner_container">
					<img src="images/aubergine.jpg">
				</div>
		<div class="d-flex justify-content-center row">
			<div class="custom-control custom-checkbox custom-control-inline">
  				<input type="checkbox" onclick="verify()" name="panier[]" value="; aubergine" class="custom-control-input" id="deux">
  				<label class="custom-control-label" for="deux">aubergine</label>
			</div>
		</div>
	</div>
	<div class="image_outer_container">
				<div class="image_inner_container">
					<img src="images/courgette.jpg">
				</div>
		<div class="d-flex justify-content-center row">
			<div class="custom-control custom-checkbox custom-control-inline">
  				<input type="checkbox" onclick="verify()" name="panier[]" value=";  courgette"class="custom-control-input" id="trois">
  				<label class="custom-control-label" for="trois">courgette</label>
			</div>
		</div>
	</div>
</div>
<div class="d-flex justify-content-center row h-40">
	<div class="image_outer_container">
				<div class="image_inner_container">
					<img src="images/basilic.jpg">
				</div>
		<div class="d-flex justify-content-center row">
			<div class="custom-control custom-checkbox custom-control-inline">
  				<input type="checkbox" onclick="verify()" name="panier[]" value="; basilic" class="custom-control-input" id="basilic">
  				<label class="custom-control-label" for="basilic">basilic</label>
			</div>
		</div>
	</div>
	<div class="image_outer_container">
				<div class="image_inner_container">
					<img src="images/citrouille.jpg">
				</div>
		<div class="d-flex justify-content-center row">
			<div class="custom-control custom-checkbox custom-control-inline">
  				<input type="checkbox" onclick="verify()" name="panier[]" value="; citrouille" class="custom-control-input" id="citrouille">
  				<label class="custom-control-label" for="citrouille">citrouille</label>
			</div>
		</div>
	</div>
	<div class="image_outer_container">
				<div class="image_inner_container">
					<img src="images/epinard.jpg">
				</div>
		<div class="d-flex justify-content-center row">
			<div class="custom-control custom-checkbox custom-control-inline">
  				<input type="checkbox" onclick="verify()" name="panier[]" value="; oignon" class="custom-control-input" id="epinard">
  				<label class="custom-control-label" for="epinard">epinard</label>
			</div>
		</div>
	</div>
</div>
<div class="d-flex justify-content-center row h-40">
	<div class="image_outer_container">
				<div class="image_inner_container">
					<img src="images/poivron.jpg">
				</div>
		<div class="d-flex justify-content-center row">
			<div class="custom-control custom-checkbox custom-control-inline">
  				<input type="checkbox" onclick="verify()" name="panier[]"class="custom-control-input" value="; poivron" id="poivron">
  				<label class="custom-control-label" for="poivron">poivron</label>
			</div>
		</div>
	</div>
	<div class="image_outer_container">
				<div class="image_inner_container">
					<img src="images/blette.jpg">
				</div>
		<div class="d-flex justify-content-center row">
			<div class="custom-control custom-checkbox custom-control-inline">
  				<input type="checkbox" onclick="verify()" name="panier[]"class="custom-control-input" value="; blette" id="blette">
  				<label class="custom-control-label" for="blette">blette</label>
			</div>
		</div>
	</div>
	<div class="image_outer_container">
				<div class="image_inner_container">
					<img src="images/oignon.jpg">
				</div>
		<div class="d-flex justify-content-center row">
			<div class="custom-control custom-checkbox custom-control-inline">
  				<input type="checkbox" onclick="verify()"name="panier[]" value="oignon" class="custom-control-input" id="; oignon">
  				<label class="custom-control-label" for="oignon">oignon</label>
			</div>
		</div>
	</div>
</div>
<div class="d-flex justify-content-center row h-40">
	<div class="image_outer_container">
				<div class="image_inner_container">
					<img src="images/fraise.jpg">
				</div>
		<div class="d-flex justify-content-center row">
			<div class="custom-control custom-checkbox custom-control-inline">
  				<input type="checkbox" onclick="verify()" name="panier[]" value="fraise" class="custom-control-input" id="; fraise">
  				<label class="custom-control-label" for="fraise">fraise</label>
			</div>
		</div>
	</div>
	<div class="image_outer_container">
				<div class="image_inner_container">
					<img src="images/framboise.jpg">
				</div>
		<div class="d-flex justify-content-center row">
			<div class="custom-control custom-checkbox custom-control-inline">
  				<input type="checkbox" onclick="verify()" name="panier[]" class="custom-control-input" value="; framboise" id="framboise">
  				<label class="custom-control-label" for="framboise">framboise</label>
			</div>
		</div>
	</div>
	<div class="image_outer_container">
				<div class="image_inner_container">
					<img src="images/cerise.jpg">
				</div>
		<div class="d-flex justify-content-center row">
			<div class="custom-control custom-checkbox custom-control-inline">
  				<input type="checkbox" onclick="verify()" name="panier[]" class="custom-control-input" value="; cerise" id="cerise">
  				<label class="custom-control-label" for="cerise">cerise</label>
			</div>
		</div>
	</div>
</div></br>
<div class="d-flex justify-content-center">
<input type="submit" class="button primary" name="submit" value="valider"></input></br>
</div>
</section>

</form> <?php } else {
$val=" le panier :";
if(isset($_POST['panier']))

{

foreach($_POST['panier'] as $valeur){
    
     $val.=$valeur;
		
	}

}

 $panier= new Panier(
        array(
          'nom' => $_SESSION['prenom'],
          'panier'=> $val
      
  )   
);

$message= "ajout&eacute;"; 
$paniermanager->add($panier);
?>
<article id="main">
				<section class="wrapper style4 container"><?php 
echo "Nous avons bien enregistré votre panier cher ".$_SESSION['prenom'].", Il vous sera livré à la fin du mois, à votre adresse."
?> </section></article>
<?php }
?>

<!-- if(isset($_POST['panier'])){
	**if(isset($_POST['panier'])){
		$panier= new Panier(
			array(
          'nom' => $_SESSION['nom'],
		'panier' => (foreach($_POST['panier'] as $valeur)) { 
			'panier' => $valeur
		}
      
  )   
);

}**
		$panier= new Panier(
			array(
          'nom' => $_SESSION['nom'],
		(foreach($_POST['panier'] as $valeur)) { 
			'p1' => $valeur[0],
			'p2' => $valeur[1],
			'p3' => $valeur[2],
			'p4' => $valeur[3],
			'p5' => $valeur[4]
		}
      
  )   
); -->


<script type="text/javascript">
	var cb = document.querySelectorAll("[type=checkbox]");

var i = 0,
l = cb.length;

function verify(){
	for (; i<l; i++)
	cb[i].addEventListener("change", function (){
		if (document.querySelectorAll(":checked").length > 5){
			this.checked = false
			alert("vous pouvez pas séléctionner plus de 2");
		}
	}, false);

}



</script>
</section>
</article>

<style>
		  .container{
       	height: 100%;
       	align-content: center;
       }

       .image_outer_container{
       	margin-top: auto;
       	margin-bottom: auto;
       	border-radius: 50%;
       	position: relative;
       }

       .image_inner_container{
       	border-radius: 90%;
       	padding: 5px;
        background: #833ab4; 
        background: -webkit-linear-gradient(to bottom, #fcb045, #fd1d1d, #833ab4); 
        background: linear-gradient(to bottom, #fcb045, #fd1d1d, #833ab4);
       }
       .image_inner_container img{
       	height: 80px;
       	width: 80px;
       	border-radius: 50%;
       	border: 5px solid white;
       }

      
   </style>