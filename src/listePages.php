<?php

function getPage(){

  $detect = new Mobile_Detect;

  $lesPages['accueil'] = "accueil_pc";
  $lesPages['formation']="viewFormation";
  $lesPages['theorique'] = "viewTheorique";
  $lesPages['metiers'] = "viewMetiers";
  $lesPages['pratique'] = "viewPratique";
  if(isset($_GET['page'])){

    $page=$_GET['page'];
  }else{
      if ( $detect->isMobile() ) {
        $lesPages['accueil']="accueil_mobile";
      }
      $page="accueil";
  }

  if(isset($lesPages[$page])){

    $contenu=$lesPages[$page];
  }else{

    $contenu=$lesPages['accueil'];
  }

  return $contenu;
}

?>
