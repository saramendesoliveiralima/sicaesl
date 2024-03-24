<?php include ('../configuracao/formulario_inicio.php');?>

<article>
  
<div id="printable">

<?php    
  
//Busca informações da inscrição
$id = $_GET['id'];
  

$consulta_empresa = mysqli_query($conexao,"SELECT * FROM tbempresa 
where id_empresa = '$id' and status='ATIVA'") 
or die ('Erro na conexao - '.mysqli_error());

  while ($row_empresa = mysqli_fetch_array($consulta_empresa))
  {
    ?>

    <table border="0">
    <tr>
      <td colspan="4">
          <img src="../images/sicae.png" width="10%"></br>
          <h1 align='center'><strong class='upper'>SICAE</strong></h2>
          <h2 align='center'><strong class='upper'>Ficha de Cadastro de Empresa</strong></h3>
      </td>
    </tr>

    <tr>
        <td colspan="4" class="titulotabela" align="center"><strong>Dados Empresariais</strong></td>    
    </tr> 
 
    </br>

    <tr>
      <td colspan="1"><strong>CNPJ:</strong></br><?php echo $row_empresa['cnpj'];?></td>
      <td colspan="1"><strong>Razão Social:</strong></br><?php echo $row_empresa['razaosocial'];?></td>
      <td colspan="1"><strong>Nome Fantasia:</strong></br><?php echo $row_empresa['nomefantasia'];?></td>
      <td colspan="1"><strong>Ramo de Atividade:</strong></br><?php echo $row_empresa['ramodeatividade']?></td>
    </tr>
    
    </br>
    
    <tr>
        <td colspan="4" class="titulotabela" align="center"><strong>Endereço</strong></br></td>    
    </tr>

    </br>

    <tr>
      <td colspan="1"><strong>Logradouro:</strong></br><?php echo $row_empresa['logradouro'];?></td>
      <td colspan="1"><strong>Número:</strong></br><?php echo $row_empresa['numero'];?></td>
      <td colspan="1"><strong>Complemento:</strong></br><?php echo $row_empresa['complemento'];?></td>
      <td colspan="1"><strong>Bairro:</strong></br><?php echo $row_empresa['bairro']?></td>
    </tr>

    </br>

    <tr>
      <td colspan="1"><strong>Cidade:</strong></br><?php echo $row_empresa['cidade'];?></td>
      <td colspan="1"><strong>UF:</strong></br><?php echo $row_empresa['uf'];?></td>
      <td colspan="1"><strong>País:</strong></br><?php echo $row_empresa['pais'];?></td>
      <td colspan="1"><strong>CEP:</strong></br><?php echo $row_empresa['cep']?></td>
    </tr>

    </br>

    <tr>
        <td colspan="4" class="titulotabela" align="center"><strong>Contato</strong></br></td>    
    </tr>

    </br>

    <tr>
      <td colspan="1"><strong>Telefone 1:</strong></br><?php echo $row_empresa['tel1'];?></td>
      <td colspan="1"><strong>Telefone 2:</strong></br><?php echo $row_empresa['tel2'];?></td>
      <td colspan="1"><strong>E-mail:</strong></br><?php echo $row_empresa['email'];?></td>
      <td colspan="1"><strong>Site:</strong></br><?php echo $row_empresa['site']?></td>
    </tr>


   
    </table>

  </br>

<?php
}
mysqli_close($conexao);
?>
</div>  

 
<p align='middle'>
        <button onclick="javascript:self.print()" class='upper'>Imprimir</button>
</p>

</article>
        

</html>