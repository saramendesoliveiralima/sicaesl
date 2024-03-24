<?php include ('../configuracao/formulario_inicio.php');?>

<?php

$id_usuario = $_GET['id'];

$consulta_usuarios = mysqli_query($conexao,"select * from tbusuario
where id_usuario = '$id_usuario'");
$dados_usuario = mysqli_fetch_array($consulta_usuarios);


?>


<article>

  </br>
    

    <div class="inicial-titulo"><strong>Alterar Cadastro de Usuário</strong></div> 
      
    <form method="POST" action="cadusuariou.php"  onsubmit="return verificarSenhas()">

        <p align='left'>
        <strong>CPF:</strong></br> 
        <input type='number' name='cpf' readonly value="<?php echo $dados_usuario['cpf']?>">
        </p>

        <p align='left'class='formulario'>
        <strong>Nome:</strong></br> 
        <input type='text' name='nome' value="<?php echo $dados_usuario['nome']?>" required>
        </p> 

        <p align='left'class='formulario'>
        <strong>Email:</strong></br> 
        <input type='email' name='email' value="<?php echo $dados_usuario['email']?>" required>
        </p> 
       
        <p align='left'>
        <strong> Senha:</strong></br> 
        <input type='password' id= "senha" name='senha' size="10" required>
        </p>
        
        <p align='left'class='formulario'>
        <strong> Confirmar Senha:</strong></br> 
        <input type='password' id= "confirmar_senha" name='confirmar_senha' size="10" required onblur="validatePassword()">
        </p>

        <p align='left'>
        <input type="submit" value="Gravar">
        <input type="reset" value="Limpar">
        </p>
          
    </form>

  </article>

 <?php include ('../configuracao/formulario_fim.php');?>