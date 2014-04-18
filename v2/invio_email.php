<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Untitled</title>
</head>

<body>

<?php
ini_set('display_errors', 'On');
ini_set('error_reporting', E_ALL & ~E_NOTICE);
//email del destinatario del form
$destinatario = 'gianlucabarranca@gmail.com';
//oggetto dell'email inviata
$oggetto = 'Mail dal modulo contatti del tuo sito personale';
$nome=$_POST['name'];
$email=$_POST['email'];
$messaggio=$_POST['messaggio'];
//Messaggio d'errore per campi mancanti
//Error message for missing fields
$error_missing_fields= 'Per favore, completate tutti i campi del form indicati';
//Messaggio d'errore del server mail
//Error message for mail server
$error_mail_server = 'Siamo spiacenti. Si &egrave; verificato un errore e
	 l\'email non &egrave; stata inviata. Riprovate pi&ugrave; tardi.';
//Messaggio di conferma invio mail
//Info message for correct mail sent
$info_mail_sent = 'L\'email &egrave; stata inviata correttamente!.';
  
// Header Mail
$headmail.="From: $email <$email>\n";
$headmail.="Return-Path: $email\n";
$headmail.="User-Agent: Php Mail Function\n";
$headmail.="X-Accept-Language: en-us, en\n";
$headmail.="MIME-Version: 1.0\n";
$headmail.="X-Priority: 1 (Highest)\n";
$headmail.="Content-Type: text/plain; charset=ISO-8859-1; format=flowed\n";
$headmail.="Content-Transfer-Encoding: 7bit\n";

//invio l'email
$contenuto_email = "Nome: $nome\n\n"; //Queste variabili sono create nel passaggio precedente
$contenuto_email .= "Email: $email\n\n";
$contenuto_email .= "Messaggio:\n $messaggio\n\n";
//limita la lunghezza a 70 caratteri per la compatibilitˆ
$contenuto_email = wordwrap($contenuto_email,70);
//invia l'email    
$mail_sent = mail("$destinatario", "$oggetto", "$contenuto_email", "$headmail");

 if($mail_sent){
      //Se l'email viene inviata 
    $info_message = '<p class="info">' . $info_mail_sent .'<br><a href="../">Torna indietro</a></p>';
    echo $info_message;
    }
    else{
      //se ci sono stati problemi con l'invio della mail da parte del server
    $info_message = '<p class="error">' . $error_mail_server . '<br><a href="../">Torna indietro</a></p>';
    echo $info_message;
    }
    
?>

</body>
</html>
