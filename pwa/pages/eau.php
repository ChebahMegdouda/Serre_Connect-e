<article id="main">
				<section class="wrapper style4 container">
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

<div class="custom-control custom-switch" style="width:30%; margin:auto;">
  <input type="checkbox" class="custom-control-input" id="customSwitch1">
  <label class="custom-control-label" for="customSwitch1">Eau</label>
</div></br>
<div class="d-flex justify-content-center">
    <button id="lancerbtn" onclick="start()" type="button" value="lancer  " class="btn btn-success ">lancer</button></br>
</div>
<div class="d-flex justify-content-center">
    <button id="lancerbtn" onclick="pause()" type="button" value="arreter" class="btn btn-success "> pause</button>
</div>

<div class="d-flex justify-content-center">
    <div class="compteur"><strong >0:00:00:00</strong> </div>
</div>
<div class="d-flex justify-content-center">
     <button id="lancerbtn" onclick="stop()" type="button" value="arreter" class="btn btn-success "> arreter</button>
  </div>
<div class="d-flex justify-content-center">
    <button id="lancerbtn" onclick="restart()" type="button" value="arreter" class="btn btn-success "> redémarrer</button>
</div>




<script type="text/javascript">
  
  var ms = 0, s =0, m=0;
  var timer; 
  var compteur=document.querySelector('.compteur'); 
  function start(){
if (!timer){
  timer= setInterval(run,10);
}
  }
 function run(){
    compteur.textContent= geTimer();

    ms++;
    if(ms == 100){
      ms = 0; 
      s++
    }
     if(s == 60){
      s = 0; 
      m++
     }

 }

 function geTimer(){
      return (m <10 ? "0" + m: m) + ":"+(s <10 ? "0" + s : s) +":" + (ms<10 ? "0" + ms:ms);
 }
 function pause(){
  stopTimer();
 }

 function restart(){
  pause();
  start();
 }

 function pause(){
  stopTimer();
 }

 function stop(){
  stopTimer();
  ms =0;
  s=0;
  m =0;
  compteur.textContent=getTimer();
 }
 function stopTimer(){
  clearInterval(timer); 
  timer=false;
 }
</script>


				</section>
			</article>

			