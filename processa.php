<?php

    $nome = addcslashes($_POST['nome']);
    $sobrenome = addcslashes($_POST['email']);
    $login = addcslashes($_POST['login']);
    $email = addcslashes($_POST['email']);

    echo "Nome: ".$nome."\r\n"."Sobrenome: ".$sobrenome;

?>