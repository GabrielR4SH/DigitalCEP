<?php

use PHPUnit\Framework\TestCase;
use Dio\DigitalCep\Search;

class SearchTest extends TestCase
{
    public function testGetAddresFromZipCodeDefaultUsage()
    {
        $search = new Search(); 
        $result = $search->getAddresFromZipCode('05822010'); 

        $esperado = [
            "cep" => "05822-010",
            "logradouro" => "Rua Antônio Ramos Rosa",
            "complemento" => "",
            "unidade" => "",
            "bairro" => "Parque Santo Antônio",
            "localidade" => "São Paulo",
            "uf" => "SP",
            "estado" => "São Paulo",
            "regiao" => "Sudeste",
            "ibge" => "3550308",
            "gia" => "1004",
            "ddd" => "11",
            "siafi" => "7107"
        ];

        $this->assertEquals($esperado, $result); 
    }

    
}
