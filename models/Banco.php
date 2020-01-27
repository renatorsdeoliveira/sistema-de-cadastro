<?php

 

    class Banco{

     
        private $host = "localhost";
        private $database = "bc_cadastro";
        private $user = "root";
        private $senha = "";


        public function __construct(){
         
        }

        public function conexao(){

            $conexao = mysqli_connect($this->host, $this->user, $this->senha, $this->database);
            mysqli_set_charset($conexao, "UTF8");

            if(mysqli_connect_errno()){
                echo "Erro ao tentar conectar no banco >>> ". mysqli_connect_error();
            }

            return $conexao;
        }

        
       
    }

?>
