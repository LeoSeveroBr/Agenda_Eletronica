<?php

$conexao = new PDO("mysql:host=localhost; dbname=new_agenda; charset=UTF8", "root", "");
$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

