<?php
    function menu_accueil(){
     echo'
<body>
<!-- Main container -->
<div class="page-container">

<!-- Hero Bloc -->
<div id="hero-bloc" class="bloc hero bgc-white bg-map-overlay d-bloc">
<div class="video-bg-contianer">
    <video class="bloc-video" preload="auto" loop="loop" autoplay="autoplay">
      <source src="src/vid/video-placeholder.mp4" type="video/mp4" />
    </video>
  </div>
  <div class="container nav-container bloc-sm hero-nav">
    <nav class="navbar row">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.html"><img src="src/img/cropped-logo.png" alt="logo" /></a>
        <button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-1">
          <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
        </button>
      </div>
       <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
          <li><a id="pl-1" href="index.php?page=accueil" class="ltc-smoky-black">Accueil</a></li>
          <li><a id="pl-1" href="index.php?page=metiers" class="ltc-smoky-black">Métiers</a></li>
           <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Formations <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php?page=theorique">Théorique ULM</a></li>
            <li><a href="index.php?page=pratique">Pratique drône</a></li>
            <li><a href="index.php?page=module">Modules complémentaires</a></li>
            <li><a href="index.php?page=equipements">Nos équipements</a></li>
          </ul>
        </li>
          <li><a id="pl-1" href="index.php?page=academie" class="ltc-smoky-black">L\'académie</a></li>
          <li><a id="pl-1" href="index.php?page=contact" class="ltc-smoky-black">Contact</a></li>
        </ul>
      </div>
    </nav>
  </div>
    ';
    }
  function menu(){
    echo'
  <body>
  <div class="page-container">
 <!-- Navigation Bloc -->
<div id="b-nav" class="bloc-container">
  <div id="bloc-nav" class="d-mode">
    <div class="bloc bgc-white" id="nav-bloc">
      <div class="container bloc-sm">
        <nav class="navbar row">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.html"><img src="src/img/cropped-logo.png" alt="logo" /></a>
        <button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-1">
          <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
        </button>
      </div>
       <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
          <li><a id="pl-1" href="#" class="ltc-smoky-black">Accueil</a></li>
          <li><a id="pl-1" href="../Site2/xz.html" class="ltc-smoky-black">Métiers</a></li>
           <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Formations <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php?page=theorique">Théorique ULM</a></li>
            <li><a href="#">Pratique drône</a></li>
            <li><a href="#">Modules complémentaires</a></li>
            <li><a href="#">Nos équipements</a></li>
          </ul>
        </li>
          <li><a id="pl-1" href="#" class="ltc-smoky-black">L\'académie</a></li>
          <li><a id="pl-1" href="#" class="ltc-smoky-black">Contact</a></li>
        </ul>
      </div>
    </nav>
      </div>
    </div>
  </div>
</div>
<!-- Navigation Bloc END -->

<!-- bloc-3 -->
<div class="bloc bgc-white tc-white bg-Unknown d-bloc" id="bloc-3">
  <div class="video-bg-contianer">
    <video class="bloc-video" preload="auto" loop="loop" autoplay="autoplay">
      <source src="src/vid/ulm.mp4" type="video/mp4" />
    </video>
  </div>
  <div class="container bloc-lg">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="mg-md text-center">
          Sur le chemin du succés :
        </h2>
        <h2 class="mg-md text-center">
          Examen théorique ULM
        </h2>
      </div>
    </div>
  </div>
</div>

  ';
  }
  function menu_metiers(){
    echo'
  <body>
  <div class="page-container">
 <!-- Navigation Bloc -->
<div id="b-nav" class="bloc-container">
  <div id="bloc-nav" class="d-mode">
    <div class="bloc bgc-white" id="nav-bloc">
      <div class="container bloc-sm">
        <nav class="navbar row">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.html"><img src="src/img/cropped-logo.png" alt="logo" /></a>
        <button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-1">
          <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
        </button>
      </div>
       <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
          <li><a id="pl-1" href="#" class="ltc-smoky-black">Accueil</a></li>
          <li><a id="pl-1" href="../Site2/xz.html" class="ltc-smoky-black">Métiers</a></li>
           <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Formations <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Théorique ULM</a></li>
            <li><a href="#">Pratique drône</a></li>
            <li><a href="#">Modules complémentaires</a></li>
            <li><a href="#">Nos équipements</a></li>
          </ul>
        </li>
          <li><a id="pl-1" href="#" class="ltc-smoky-black">L\'académie</a></li>
          <li><a id="pl-1" href="#" class="ltc-smoky-black">Contact</a></li>
        </ul>
      </div>
    </nav>
      </div>
    </div>
  </div>
</div>
<!-- Navigation Bloc END -->



  ';
  }
	function entete(){
		echo'
<!doctype html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
      <link rel="stylesheet" type="text/css" href="./src/css/bootstrap.css">
      <link rel="stylesheet" id="ppstyle" type="text/css" href="src/style.css">
      <link rel="stylesheet" href="./src/css/animate.css" /><link rel="stylesheet" href="./src/css/font-awesome.min.css"/>
      <script src="./src/js/jquery-2.1.0.min.js"></script>
      <script src="./src/js/bootstrap.js"></script>
      <script src="./src/js/blocs.js"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <title></title>
    </head>
 			';
	}
  function entete_theorique(){
    echo'
<!doctype html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
      <link rel="stylesheet" type="text/css" href="./src/css/bootstrap.css">
      <link rel="stylesheet" id="ppstyle" type="text/css" href="src/style_theorique.css">
      <link rel="stylesheet" href="./src/css/animate.css" /><link rel="stylesheet" href="./src/css/font-awesome.min.css"/>
      <script src="./src/js/jquery-2.1.0.min.js"></script>
      <script src="./src/js/bootstrap.js"></script>
      <script src="./src/js/blocs.js"></script>
      <title></title>
    </head>
      ';
  }
  function  entete_metiers(){
   echo' <!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" type="image/png" href="favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <link rel="stylesheet" type="text/css" href="./src/css/bootstrap.css">
    <link rel="stylesheet" id="ppstyle" type="text/css" href="src/style_metiers.css">
    <link rel="stylesheet" href="./src/css/animate.css" /><link rel="stylesheet" href="./src/css/font-awesome.min.css"/><link rel="stylesheet" href="./src/css/linecons.min.css"/><link rel="stylesheet" href="./src/css/ionicons.min.css"/>
    <script src="./src/js/jquery-2.1.0.min.js"></script>
    <script src="./src/js/bootstrap.js"></script>
    <script src="./src/js/blocs.js"></script>

    <title>xz - </title>
</head>';
  }

	function bas(){
		echo'
    <div class="bloc l-bloc bgc-gris" id="bloc-3">
  <div class="container bloc-lg">
    <div class="row">
      <div class="col-sm-3">
        <h3 class="mg-md tc-brandeis-blue">
          Nos partenaires
        </h3><a href="index.html" class="a-btn a-block">DJI</a><a href="index.html" class="a-btn a-block">GoPro</a><a href="index.html" class="a-btn a-block">AirInov</a><br/>
      </div>
      <div class="col-sm-3">
        <h3 class="mg-md tc-brandeis-blue">
          Agricole
        </h3><a href="index.html" class="a-btn a-block">Agridrone</a><a href="index.html" class="a-btn a-block">Culture</a><a href="index.html" class="a-btn a-block">Suivi d\'essai</a><a href="index.html" class="a-btn a-block">Contact</a>
      </div>
      <div class="col-sm-3">
        <h3 class="mg-md tc-brandeis-blue">
          Formations
        </h3><a href="index.html" class="a-btn a-block">Métiers</a><a href="index.html" class="a-btn a-block">Théorique ULM</a><a href="index.html" class="a-btn a-block">Pratiques drone</a><a href="index.html" class="a-btn a-block">Modules</a><a href="index.html" class="a-btn a-block">Thermographie</a><a href="index.html" class="a-btn a-block">Cadrage</a><a href="index.html" class="a-btn a-block">Nos équipements</a><a href="index.html" class="a-btn a-block">L\'académie</a>
      </div>
      <div class="col-sm-3">
        <h3 class="mg-md tc-brandeis-blue">
          Communication
        </h3><a href="index.html" class="a-btn a-block">Particuliers</a><a href="index.html" class="a-btn a-block">Profesionnels</a><a href="index.html" class="a-btn a-block">Batiments</a><a href="index.html" class="a-btn a-block">Médias</a><a href="index.html" class="a-btn a-block">Equipements</a>
      </div>

    </div>
  </div>
</div>
<!-- Footer - bloc-3 END -->


</div>
<!-- Main container END -->
</body>

<!-- Google Analytics -->

<!-- Google Analytics END -->

</html>
		';
	}

function accueil_mobile(){
echo'
  <!doctype html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta name="keywords" content="">
      <meta name="description" content="">
      <link rel="stylesheet" href="src/style_mobile.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
      <title></title>
    </head>
  <body>
    <img src="src/img/cropped-logo.png" class="responsive-img center-block logo"/>
      <div class="row centered">
        <div class="bouton">
          <ul>
            <li id="formations"><a href="#">Formations</a></li>
            <li id="communication"><a href="#">Communication</a></li>
            <li id="urba"><a href="#">Urba 360</a></li>
            <li id="blog"><a href="#">Blog</a></li>
          </ul>
        </div>
      </div>
      <div id="footer">
        <div class="container">
          <ul>
            <li><img src="src/img/facebook_mobile.png" class="responsive-img"/></li>
            <li><img src="src/img/instagram.png"/></li>
            <li><img src="src/img/vimeo.png"/></li>
            <li><img src="src/img/googleplus.png"/></li>
            <li><img src="src/img/phone.png"/></li>
          </ul>
        </div>
        </div>
        <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="src/js/jquery.min.js"></script>
    <script type="text/javascript" src="src/js/general.js"></script>
   </body>
</html>
  ';
}
function accueil_pc(){

  echo'pc';
}
function entete_pratique(){
  echo'
    <!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" type="image/png" href="favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <link rel="stylesheet" type="text/css" href="./src/css/bootstrap.css">
    <link rel="stylesheet" id="ppstyle" type="text/css" href="src/style_pratique.css">
    <link rel="stylesheet" href="./src/css/font-awesome.min.css"/>
    <script src="./src/js/jquery-2.1.0.min.js"></script>
    <script src="./src/js/bootstrap.js"></script>
    <script src="./src/js/blocs.js"></script>

    <title>xz - </title>
</head>

  ';
}
?>
