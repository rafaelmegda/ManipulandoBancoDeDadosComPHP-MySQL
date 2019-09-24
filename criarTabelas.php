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
$banco = "bdTeste"; // inserir aqui qual o banco deseja criar as tabelas

// Cria a conexão:
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// Verifica a conexão
if( $conexao == false ) {
   die("A conexão falhou: " . mysqli_connect_error());
}

echo "Conexão realizada com sucesso!<br>";

// Cria a tabela
$sql = "CREATE TABLE alunos (
   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   nome VARCHAR(40) NOT NULL,
   nota VARCHAR(5)
)";

if (mysqli_query($conexao, $sql)) {
    echo "Tabela criada com sucesso!<br>";
} else {
    echo "Erro na criação da tabela: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>

</body>
</html>