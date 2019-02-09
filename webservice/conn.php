<?php

    $server = "ns1.hostlumen.com.br";
    $user= "nfoods_root";
    $pass="root#nfoods";
    $db="nfoods_data";

    $conexao = new mysqli($server,$user,$pass,$db);
    $conexao->set_charset('utf8');
?>