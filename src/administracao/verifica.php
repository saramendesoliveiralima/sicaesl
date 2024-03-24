<?php

//Inicia sessões

session_start();

//Verifica se existe os dados da sessão de login
if (!isset($_SESSION['id_usuario']) || !isset($_SESSION['cpf'])|| !isset($_SESSION['perfil']))

{
	//Usuário não logado! Redireciona para a página
	header("Location: ../login.php");
	exit;
}

?>