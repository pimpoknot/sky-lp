<?php

date_default_timezone_set("America/Sao_Paulo");

// Load Composer's autoloader
require '../../vendor/autoload.php';

// caminho da raiz do projeto definida como constante para uso em outros lugares do projeto,
// como no GeraLog.php, por exemplo.
$root = str_replace('/ajax/lead', '', dirname(__FILE__));
define ('MY_ROOT_PATH', $root);

// arquivos individuais a importar
$files = array(
  '../../config/database/Connection.php'
);

foreach ($files as $file) {
  require_once($file);
}

// diretórios a importar recursivamente
$directories = array(
  '../../config/email',
  '../../funcoes/connection', 
  '../../funcoes/dao', 
  '../../funcoes/email', 
  '../../funcoes/message',
  '../../funcoes/log',
);

foreach($directories as $dirPath) {
  $fileinfos = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($dirPath)
  );
  foreach($fileinfos as $pathname => $fileinfo) {
    if (preg_match('%\.php$%', $fileinfo->getFilename())) {
      require_once($pathname);
    }
  }
}