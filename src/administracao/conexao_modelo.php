<?php
	header ('Content-type: text/html; charset=utf-8');
	$host		=	"";
	$database	=	"dbsicae";
	$user		=	""; 
	$password	=	"";
	$conexao = mysqli_connect("$host", "$user", "$password", $database) 
        or die(mysqli_error()." Erro ao conectar ao servidor.");
?>