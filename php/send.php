<?php
 
// nettoyage des variables
$nom = filter_var($_POST['nom'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
/* Expression régulière permettant de vérifier qu'aucun en-tête n'est inséré dans nos champs */
$regex_head = '/[\n\r]/';
 
/* Si le formulaire n'est pas posté de notre site on renvoie vers la page d'accueil */
if($_SERVER['HTTP_REFERER'] != 'http://www.promotion-portoetenvirons.org/menuppe/2013/01/22/contacts-email-envoi-ppe.html')
{
  header('Location: http://www.promotion-portoetenvirons.org/');
} 
 
/* On vérifie qu'il n'y a aucun header dans les champs */
if (preg_match($regex_head, $email) 
            || preg_match($regex_head, $nom) 
            || preg_match($regex_head, $message))
{
    echo json_encode(array(
                            "result" => false,
                            "message" => "En-têtes interdites dans les champs du formulaire"
    ));
    return false;
}	
 
// on verifie que le nom n'est pas vide
if($nom == "")
{
    echo json_encode(array(
                            "result" => false,
                            "message" => "Veuillez entrer votre nom",
                            "input" => "#nom"
    ));
    return false;
}
 
// on verifie que l'email est un email valide
if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    echo json_encode(array(
                            "result" => false,
                            "message" => "Veuillez entrer un email valide",
                            "input" => "#email"
    ));
    return false;
}
 
// on verifie que le message n'est pas vide
if($message == "")
{
    echo json_encode(array(
                            "result" => false,
                            "message" => "Veuillez entrer votre message",
                            "input" => "#message"
    ));
    return false;
}

/* Destinataire (votre adresse e-mail) */
/* $to = 'promotion.portoetenvirons@gmail.com'; */
$to = 'promotion.portoee@orange.fr';

/* En-têtes de l'e-mail */
$headers = 'From: '.$nom.' <'.$email.'>'."\r\n\r\n";
 
/* Construction du message */
$content  = 'Bonjour,'."\r\n\r\n";
$content .= 'Ce mail a été envoyé depuis www.promotion-portoetenvirons.org par '.$nom."\r\n\r\n";
$content .= 'Voici le message qui vous est adressé :'."\r\n";
$content .= '***************************'."\r\n";
$content .= $message."\r\n";
$content .= '***************************'."\r\n";

$sujet = "Contact Association PPE";
 
// envoit de l'email
if(mail($to,$sujet,$content,$headers))
{
    echo json_encode(array(
                            "result" => true,
							"message" => "Votre message a été envoyé avec succès"
    ));
    $nom="";
    $email="";
    $message="";
    return true;
}
else
{
    echo json_encode(array(
                            "result" => false,
                            "message" => "Votre message n'a pu être envoyé"
    ));
    return false;
}
 
?>
