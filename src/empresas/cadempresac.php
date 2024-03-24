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
                  where cnpj='$cnpj' and status='ATIVA'") 
                  or die (mysqli_error());

if (mysqli_num_rows($consultar_empresa)==0)
{

$inserir_empresa = mysqli_prepare($conexao,"INSERT INTO tbempresa 
(cnpj, razaosocial, nomefantasia, ramodeatividade, logradouro, 
numero, complemento, bairro, cidade, uf, pais, cep, tel1, tel2,
email, site, status) VALUES 
(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,'ATIVA')");

mysqli_stmt_bind_param($inserir_empresa,"ssssssssssssssss", 
$cnpj, $razaosocial, $nomefantasia, $ramodeatividade, $logradouro, 
$numero, $complemento, $bairro, $cidade, $uf, $pais, $cep, 
$tel1, $tel2, $email, $site);

    if (mysqli_stmt_execute($inserir_empresa))
    {
        echo"<script language='javascript' type='text/javascript'>alert('Empresa cadastrada com sucesso.');
        window.location.href='empresas.php';</script>";
            exit;
    }
    else
    {
        echo"<script language='javascript' type='text/javascript'>alert('Operação não realizada. ');
        window.location.href='empresas.php';</script>";
            exit;
    }

}
else if (mysqli_num_rows($consultar_usuario)==1)
{

    echo"<script language='javascript' type='text/javascript'>alert('Empresa já cadastrada.');
    window.location.href='usuarios.php';</script>";
      exit;

}




include ("../configuracao/modelo_fim.php");
?>