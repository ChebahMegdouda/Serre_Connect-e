<article id="main">
				<section class="wrapper style4 container">
					<div class="row">
					<div class="col-sm-6" style="margin:auto;">
						<h2> Ajouter une intervention </h2>
					</div>
				</div>
			<form>
				<div class="row">
	<div class="col-6">
<label>choisir la serre : </label>
<select class="custom-select">
  <option value="1">Serre Cuvier</option>
  <option value="2">Serre Anteuil</option>
  <option value="3">Serre Aubervilliers</option>
  <option value="4">Serre Charenton</option>
  <option value="5">Serre de la Montagne</option>
  <option value="6">Serre Arbalète</option>
</select>
</div>
<div class="col-6">
<label>choisir la salle : </label>
<select class="custom-select">
  <option value="1">Salle 1</option>
  <option value="2">Salle 2</option>
  <option value="3">Salle 3</option>
</select>
</div>
</div></br>
<label for="meeting-time">Choisir la date et heure:</label>

<div class="row">
        <div class='col-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
         <div class="col-6">
	<input class="form-control" type="text" placeholder="Titre">
</div>
    </div>
   
<div class="col-6">
 <div class="form-group">
    <label for="exampleFormControlInput1">Nombre intervenant</label>
    <input type="number" class="form-control" id="nbrintervenant" placeholder="0">
  </div>
</div>
	<div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" id="description" rows="3"></textarea>
  </div></br>

  
  </form>		
<div class="row">
					<div class="col-lg-3" style="margin: auto;">
	<a href="singupin.html" class="button primary">Ajouter</a></br>
</div>
			</section>
			</article>
	