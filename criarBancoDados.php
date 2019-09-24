<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Criando Banco de Dados</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";

// Cria a conexão:
$conexao = mysqli_connect($servidor, $usuario, $senha);

// Verifica a conexão
if( $conexao == false ) {
   die("A conexão falhou: " . mysqli_connect_error());
}

echo "Conexão realizada com sucesso!<br>";

// Cria o banco de dados
$sql = "CREATE DATABASE bdTeste";
if (mysqli_query($conexao, $sql)) {
    echo "Banco de dados criado com sucesso!<br>";
} else {
    echo "Erro na criação do banco de dados: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>

</body>
</html>