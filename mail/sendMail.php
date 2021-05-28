<?php
require '../vendor/autoload.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


$Fnome = $_GET['Fnome'];
$Femail = $_GET['Femail'];
$Fddd = $_GET['Fddd'];
$Ftel = $_GET['Ftel'];
$Fmensagem = $_GET['Fmensagem'];
$Fform = $_GET['Fform'];



$emails = [
    'alan@internit.com.br',
    'lucas.jose@internit.com.br',
    //'marketing@construtoradinamica.com.br',
    //'contato.marketing@construtoradinamica.com.br'
];


if( !empty($Fnome) && !empty($Femail) &&!empty($Fddd) &&!empty($Ftel)):

    foreach ($emails as $emailEnviar):


    $mail = new PHPMailer;

    $mail->isSMTP();                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;               // Enable SMTP authentication
    $mail->Username = 'residenceskye@gmail.com';   // SMTP username
    $mail->Password = 'skyeresidence123';   // SMTP password
    $mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                    // TCP port to connect to

        // Sender info
        $mail->setFrom('noreplay@qrgold.com', 'LP Sky');
        //$mail->addReplyTo('noreply@bettina.com', 'Betinna Residence');

        // Add a recipient
        $mail->addAddress($emailEnviar);

        // Set email format to HTML
        $mail->isHTML(true);

        // Mail subject
        $mail->Subject = 'Contato - LP Sky';


// Mail body content
        $bodyContent = "<h1>Contato Realizado - LP Sky</h1>";

//$bodyContent .= '<h3>Formulario <b>' . $Fform . '</b> </h3><br>';

        $bodyContent .= '<p>';
        $bodyContent .= '<b>Nome:</b> ' . $Fnome;
        $bodyContent .= '<br><b>Email:</b> ' . $Femail;
        $bodyContent .= '<br><b>Telefone:</b> ' . $Fddd . ' ' . $Ftel;
        //$bodyContent .= '<br>Mensagem: ' . $Fmensagem;
        $bodyContent .= '</p>';

    //$bodyContent .= '<br>Empresa: '.$empresa ;
    //$bodyContent .= '<br>Empresa Email: '.$empresaEmail;
    //$bodyContent .= '<br>EmpresaId: ' .$empresaId;

    $mail->Body = $bodyContent;

    // Send email

    if($mail->send()) {


    } else {

    }

endforeach;
endif;

