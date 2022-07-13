<?php
    class ContaBanco {
        //atributos da conta
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        //Métodos
        public function abrirConta($t) {
            $this->setTipo($t);
            $this->setStatus(true);
            if($t == "CC") {
                $this->setSaldo(50);
            }elseif($t == "CP"){
                $this->setSaldo(150);
            }
        }

        public function fecharConta() {
            if($this->getSaldo() > 0) {
                echo"<p>A Conta contém dinheiro, não posso fechá-la.</P>";
            }elseif ($this->getSaldo() < 0) {
                echo"<p>A conta possui débito, não posso fechá-la.</p>";
            }else {
                $this->setStatus(false);
            }
        }

        public function depositar($v) {
            if($this->getStatus()) {
                $this->getSaldo($this->getSaldo() + $v); 
            }else {
                echo"<p>Conta fechada, não consigo depositar.</p>";
            }
        }

        public function sacar($v) {
            if($this->getStatus()) {
                if($this->getSaldo() >= $v) {
                    $this->setSaldo($this->getSaldo() - $v);
                }else {
                    echo"<p>Saldo insuficiente.</p>";
                }
            }else {
                echo"<>Não posso sacar de conta fechada.</p>";
            }
        }

        public function pagarMensalidade() {
            if($this->getTipo() == "CC") {
                $v = 12;
            }elseif($this->getTipo == "CP") {
                $v = 20;
            }
            if($this->getStatus()) {
                $this->setSaldo($this->getSaldo() - $v);
            }else {
                echo"<p>Problemas com a conta, não posso cobrar.</p>";
            }
        }

        //Métodos Especiais
        public function ContaBanco() {
            $this->setSaldo(0);
            $this->setStatus(false);
        } //Método Construtor (~)

        public function getNumConta(){
            return $this->numConta;
        }

        public function setNumConta($numConta) {
            $this->numConta = $numConta;
        }

        public function getTipo() {
            return $this->tipo;
        }

        public function setTipo($tipo) {
            $this->tipo = $tipo;
        }

        public function getDono() {
            return $this->dono;
        }

        public function setDono($dono) {
            $this->dono = $dono;
        }

        public function getSaldo() {
            return $this->saldo;
        }

        public function setSaldo($saldo) {
            $this->saldo = $saldo;
        }

        public function getStatus() {
            return $this->status;
        }

        public function setStatus($status) {
            $this->status = $status;
        }
    }