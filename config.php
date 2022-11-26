<?php
$mysql = new mysqli('localhost','root','','formulário');
$mysql->set_charset('utf8');

if ($mysql == true) {
    echo "Banco conectado";
}else{
    echo "Erro na conexão";
}
?>