<?php

    class Pessoa {
        
        public $nome = null;

        function __construct($nome) {
            echo 'Objeto iniciado';
            $this->nome = $nome;
        }

        function __destruct() {
            echo 'Objeto removido';
        }

        function __get($atributo) {
            return $this->$atributo;
        }

        function correr() {
            return $this->__get('nome') . ' Está correndo';
        }
    }

    $pessoa = new Pessoa('Michel');
    echo '<br /> Nome: ' . $pessoa->__get('nome');
    echo '<br /> ' . $pessoa->correr();

    echo '<br /> ';

    //unset($pessoa); //proposital


?>