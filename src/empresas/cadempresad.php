
<?php

include ("../configuracao/modelo_inicio.php");

$id_empresa = $_GET['id'];

$consulta_empresas = mysqli_query($conexao,"select * from tbempresa
where id_empresa = '$id_empresa'") or die (mysqli_error());
       
if (mysqli_num_rows($consulta_empresas)==1)
{
  
  $editar_empresa = mysqli_query($conexao,"UPDATE tbempresa set 
                  status = 'INATIVA'
                  where id_empresa='$id_empresa'") 
                or die (mysqli_error());

  if ($editar_empresa)
  {
    echo"<script language='javascript' type='text/javascript'>alert('Empresa excluída com sucesso.');
    window.location.href='../empresas/empresas.php';</script>";
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