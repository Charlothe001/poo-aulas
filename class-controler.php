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
    private function getVolume() {
        return $this->volume;
    }
    private function getLigado(){
        return $this->ligado;
    }
    private function getTocando() {
        return $this->tocando;
    }
    private function setVolume($volume) {
        $this->volume = $volume;
    }
    private function setLigado ($ligado) {
        $this->ligado = $ligado;
    }
    private function setTocando($tocando) {
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
        if($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
        }
    }
    public function menosVolume() {
        if($this->getLigado()) {
            $this->setVolume($this->getVolume() - 5);
        }
    }
    public function ligarMudo() {
        if($this->getLigado() && $this->getVolume()> 0) {
            $this->setVolume(0);
        }
    }
    public function desligarMudo() {
        if($this->getLigado() && $this->getVolume()== 0) {
            $this->setVolume(50);
        }
    }
    public function play() {
        if($this->getLigado() && !($this->getTocando())) {
            $this->setTocando(true);
        }
    }
    public function pause() {
        if($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
        }
    }
}
