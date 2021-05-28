<?php

require_once 'MessageGeneratorInterface.php';

/**
 * 
 */
class SimpleMessageGenerator implements MessageGeneratorInterface
{
  /**
   * @param array $request
   * @return string Título da mensagem de e-mail
   */
  function getTitle($request)
  {
    return 'Contato';
  }
  
  /**
   * @param array $request
   * @param array $fieldMapping
   */
  function getBody($request, $fieldMapping)
  {
    $output = '';

    foreach($request as $field => $value) {
      if (isset($fieldMapping[$field])) {
        $output .= '<p><b>'. $fieldMapping[$field] .'</b>: '. $value .'</p>';
      }
    }
    return $output;
  }
}
