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
		$linha["valor"]. "</td></tr><br>";
	}
	echo "</table>";
} else {
    echo "0 resultados";
}

mysqli_close($conexao);

?>
