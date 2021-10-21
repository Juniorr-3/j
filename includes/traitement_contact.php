
<?php

$adresseSite = "junior-folly.fr";
$nom = strtoupper(trim(htmlentities($_POST["nom"])));
$prenom = ucfirst(trim(htmlentities($_POST["prenom"])));
$email = $_POST["email"];
$objet = $_POST["objet"];
$message = nl2br(htmlspecialchars(trim($_POST["message"])));

if(isset($_POST['copie'])){

	$copie = "oui";
}else{
	$copie = 'non';
}

$date_message       = date("Y-m-d H:i:s"); 
$ladateFR           = date('d/m/Y'); 


srand((double)microtime()*1000000);
$aleatoire = md5(uniqid(rand()));

$sujet   = 'contact depuis mon portfolio';
$admin   = 'junior.folly@hotmail.fr';

$entete = "Form: ".$email." \n";
if ($copie =="oui")$entete .="Cc: ".$email." \n";
$entete .= "Reply-To: ".$email." \n";
$entete .= "MIME-Version: 1.0\n";




            $contenu     .="Contact depuis le Portfolio \n \n";
			$contenu     .= " Objet : ".$objet."\n";
			
            $contenu     .= "Nom : ".$nom."\n".  	"Prenom : ".$prenom."\n";
			$contenu     .= " Mail : " .$email."\n"; 
            $contenu     .= " Voici le message : " .$message."\n"; 
			
            
            

           

            
mail($admin,$sujet,$contenu,$entete);

header("location: ../index.php?message=1");

?>
