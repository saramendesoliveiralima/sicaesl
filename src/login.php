<!DOCTYPE html>
<html lang="pt-BR">

<?php include ('configuracao/head.php');?>

<body>

  <?php include ('configuracao/cabecalho.php');?>
  
  <article>

  </br>

    <div class="inicial-titulo"><strong>Identificação</strong></div> 
    <?php
      session_start();
      include_once "administracao/mensagem.php"; 
     ?>
  </br>

  <form method="POST" action="administracao/autenticacao.php">

          <p align='center' class="formulario">
            <strong> CPF (Somente números):</strong> 
            <input type='number' name='cpf' maxlength='11' size ='11' required autofocus >
          </p>
          
          
          <p align='center' class="formulario">
            <strong> Senha:</strong> 
            <input type='password' name='senha' required>
          </p>

          <p align='center' class="formulario">
            <input type="submit" value="Entrar">
            <input type="reset" value="Limpar">
          </p>
  </form>
</br>
   

</article>

<?php include ('configuracao/rodape.php');?>

</body>

</html>