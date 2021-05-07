<?php 

if(isset($_POST['enviar'])) {
    if(!empty($_POST['name']) && !empty($_POST['email'] && !empty($_POST['subject'] && !empty($_POST['messsge'])
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $header = "From: $email" . "\r\n";
        $header.= "Reply-To: flexsantana99@gmail.com" . "\r\n";
        $header.= "X-Mailer: PHP/". phpversion();
        $mail = mail($email, $subject, $message, $header);
        if($mail){
            echo "<h4>Enviado</h4>";
        }
}