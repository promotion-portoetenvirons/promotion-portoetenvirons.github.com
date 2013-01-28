<?php
 
// nettoyage des variables
$nom = filter_var($_POST['nom'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
 
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
 
// construction du message
$content = $nom."<br /><br />".$email."<br /><br />".$message;
 
// envoit de l'email
if(mail("votreadresse@domaine.com", "Le titre de votre email", $content))
{
    echo json_encode(array(
                            "result" => true
    ));
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
