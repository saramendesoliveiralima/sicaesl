<?php include ('../configuracao/formulario_inicio.php');?>

<?php

$id_empresa = $_GET['id'];

$consulta_empresas = mysqli_query($conexao,"select * from tbempresa
where id_empresa = '$id_empresa'");
$dados_empresa = mysqli_fetch_array($consulta_empresas);


?>


<article>

  </br>
    

    <div class="inicial-titulo"><strong>Alterar Cadastro de Empresa</strong></div> 
      
    </br>

    <form method="POST" action="cadempresau.php">

    <fieldset>
      <legend class='formulario'><strong> Dados Empresariais </strong></legend>
      <span class='formulario' style="color:red;">*</span> Campo obrigatório.  
      
        <p align='left'class='formulario'>
        <strong> CNPJ (Somente números) <span style="color:red;">*</span></strong> 
        <input type='number' name='cnpj' readonly value="<?php echo $dados_empresa['cnpj']?>">
        </p>

        <p align='left'class='formulario'>
        <strong> Razão Social <span style="color:red;">*</span></strong></br> 
        <input type='text' name='razaosocial' value="<?php echo $dados_empresa['razaosocial']?>" required>
        </p>

        <p align='left'class='formulario'>
        <strong> Nome Fantasia </strong></br> 
        <input type='text' name='nomefantasia' value="<?php echo $dados_empresa['nomefantasia']?>">
        </p>

        <p align='left'class='formulario'>
        <strong> Ramo de Atividade </strong></br> 
        <select name='ramodeatividade'>
        <option value="<?php echo $dados_empresa['ramodeatividade']?>" selected="selected" ><?php echo $dados_empresa['ramodeatividade']?></option>
        <?php foreach($ramosdeatividade as $ramodeatividade){ ?>
        <option value ="<?php echo $ramodeatividade?>"><?php echo $ramodeatividade?></option>
        <?php } ?>
      </select>
        </p>

    </fieldset>

</br>

    <fieldset>
    <legend class='formulario'><strong> Endereço </strong></legend>
    
    <p align='left'class='formulario'>
    <strong> Logradouro (Av., Rod., Rua, Travessa) </strong></br> 
    <input type='text' name='logradouro' value="<?php echo $dados_empresa['logradouro']?>">
    </p>

    <p align='left'class='formulario'>
    <strong> Número </strong></br> 
    <input type='text' name='numero' value="<?php echo $dados_empresa['numero']?>">
    </p>

    <p align='left'class='formulario'>
    <strong> Complemento </strong></br> 
    <input type='text' name='complemento' value="<?php echo $dados_empresa['complemento']?>">
    </p>

    <p align='left'class='formulario'>
    <strong> Bairro </strong></br> 
    <input type='text' name='bairro' value="<?php echo $dados_empresa['bairro']?>">
    </p>

    <p align='left'class='formulario'>
    <strong> Cidade </strong></br> 
    <input type='text' name='cidade' value="<?php echo $dados_empresa['cidade']?>">
    </p>

    <p align='left'class='formulario'>
    <strong> UF </strong></br> 
    <select name='uf'>
        <option value="<?php echo $dados_empresa['uf']?>" selected="selected" ><?php echo $dados_empresa['uf']?></option>
        <?php foreach($ufs as $uf){ ?>
        <option value ="<?php echo $uf?>"><?php echo $uf?></option>
        <?php } ?>
      </select>
    </p>

    <p align='left'class='formulario'>
    <strong> País </strong></br> 
    <input type='text' name='pais' value="<?php echo $dados_empresa['pais']?>">
    </p>

    <p align='left'class='formulario'>
    <strong> CEP (somente números) </strong></br> 
    <input type='text' name='cep' maxlength="8" value="<?php echo $dados_empresa['cep']?>">
    </p>

    </fieldset>

</br>

    <fieldset>

    <legend class='formulario'><strong> Contato </strong></legend>

    <p align='left'class='formulario'>
    <strong> Telefone 1 </strong></br> 
    <input type='tel' name='tel1' value="<?php echo $dados_empresa['tel1']?>">
    </p>

    <p align='left'class='formulario'>
    <strong> Telefone 2 </strong></br> 
    <input type='tel' name='tel2' value="<?php echo $dados_empresa['tel2']?>">
    </p>
    
    <p align='left'class='formulario'>
    <strong> E-mail </strong></br> 
    <input type='email' name='email' value="<?php echo $dados_empresa['email']?>">
    </p>

    <p align='left'class='formulario'>
    <strong> Site </strong></br> 
    <input type='site' name='site' value="<?php echo $dados_empresa['site']?>">
    </p>

    </fieldset>



    <p align='left'class='formulario'>
    <input type="submit" value="Cadastrar">
    <input type="reset" value="Limpar">
    </p>
          
</form>

</div>  

</div>

</article>

 <?php include ('../configuracao/formulario_fim.php');?>