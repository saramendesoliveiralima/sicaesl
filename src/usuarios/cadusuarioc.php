<?php

include ("../configuracao/modelo_inicio.php");

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$confirmarSenha = $_POST['confirmar_senha'];
$email= $_POST['email'];


//Verifica se os dados referem-se a algum usuário já cadastrado
$consultar_usuario = mysqli_query($conexao,"SELECT * FROM tbusuario 
                  where cpf='$cpf' and status = 'ATIVO'") 
                  or die (mysqli_error());

    //Verifica se senha e confirma senha são diferentes
    if($senha != $confirmarSenha){
       
       session_start();
       $_SESSION['error'] = 'Senha e confirmação de senha não conferem.';
       header("location: {$_SERVER['HTTP_REFERER']}");
       exit;
    }

if (mysqli_num_rows($consultar_usuario)==0)
{

$inserir_usuario = mysqli_prepare($conexao,"INSERT INTO tbusuario 
(cpf, nome, senha, email, perfil, status) VALUES 
(?, ?, ?, ?,'ADMIN', 'ATIVO')");

mysqli_stmt_bind_param($inserir_usuario,"ssss", $cpf, $nome, md5($senha), $email);

    if (mysqli_stmt_execute($inserir_usuario))
    {
        echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso.');
        window.location.href='usuarios.php';</script>";
            exit;
    }
    else
    {
        echo"<script language='javascript' type='text/javascript'>alert('Operação não realizada. ');
        window.location.href='usuarios.php';</script>";
            exit;
    }

}
else if (mysqli_num_rows($consultar_usuario)==1)
{

    echo"<script language='javascript' type='text/javascript'>alert('Usuário já cadastrado.');
    window.location.href='usuarios.php';</script>";
      exit;

}
include ("../configuracao/modelo_fim.php");
?>
