<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  body {
    margin:0px!important;

  }
</style>


<meta charset="UTF-8"> 
</head>
<body>
  <?php 
  include('navbar.php');
  ?>



  <center>






    <div id="index">
      <div class="content2" align="center">
        <div class="subcontent" align="center">


          <div class="card2" align="center"> <div class="card_text">
            Bonjour et bienvenue sur mon site CV !
          </div></div>  <br> <div class="card">    <div class="card_text">
            <div class="anim">
              <i class="fa fa-user" aria-hidden="true" style="font-size:12em"></i>
            </div>
            <br>
            <div style="font-size:2em;">
              Oriane Jandaly
            </div>
            <div style="font-size:1.5em;">
              18 ans
            </div>
            <div style="font-size:1.5em;"><br>
              Etudiant en école d'ingénierie informatique
            </div>
            <div style="font-size:1em;"><br>
              <div class="anim"> <i class="fa fa-envelope" aria-hidden="true"></i> jandalyoriane@hotmail.com</div>

              <div class="anim"> <i class="fa fa-phone" aria-hidden="true"></i> 07 77 05 83 44</div>

              <div class="anim"><i class="fa fa-map-marker" aria-hidden="true"></i> 143, avenue lacassagne - 69003 LYON</div></div>
            </h3>
          </div>
        </div>

      </div>
    </div>

  </div>
  <?php
  include('profil.php');
  include('parcours.php');

  ?>
</body>
</html>

<script>
  function random() {
      return Math.floor((Math.random() * 2) + 1);
}
var rand = random();
if(rand == 1) {
 $("#index").animate({opacity: '1'},"slow");   
}
else if(rand == 2) {
       document.getElementById("index").style.opacity = "1";
     document.getElementById("index").style.left = $(window).width()+"px";
   $("#index").animate({left: '0px'},"slow"); 

}
  var active;
  hasactive = 0;
  function Show(element_name) {
     rand = random();
if(rand == 1) {
   if(hasactive == 1) {
     active.style.zIndex = "2";
   } 

   var element = document.getElementById(element_name);
   element.style.zIndex = "10";
   element.style.opacity = "1"; 
      element.style.left = $(window).width()+"px"; 
   element.style.display = "block";
   var name = element_name;
   name =   name.charAt(0).toUpperCase() + name.slice(1);
   if(name == "Index") {
     name = "Accueil"; 
   }
   document.getElementById(element_name+"_nav").innerHTML = '<li class="active">'+name+'</li>';
   if(element_name != "index") {
      document.getElementById("index").style.zIndex = "1";
    document.getElementById("index_nav").innerHTML = '<li><a class="link" href="javascript:Show(\'index\')">Accueil</a></li>';
  }
  if(element_name != "profil") {
    document.getElementById("profil").style.zIndex = "1";
  document.getElementById("profil_nav").innerHTML = '<li><a class="link" href="javascript:Show(\'profil\')">Profil</a></li>';
}
if(element_name != "parcours") {
  document.getElementById("parcours").style.zIndex = "1";
  document.getElementById("parcours_nav").innerHTML = '<li><a class="link" href="javascript:Show(\'parcours\')">Parcours</a></li>';
}
if(hasactive == 1) {
     active.style.zIndex = "2";
   } 


$("#"+element_name).animate({left: '0px'},"slow");  


active = element;
hasactive = 1;
}
else {
   if(hasactive == 1) {
     active.style.zIndex = "2";
   } 

   var element = document.getElementById(element_name);
   element.style.zIndex = "10";
   element.style.opacity = "0"; 
   element.style.display = "block";
   var name = element_name;
   name =   name.charAt(0).toUpperCase() + name.slice(1);
   if(name == "Index") {
     name = "Accueil"; 
   }
   document.getElementById(element_name+"_nav").innerHTML = '<li class="active">'+name+'</li>';
   if(element_name != "index") {
      document.getElementById("index").style.zIndex = "1";
    document.getElementById("index_nav").innerHTML = '<li><a class="link" href="javascript:Show(\'index\')">Accueil</a></li>';
  }
  if(element_name != "profil") {
    document.getElementById("profil").style.zIndex = "1";
  document.getElementById("profil_nav").innerHTML = '<li><a class="link" href="javascript:Show(\'profil\')">Profil</a></li>';
}
if(element_name != "parcours") {
  document.getElementById("parcours").style.zIndex = "1";
  document.getElementById("parcours_nav").innerHTML = '<li><a class="link" href="javascript:Show(\'parcours\')">Parcours</a></li>';
}
if(hasactive == 1) {
     active.style.zIndex = "2";
   } 


$("#"+element_name).animate({opacity: '1'},"slow");  


active = element;
hasactive = 1;
}
}
</script>
