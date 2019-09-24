<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Criando Banco de Dados</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body>

<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "bdTeste"; // acessando o banco

// Cria a conexão:
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// Busca e mostra os itens cadastrados
$sql = "SELECT id, nome, descricao, valor FROM itens";

// salva o resultado da consulta 
$resultado = mysqli_query($conexao, $sql);

// verifica se o comando retornou uma ou mais linhas
if (mysqli_num_rows($resultado) > 0) {
    // mostra os dados de cada linha retornada
	echo "<table>";
    while($linha = mysqli_fetch_assoc($resultado)) {
		echo "<tr><td> id: " . $linha["id"]. " </td><td>Nome: " . 
		$linha["nome"]. "</td><td> Descrição: " . $linha["descricao"]. " </td><td>Valor: " . 
		$linha["valor"]. "</td></tr>";
	}
	echo "</table>";
} else {
    echo "0 resultados";
}

mysqli_close($conexao);

?>

<div class="botaoVoltar">
    <form action="index.html">
        <button type="submit" class="btn btn-info">Voltar</button>
    </form>
</div>

</body>
</html>
