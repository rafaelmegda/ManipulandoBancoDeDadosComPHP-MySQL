<?php

/*Colocar aqui as informações para conectar aos seus servidores, caso esteja utilizando o Wampserver
coloque o endereço de conexão, seu usuário e a senha, caso não tenha senha deixe em "branco" com "" ; */
$servidor = "localhost";
$usuario = "root";
$senha = "";

// Cria a conexão:
$conexao = mysqli_connect($servidor, $usuario, $senha);

// Verifica a conexão
if( $conexao == false ) {
   die("A conexão falhou: " . mysqli_connect_error());
}

echo "Conexão realizada com sucesso!";

mysqli_close($conexao);
?>