<?php

$usuario = "root";
$senha="";

try {
    $conexao = new PDO('mysql:host=localhost;dbname=ladingpage', $usuario, $senha);

} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

$sql= 'select * from assunto';

$stmt = $conexao->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

