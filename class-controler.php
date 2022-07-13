<?php
require_once 'controler.php';
class remoteControl implements controler{
    //atributos//
    private $volume;
    private $ligado;
    private $tocando;
    //metodos//
    public function remoteControl() { // construtor//
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }
    function getVolume() {
        return $this->volume;
    }
    function getLigado(){
        return $this->ligado;
    }
    function getTocando() {
        return $this->tocando;
    }
    function setVolume($volume) {
        $this->volume = $volume;
    }
    function setLigado ($ligado) {
        $this->ligado = $ligado;
    }
    function setTocando($tocando) {
        $this->tocando = $tocando; 
    }
    public function ligar(){
        $this->setLigado(true);
    }
    public function desligar() {
        $this->setLigado(false);
    }
    public function abrirMenu() {
        echo "<br>Está Ligado?: " . ($this->getLigado()?"SIM":"Não");
        echo "<br>Está Tocando?: " . ($this->getTocando()?"SIM":"Não");
        echo "<br>Volume: " . $this->getVolume();
            for($i=0; $i <= $this->getVolume(); $i+=10) {
                echo "|";
            }
            echo "<br>";
    }
    public function fecharMenu() {
        echo "<br>Fechando Menu...";
    }
    public function maisVolume() {
        
    }
    public function menosVolume() {

    }
    public function ligarMudo() {

    }
    public function desligarMudo() {

    }
    public function play() {

    }
    public function pause() {

    }
}
