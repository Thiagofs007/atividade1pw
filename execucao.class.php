<?php

require_once("automoveis.class.php");

class teste{
    private $automoveis;

    public function __construct() {
        $automoveis = new automoveis();
        
        $automoveis->setTipo("Tipo: Porsche" ."<br>");
        echo $automoveis->getTipo();

        $automoveis->setCor("Cor: Cinza"."<br>");
        echo $automoveis->getCor();

        $automoveis->setPlaca("Placa: MHZ-4345" ."<br>");
        echo $automoveis->getPlaca();

        $automoveis->setNportas("Número de portas: 2" ."<br>"."<br>");
        echo $automoveis->getNportas();

        $automoveis->setTipo("Tipo: Ferrari" ."<br>");
        echo $automoveis->getTipo();

        $automoveis->setCor("Cor: Vermelho" ."<br>");
        echo $automoveis->getCor();

        $automoveis->setPlaca("Placa: JKL-0001" ."<br>");
        echo $automoveis->getPlaca();

        $automoveis->setNportas("Número de portas: 4" ."<br>");
        echo $automoveis->getNportas();
    }
}new teste();

?>