<?php
session_start();


$ligacao = mysqli_connect('localhost', 'root', '','krozz');
if(!$ligacao){ //CONEXÃO À BASE DE DADOS
    echo 'ERRO DE LIGAÇÃO';
}

mysqli_set_charset($ligacao,'UTF8');
