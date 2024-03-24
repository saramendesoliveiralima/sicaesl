<?php

include ("../configuracao/modelo_inicio.php");

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmarSenha = $_POST['confirmar_senha'];

//Verifica se os dados referem-se a algum usuário já cadastrado
$consultar_usuario = mysqli_query($conexao,"SELECT * FROM tbusuario 
                  where cpf='$cpf' and status='ATIVO'") 
                  or die (mysqli_error());


if (mysqli_num_rows($consultar_usuario)==1)
{
  if($senha != $confirmarSenha){
    
    $_SESSION['error'] = 'Senha e confirmação de senha não conferem.';
    header("location: {$_SERVER['HTTP_REFERER']}");
    exit;
 }
  $editar_usuario = mysqli_query($conexao,"UPDATE tbusuario set
                  nome = '$nome',
                  email = '$email',
                  senha = md5('$senha')
                  where cpf='$cpf'") 
                or die (mysqli_error());

  if ($editar_usuario)
  {
    echo"<script language='javascript' type='text/javascript'>alert('Cadastro alterado com sucesso.');
    window.location.href='../usuarios/usuarios.php';</script>";
      exit;
  }
  else
  {
    echo"<script language='javascript' type='text/javascript'>alert('Operação não realizada.');</script>";
    exit;
  } 
}
include ("../configuracao/modelo_fim.php");
?>