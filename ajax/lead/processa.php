<?php

//ini_set('display_errors', 1);

require 'require.php';

// sanitiza o formulário
$data = array();
foreach($_REQUEST as $field => $value) {
  $data[$field] = filter_input(INPUT_POST, $field, FILTER_SANITIZE_SPECIAL_CHARS);
}

$dbSuccess = true;
$emailSuccess = true;

// database section
try {
  $dao = new LeadDAO($dbConfig);
  $dao->saveLead($data);
}

catch(Exception $e) {
  // echo 'Erro: '. $e->getMessage();
  $logDbMsg = "Exceção: Código: " .$e->getCode() . " Mensagem: " . $e->getMessage();
  GeraLog::getInstance()->inserirLog($logDbMsg);
  $dbSuccess = false;
}






// e-mail section
try {
  $messageGenerator = MessageGeneratorFactory::createMessageGenerator($data['Tipo']);

  $title = $messageGenerator->getTitle($data);
  $body = $messageGenerator->getBody($data, $emailFieldMapping);

  $email = new Email($smtpConfig);
  $email->setAddresses($mailerConfig)
    ->setSubject($title)
    ->setBody($body)
    ->send()
  ;
}


catch(Exception $e) {
  // echo 'Erro: '. $e->getMessage();
  $logEmailMsg = "Exceção: Código: " .$e->getCode() . " Mensagem: " . $e->getMessage();
  GeraLog::getInstance()->inserirLog($logEmailMsg);
  $emailSuccess = false;
}

$result = array('success' => $dbSuccess || $emailSuccess);
$result['message'] = $result['success'] ? 
  'Dados enviados com sucesso.' :
  'Ocorreu um erro. Por favor, tente novamente mais tarde.';

echo json_encode($result);