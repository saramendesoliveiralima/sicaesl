<?php

include ("../configuracao/modelo_inicio.php");

$id_usuario = $_GET['id'];

$consulta_usuarios = mysqli_query($conexao,"select * from tbusuario
where id_usuario = '$id_usuario'") or die (mysqli_error());
       
if (mysqli_num_rows($consulta_usuarios)==1)
{
  
  $editar_usuario = mysqli_query($conexao,"UPDATE tbusuario set 
                  status = 'INATIVO'
                  where id_usuario='$id_usuario'") 
                or die (mysqli_error());

  if ($editar_usuario)
  {
    echo"<script language='javascript' type='text/javascript'>alert('Usuário excluído com sucesso.');
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