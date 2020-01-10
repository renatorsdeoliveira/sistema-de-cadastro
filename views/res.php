<?php

   $nome =  $_POST['nomeCliente'];
   $email =  $_POST['emailCliente'];


   echo $nome."<< nome<br>";
   echo $email."<< email<br>";

   $telefones = $_POST['telefoneCliente']; //array
   foreach($telefones as $telefone){
    echo $telefone."<< telefone<br>";
   }


?>