<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Email 
{
    private $mail;

    public function __construct($smtp)
    {
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        $mail->isHTML(true);

        //Server settings
        $mail->SMTPDebug  = $smtp['SMTPDebug'];  //SMTP::DEBUG_SERVER; // Enable verbose debug output
        $mail->isSMTP();                         // Send using SMTP
        $mail->Host       = $smtp['Host'];       // Set the SMTP server to send through
        $mail->SMTPAuth   = $smtp['SMTPAuth'];   // Enable SMTP authentication
        $mail->Username   = $smtp['Username'];   // SMTP username
        $mail->Password   = $smtp['Password'];   // SMTP password
        $mail->SMTPSecure = $smtp['SMTPSecure']; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port       = $smtp['Port'];       // TCP port to connect to

        //Recipients
        $mail->setFrom($smtp['FromEmail'], $smtp['FromName']);

        $this->mail = $mail;
    }

    /**
     * Define os e-mails destinário, cópia e cópia oculta
     * @param array $addresses - array que possui três arrays:
     *  to -> destinatário
     *  cc -> cópia
     *  bcc -> cópia oculta
     * @return Email a instância que chamou o método
     */
    public function setAddresses($addresses = array(
        'to' => array(), 
        'cc' => array(), 
        'bcc' => array()
        )
    )
    {
        if (isset($addresses['to'])) {
            $this->setTo($addresses['to']);
        }
        if (isset($addresses['cc'])) {
            $this->setCC($addresses['cc']);
        }
        if (isset($addresses['bcc'])) {
            $this->setBCC($addresses['bcc']);
        }
        return $this;
    }

    /**
     * Configura os e-mails de destinatário
     * @param array $to - array de endereços de e-mail
     * @return Email a instância que chamou o método
     */
    public function setTo($to)
    {
        foreach($to as $dest) {
            $this->mail->addAddress($dest);
        }
        return $this;
    }

    /**
     * Configura os e-mails de cópia
     * @param array $cc - array de endereços de e-mails para receber a cópia da mensagem
     * @return Email a instância que chamou o método
     */
    public function setCC($cc)
    {
        foreach($cc as $destCc) {
            $this->mail->addCC($destCc);
        }
        return $this;
    }

    /**
     * Configura os e-mails de cópia oculta
     * @param array $bcc - array de endereços de e-mail para receber a mensagem como cópia oculta
     * @return Email a instância que chamou o método
     */
    public function setBCC($bcc)
    {
        foreach($bcc as $destBcc) {
            $mail->addBCC($destBcc);
        }
        return $this;
    }

    /**
     * Configura o assunto do e-mail
     * @param string $subject - assunto da mensagem de e-mail
     * @return Email a instância que chamou o método
     */
    public function setSubject($subject)
    {
        $this->mail->Subject = $subject;
        return $this;
    }

    /**
     * Configura o corpo do e-mail
     * @param string $body - corpo do e-mail, podendo ser html
     * @return Email a instância que chamou o método
     */
    public function setBody($body)
    {
        $this->mail->Body = $body;
        return $this;
    }

    /**
     * Envia mensagem de e-mail
     * @return Email a instância que chamou o método
     */
    public function send()
    {
        $this->mail->send();
        return $this;
    }
}

function sendMessage($title = '', $body = '', $smtp, $mailer)
{
    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    //Server settings
    $mail->SMTPDebug  = $smtp['SMTPDebug'];  //SMTP::DEBUG_SERVER; // Enable verbose debug output
    $mail->isSMTP();                         // Send using SMTP
    $mail->Host       = $smtp['Host'];       // Set the SMTP server to send through
    $mail->SMTPAuth   = $smtp['SMTPAuth'];   // Enable SMTP authentication
    $mail->Username   = $smtp['Username'];   // SMTP username
    $mail->Password   = $smtp['Password'];   // SMTP password
    $mail->SMTPSecure = $smtp['SMTPSecure']; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = $smtp['Port'];       // TCP port to connect to

    //Recipients
    $mail->setFrom($smtp['FromEmail'], $smtp['FromName']);
    
    foreach($mailer['to'] as $dest) {
        $mail->addAddress($dest);
    }
    
    foreach($mailer['cc'] as $destCc) {
        $mail->addCC($destCc);
    }

    foreach($mailer['bcc'] as $destBcc) {
        $mail->addBCC($destBcc);
    }

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);
    $mail->Subject = $title;
    $mail->Body    = $body;

    $mail->send();
}
