<?php
$nomeDigitado = $_GET['nome'];
$telefoneDigitado = $_GET['telefone'];
$saldoDigitado = $_GET['saldo'];

$servidor = "localhost";
$usuario = "root";
$senha = "toor";
$banco = "bdloja"; // acessando o banco

// Cria a conexão:
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// Verifica a conexão
if( $conexao == false ) {
   die("A conexão falhou: " . mysqli_connect_error());
}

// echo "Conexão realizada com sucesso!<br>";

$sql = "SELECT id, nome, telefone, saldo FROM alunos";

// salva o resultado da consulta 
$resultado = mysqli_query($conexao, $sql);

// verifica se o comando retornou uma ou mais linhas
if (mysqli_num_rows($resultado) > 0) {
    // mostra os dados de cada linha retornada
	echo "<table border: 10px color: green>";
    while($linha = mysqli_fetch_assoc($resultado)) {
		echo "<tr> <td> id: " . $linha["id"]. " </td><td>Nome: " . 
		$linha["nome"]. "</td><td> Telefone: " . $linha["telefone"]. " </td><td>Saldo: " . 
		$linha["saldo"]. "</td></tr><br>";
	}
	echo "</table>";
} else {
    echo "0 resultados";
}


// if (mysqli_query($conexao, $sql)) {
//     echo "Banco de dados criado com sucesso!<br>";
// } else {
//     echo "Erro na criação do banco de dados: " . mysqli_error($conexao);
// }

mysqli_close($conexao);

?>
