<?php


if(isset($_GET['message'])) {
$message = $_GET['message'];
switch($message){
	case 1 :
	$message = '<a href="#"  class="badge badge-dark dessus etiquette"> Merci, Votre message a été bien envoyé !</a>';
	break;

}
}else{
$message = '';
}


include("includes/entete.php");
include("includes/menu.php");
include("includes/header.php");
include("includes/presentation.php");
include("includes/competences.php");
include("includes/projets.php");
include("includes/experiences.php");
include("includes/contact.php");
include("includes/footer.php");







?>