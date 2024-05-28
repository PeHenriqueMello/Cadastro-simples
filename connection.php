<?php

$hostname= 'localhost';
$username= 'root';
$password= '';
$dbname= 'cadastro_simples';

$con= new mysqli($hostname, $username, $password, $dbname);



if($con -> connect_error){
  die ("conexão com falha!" . $con-> connect_error);
}else{
    echo "conexão bem sucedida!";
}