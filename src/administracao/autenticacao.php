<?php
    
    //Conexão com o banco de dados
    require "conexao.php";

    //Inicia sessões
    session_start();

    //Recupera o login
    $cpf = isset($_POST['cpf']) ? addslashes(trim($_POST['cpf'])): FALSE;


    //Recupera a senha, a criptografando em MD5
    $senha = isset($_POST['senha']) ? md5(trim($_POST['senha'])): FALSE;


    //Recupera o perfil
    $consultar_perfil = mysqli_query($conexao,"select * from tbusuario where cpf = '$cpf'");
      $row_perfil = mysqli_num_rows($consultar_perfil);
      if ($row_perfil>0)
      {
        $listar_perfil = mysqli_fetch_array($consultar_perfil);
        $perfil_logado = $listar_perfil['perfil'];
      } 
    $perfil = isset($perfil_logado) ? addslashes(trim($perfil_logado)): FALSE;


    if (!$cpf)

    {
        echo"<script language='javascript' type='text/javascript'>alert('Você deve digitar seu CPF!');window.location.href='../login.php';</script>";
        exit;
    }

    if (!$senha)

    {
        echo"<script language='javascript' type='text/javascript'>alert('Você deve digitar sua senha!');window.location.href='../login.php';</script>";
        exit;
    }


    /**
    * Executa a consulta no banco de dados
    * Caso o número de linhas retornadas seja 1 o login é válido,
    * caso 0, inválido.
    */

    $sql = "SELECT * from tbusuario 
                where cpf = '$cpf' 
                and perfil = '$perfil' 
                and status = 'ATIVO'";

    //echo "$sql</br>";

    $result_id = @mysqli_query($conexao,$sql) 
    or die ("Erro no banco de dados!".mysqli_error());

    $total = @mysqli_num_rows($result_id);

    
    //Caso o usuário tenha digitado um usuário válido o número de linhas será 1.

    if ($total)

    {
        //Obtém os dados do usuário, para poder verificar a senha e passar os demais dados para a sessão

        $dados = @mysqli_fetch_array($result_id);


        //Agora verifica a senha
        if (!strcmp($senha, $dados['senha']))

        {

           //Agora passa os dados para a sessão e redireciona o usuário 
           $_SESSION ['id_usuario'] = $dados['id_usuario'];
           $_SESSION ['cpf'] = $dados['cpf'];
           $_SESSION ['perfil'] = $dados['perfil'];


           if ($perfil == 'ADMIN') 
           {
                       header("Location: ../sistema/index.php");
                       exit;
           } 

        }

        //Senha inválida
    else
        {
            echo"<script language='javascript' type='text/javascript'>alert('Senha Incorreta!');window.location.href='../login.php';</script>";
            exit;
        }
    }

//Login inválido
    else
    {
        echo"<script language='javascript' type='text/javascript'>alert('CPF Inválido!');window.location.href='../login.php';</script>";
        exit;
    }
    
    //Fecha conexão com banco de dados
    mysqli_close($conexao);
?>