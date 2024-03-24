<!DOCTYPE html>
<html lang="pt-BR">
<head>
       <link rel="stylesheet" href="../configuracao/estilo.css">
       <script src="../configuracao/scripts.js"></script>
</head>

<?php

include ('../administracao/conexao.php');

      //Busca nome do candidato logado
      $id_usuario = $_SESSION['id_usuario'];
      $consultar_usuario = mysqli_query($conexao, "select * from tbusuario where id_usuario = '$id_usuario'");
      $dados_usuario = mysqli_fetch_array($consultar_usuario);

?>


<div class="alterarsenha">
<p class='formulario' align="right">
      <strong>Seja Bem-Vindo (a) <?php echo $dados_usuario['nome']?>.</strong>
      <a href="../administracao/logout.php">(Sair)</a></br>
      <a href="../usuarios/cadusuarioaltsenha.php" target="_blank">Alterar a senha</a></br>
</p> 
</div>



</html>