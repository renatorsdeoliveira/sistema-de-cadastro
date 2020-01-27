<?php
require_once('Banco.php');

    class cliente_modulo{

        function inserir() {

            if (isset($_POST['nomeCliente'])){
                $nome = filter_input(INPUT_POST,'nomeCliente', FILTER_SANITIZE_SPECIAL_CHARS);
            }
            if (isset($_POST['emailCliente'])){
                $email = filter_input(INPUT_POST,'emailCliente', FILTER_VALIDATE_EMAIL);
            }
            if (isset($_POST['telefoneCliente'])){
                $telefone = filter_input(INPUT_POST, 'telefoneCliente', FILTER_SANITIZE_STRING);
            }
           
        
            $bd = new Banco();
            $link = $bd->conexao();
            $sql = "INSERT INTO clientes(nome, email, data_atualizacao ) VALUES('$nome',  '$email', NOW())";
            if(mysqli_query($link, $sql)){
                header('Location: ../views/listagem.php');
                die();
            }else{
                $erro = "Erro ao registrar o usuario";
                echo $erro;
            }
    
        }

        function listar(){
            $bd = new Banco();
            $link = $bd->conexao();
            $sql = "SELECT * FROM clientes ORDER BY id DESC";

            $listagem = mysqli_query($link, $sql);

            return $listagem;
        }
    }

    // $C = NEW cliente_modulo;
    // $C->inserir();
    
 
?>
