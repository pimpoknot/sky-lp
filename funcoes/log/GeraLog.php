<?php

// Código obtido do projeto lp-2-quartos e adaptado aqui
// Classe responsável por registrar erros ocorridos no dia em um arquivo sob o diretório var/log do projeto
class GeraLog{ 

	public static $instance; 
	
	private function __construct() { 
	} 
	
	public static function getInstance(){ 
    if (!isset(self::$instance)) 
      self::$instance = new GeraLog(); 
    
    return self::$instance; 
	}
  
  /**
   * Insere uma mensagem de erro em um arquivo de log no diretório var/log deste projeto (MY_ROOT_PATH).
   * @param string $msg - mensagem a ser inserida no log
   */
	public function inserirLog($msg){ 
    $msg = "[".date("d-m-Y, H:i:s")."] ".$msg."\n\n";
    $fp = fopen(MY_ROOT_PATH."/var/log/error_log_".date("d-m-Y").".txt",'a');
    fwrite($fp, $msg); 
    fclose($fp); 
	} 

} 