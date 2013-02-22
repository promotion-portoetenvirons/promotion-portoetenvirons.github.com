<?php
	error_reporting(0);
	ini_set("display_errors","Off"); 
	/* Si le formulaire n'est pas posté de notre site on renvoie vers la page d'accueil */
	if($_SERVER['HTTP_REFERER'] != 'http://www.promotion-portoetenvirons.org/menuppe/2013/01/21/contacts-email-envoi-ppe.html')
	{
	  header('Location: http://www.promotion-portoetenvirons.org/');
	} 
	if($_POST){
		// response hash
		$response = array('type'=>'', 'message'=>'');
		// nettoyage des variables
		$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
		$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
		$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
		
		try {
			// do some sort of data validations, very simple example below
			$required_fields = array('name', 'email', 'message');
			foreach($required_fields as $field){
				if(empty($_POST[$field])){
					if($field=='name'){
					throw new Exception('Le champs Nom et prénom est requis');
					}else if($field=='email'){
					throw new Exception('Le champs Adresse mail est requis');
					}else if($field=='message'){
					throw new Exception('Le champs Message est requis');
					}
				}
			}
			// on verifie que l'email est un email valide
			if(!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
				throw new Exception('Veuillez entrer une adresse mail valide.');
			}
		
			// ok, field validations are ok
			// now add to data to DB, Send Email, ect.
			/* Destinataire (votre adresse e-mail) */
			/*$to = 'promotion.portoetenvirons@gmail.com';*/
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
			if(!mail($to,$sujet,$content,$headers)){
				throw new Exception('Echec de la soumission du message.');
			}
			// let's assume everything is ok, setup successful response
			$response['type'] = 'success';
			$response['message'] = 'Merci votre message a été envoyé avec succès';	
		} catch(Exception $e){
			$response['type'] = 'error';
			$response['message'] = $e->getMessage();
		}
		// now we are ready to turn this hash into JSON
		print json_encode($response);
		exit;
	}
?>
