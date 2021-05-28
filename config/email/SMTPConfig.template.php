<?php

/* 
  Configurações de autenticação do envio de email.
*/
$smtpConfig = array(
  'SMTPDebug'  => 0,
  'Host'       => '',
  'SMTPAuth'   => true,
  'Username'   => '',
  'Password'   => '',
  'Port'       => 587,
  'SMTPSecure' => '', // 'tls' ou 'ssl'
  'FromEmail'  => '',
  'FromName'   => '',
);