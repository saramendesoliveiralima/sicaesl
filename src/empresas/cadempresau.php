<?php

include ("../configuracao/modelo_inicio.php");

$cnpj = $_POST['cnpj'];
$razaosocial = $_POST['razaosocial'];
$nomefantasia = $_POST['nomefantasia'];
$ramodeatividade = $_POST['ramodeatividade'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$pais = $_POST['pais'];
$cep = $_POST['cep'];
$tel1 = $_POST['tel1'];
$tel2 = $_POST['tel2'];
$email = $_POST['email'];
$site = $_POST['site'];

//Verifica se os dados referem-se a alguma empresa já cadastrada
$consultar_empresa = mysqli_query($conexao,"SELECT * FROM tbempresa 
                  where cnpj='$cnpj' and status = 'ATIVA'") 
                  or die (mysqli_error());


if (mysqli_num_rows($consultar_empresa)==1)
{
  $editar_empresa = mysqli_query($conexao,"UPDATE tbempresa set
                  razaosocial = '$razaosocial',
                  nomefantasia = '$nomefantasia',
                  ramodeatividade = '$ramodeatividade',
                  logradouro = '$logradouro',
                  numero = '$numero',
                  complemento = '$complemento',
                  bairro = '$bairro',
                  cidade = '$cidade',
                  uf = '$uf',
                  pais = '$pais',
                  cep = '$cep',
                  tel1 = '$tel1',
                  tel2 = '$tel2',
                  email = '$email',
                  site = '$site'
                  where cnpj='$cnpj'") 
                or die (mysqli_error());

  if ($editar_empresa)
  {
    echo"<script language='javascript' type='text/javascript'>alert('Cadastro alterado com sucesso.');
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