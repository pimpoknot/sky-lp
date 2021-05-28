<?php

class FormProcessor
{
  private $dao;
  private $mailer;
  private $messageGenerator;
  
  public function __construct($dao, $mailer, $messageGenerator)
  {
    $this->dao = $dao;
    $this->mailer = $mailer;
    $this->messageGenerator = $messageGenerator;
  }

  public function processDatabase($data)
  {
    $dbSuccess = true;
    // database section
    try {
      $this->dao->saveLead($data);
    }
    catch(Exception $e) {
      // $this->errorHandler->handle($e);
      $dbSuccess = false;
    }
    return $dbSuccess;
  }

  public function processEmail($data, $emailFieldMapping, $to, $cc = array(), $bcc = array())
  {
    $emailSuccess = true;
    // e-mail section
    try {
      $title = $this->messageGenerator->getTitle($data);
      $body = $this->messageGenerator->getBody($data, $emailFieldMapping);

      $this->mailer->setTo($to)
        ->setCC($cc)
        ->setBCC($bcc)
        ->setSubject($title)
        ->setBbody($body)
        ->send()
      ;
    }
    catch(Exception $e) {
      // echo 'Erro: '. $e->getMessage();
      $logEmailMsg = "Exceção: Código: " .$e->getCode() . " Mensagem: " . $e->getMessage();
      GeraLog::getInstance()->inserirLog($logEmailMsg);
      $emailSuccess = false;
    }
    return $emailSuccess;
  }

  public function process($data, $emailFieldMapping)
  {

  }
}