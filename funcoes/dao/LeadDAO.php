<?php

class LeadDAO
{
    private $dbConfig;

    function __construct($dbConfig)
    {
        $this->dbConfig = $dbConfig;
    }

    function saveLead($lead)
    {
        $con = ConnectionFactory::getInstance($this->dbConfig);
        $chaves = array_keys($lead);
        $nomesParams = array_map(function($chave) { return ":$chave"; }, $chaves);
        $listaCampos = implode(", ", $chaves);
        $listaParams = implode(", ", $nomesParams);

        $sql = "INSERT INTO leads ($listaCampos) VALUES ($listaParams)";

        $stmt = $con->prepare($sql);
        foreach($lead as $chave => $valor) {
            $stmt->bindValue(":$chave", $valor); 
        }
        $stmt->execute();
        ConnectionFactory::closeConnection();

    }
}

