<?php

abstract class MessageGeneratorFactory
{
  /**
   * Cria uma instância de uma classe de geração de mensagens de e-mail.
   * @param string $messageType - tipo de mensagem. Pode ser usada para decidir sobre a
   *    classe que deve ser instanciada
   * @return MessageGeneratorInterface - objeto que implementa a interface
   */
  public static function createMessageGenerator($messageType)
  {
    return new SimpleMessageGenerator();
  }
}