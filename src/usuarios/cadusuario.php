<?php include ('../configuracao/formulario_inicio.php');?>

<article>



  </br>


  <div id="main">

    <div class="entry-content">

      <div class="inicial-titulo"><strong>Cadastro de Usuário</strong></div> 

      <form method="POST" action="cadusuarioc.php">
      
          <p align='left'class='formulario'>
            <strong> CPF (Somente números):</strong> 
            <input type='number' name='cpf' maxlength='11' size ='11' required autofocus>
          </p>

          <p align='left'class='formulario'>
            <strong> Nome:</strong></br> 
            <input type='text' name='nome' size="70" required>
          </p>

          <p align='left'class='formulario'>
            <strong> E-mail:</strong></br> 
            <input type='email' name='email' size="70" required>
          </p>


          <p align='left'class='formulario'>
            <strong> Senha:</strong></br> 
            <input type='password' id= "senha" name='senha' size="10" required>
          </p>

          <p align='left'class='formulario'>
            <strong> Confirmar Senha:</strong></br> 
            <input type='password' id= "confirmar_senha" name='confirmar_senha' size="10" required>
          </p>

          <p align='left'class='formulario'>
            <input type="submit" value="Cadastrar">
            <input type="reset" value="Limpar">
          </p>
          
          </form>

    </div>  

  </div>

</article>

<?php include ('../configuracao/formulario_fim.php');?>