<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];

$to = 'igorbusquets@gmail.com , simonegrieco@gmail.com , sigo@sigo.com.pt , simoreiracarvalho@gmail.com';
$message = 'FROM: '.$name. " \r\n " .' Email: '.$email. " \r\n".'Message: '.$message;
$headers = 'From: sigo@sigo.com.pt' . "\r\n";
 
if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
mail($to, $subject, $message, $headers); //This method sends the mail.
echo "A sua mensagem foi enviada e responderemos em breve."; // success message
}else{
echo "E-mail incorreto. Por favor digite um e-mail valido.";
}

?>