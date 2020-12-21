<?php

    //modelo
    class Funcionario {
        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;

        //getters setters (overloading)

    
        function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        function __get($atributo) {
            return $this->$atributo;
        }
    }
    
    /*
        function setNome($nome) {
            $this->nome = $nome;
        }

        function setNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }

        function getNome (){
            return $this->nome;
        }

        function getNumFilhos(){
            return $this->numFilhos;
        }


        //metodos

        function resumirCadFunc() {
            return "$this->nome possui $this->numFilhos filhos";
        }

        function modificarNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }
    }
    */
    
    
        $funcionario = new Funcionario();
        $funcionario-> __set('nome', 'Pedro');
        $funcionario-> __set('numFilhos', 3);
        $funcionario-> __set('cargo', 'Chefe de Divisão');
        $funcionario-> __set('salario', '5000');
        

        echo $funcionario->__get('nome') . ' Possui ' . $funcionario->__get('numFilhos') . ' Filho(s). 
              Está no cargo de ' . $funcionario->__get('cargo') . 
            ' E possui um salário de R$' . $funcionario->__get('salario');
        ;

        echo '<hr>';
    

        $funcionario2 = new Funcionario();
        $funcionario2-> __set('nome', 'Maria');
        $funcionario2-> __set('numFilhos', '2');
        echo $funcionario2->__get('nome') . ' Possui ' . $funcionario2->__get('numFilhos') . ' Filho(s)';
    

?>