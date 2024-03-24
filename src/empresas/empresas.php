<?php include ('../configuracao/formulario_inicio.php');?>

<article>

</br>

<div id="main">

<div class="entry-content">

<form method="POST" action="../empresas/cadempresa.php">
  
<p align='center'>
   <input type="submit" value="NOVA EMPRESA">
</p>

</form>

      
<?php
  $consulta_empresas = mysqli_query($conexao, "select * from tbempresa 
  where status = 'ATIVA' order by razaosocial");    
?>    

<div class="inicial-titulo"><strong>Empresas Cadastradas</strong></div></br>

<table>
     <tr>
        <td align=center><strong>Razão Social</strong></td>  
        <td align=center><strong>Nome Fantasia</strong></td>  
        <td align=center><strong>CNPJ</strong></td>
        <td align=center><strong>E-mail</strong></td>
        <td align=center><strong>Editar</strong></td>
        <td align=center><strong>Excluir</strong></td>
        <td align=center><strong>Visualizar</strong></td>
      </tr>

<?php

date_default_timezone_set('America/Bahia');

//Busca empresas existentes
$cont = 0;

while ($dados_empresas = mysqli_fetch_array($consulta_empresas))
{

?>    
<tr>

<?php       
   echo "<td align='left'>".$dados_empresas['razaosocial']."</td>";
   echo "<td align='left'>".$dados_empresas['nomefantasia']."</td>";
   echo "<td align='left'>".$dados_empresas['cnpj']."</td>";
   echo "<td align='left'>".$dados_empresas['email']."</td>";
   echo "<td align='center'>
      <a href='../empresas/cadempresae.php?id=".$dados_empresas['id_empresa']."''>         
      <figure>
      <img src='../images/editar.jpg' alt='Editar' width='30' height='30'/>
      </figure>
      </td>";
   echo "<td align='center'>
      <a href='../empresas/cadempresad.php?id=".$dados_empresas['id_empresa']."''>         
      <figure>
      <img src='../images/delete.png' alt='Excluir' width='30' height='30'/>
      </figure>
      </td>";
   echo "<td align='center'>
      <a target = '_blank' href='../relatorios/fichaempresa.php?id=".$dados_empresas['id_empresa']."''>         
      <figure>
      <img src='../images/view.png' alt='Visualizar' width='30' height='30'/>
      </figure>
      </td>";             
}

?>
</tr>

</table>     


</div>  

</div> 
</article>

<?php include ('../configuracao/formulario_fim.php');?>