<?php include ('../configuracao/formulario_inicio.php');?>

<article>

  </br>


  <div id="main">

    <div class="entry-content">   

    <form method="POST" action="../usuarios/cadusuario.php">
  
    <p align='center'>
      <input type="submit" value="NOVO USUARIO">
    </p>

    </form>

                
<?php
  $consulta_usuarios = mysqli_query($conexao, "select * from tbusuario where status='ATIVO' order by nome DESC");    
?>    

<div class="inicial-titulo"><strong>Usuários Cadastrados</strong></div></br>

<table>
     <tr>
        <td align=center><strong>Nome</strong></td>  
        <td align=center><strong>CPF</strong></td>
        <td align=center><strong>E-mail</strong></td>
        <td align=center><strong>Editar</strong></td>
        <td align=center><strong>Excluir</strong></td>
      </tr>

<?php

date_default_timezone_set('America/Bahia');

//Busca usuarios existentes
  $cont = 0;

    while ($dados_usuarios = mysqli_fetch_array($consulta_usuarios))
    {
      ?>    
      <tr>
     <?php       
        echo "<td align='left'>".$dados_usuarios['nome']."</td>";
        echo "<td align='left'>".$dados_usuarios['cpf']."</td>";
        echo "<td align='left'>".$dados_usuarios['email']."</td>";
        echo "<td align='center'>
          <a href='cadusuarioe.php?id=".$dados_usuarios['id_usuario']."''>         
          <figure>
              <img src='../images/editar.jpg' alt='Editar' width='30' height='30'/>
          </figure>
          </td>";
        echo "<td align='center'>
          <a href='cadusuariod.php?id=".$dados_usuarios['id_usuario']."''>         
          <figure>
              <img src='../images/delete.png' alt='Excluir' width='30' height='30'/>
          </figure>
          </td>";              
    }

?>
    </tr>
  </table>     
</br>  
</div>  

</div> 
</article>


<?php include ('../configuracao/formulario_fim.php');?>