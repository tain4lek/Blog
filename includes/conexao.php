<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'Blog';
    $port = 3307;

    $con = mysqli_connect($hostname, $username, $password, $database, $port);

    if(mysqli_connect_errno()){
        printf("Erro Conexão: $s", mysqli_connect_error());
        exit();}

?>