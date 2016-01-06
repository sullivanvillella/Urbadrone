<?php
   require_once 'src/connexion.php';
   require_once 'src/listePages.php';
   require_once 'src/presentation.php';
   require_once 'src/views/view_formation.php';
   require_once 'src/views/view_theorique.php';
   require_once 'src/views/view_metiers.php';
   require_once 'src/views/view_pratique.php';
   require_once 'src/class/Mobile_Detect.php';
   $contenu=getPage();
   $contenu();
   //bas();
?>
