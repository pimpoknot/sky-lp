<?php

interface MessageGeneratorInterface
{
  public function getTitle($request);

  public function getBody($request, $fieldMapping);
}