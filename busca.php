<?php

require_once('vendor/autoload.php');
require_once('email.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exeception;

$email = $_POST['email'];
$busca = $_POST['busca'];

$mail = new PHPMailer(true);//habilitar o disparo de Exception

try{
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();

    //config autenticar SMTP
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'alexwallaxx@gmail.com';
    $mail->Password   = 'Alexia2706';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    //info remetente
    $mail->setFrom('alexwallaxx@gmail.com', 'Alex Wallace');
    $mail->addReplyTo('alexwallaxx@gmail.com', 'Alex Wallace');

    //info destinatario
    $mail->addAddress($email);

    //configs do email
    $mail->IsHTML(true);
    $mail->Subject = utf8_decode("Resultado da sua busca.");
    $mail->Body = utf8_decode("Funcionarios encontrados em sua pesquisa: <br /><br />" . $result_tot . "<br /><br />");

    //Envia o e-mail
    $mail->send();
    echo '<h2>E-mail enviado com sucesso!!!</h2>';

}
catch(Exeception $e){
    echo 'Erro ao enviar: ' . $e->getMessage();
}

?>