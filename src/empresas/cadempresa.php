<?php include ('../configuracao/formulario_inicio.php');?>

<article>

</br>


<div id="main">

<div class="entry-content">

<div class="inicial-titulo"><strong>Cadastro de Empresa</strong></div> 
    
</br>

    <form method="POST" action="cadempresac.php">

    <fieldset>
      <legend class='formulario'><strong> Dados Empresariais </strong></legend>
      <span class='formulario' style="color:red;">*</span> Campo obrigatório.  
      
        <p align='left'class='formulario'>
        <strong> CNPJ (Somente números) <span style="color:red;">*</span></strong> 
        <input type='number' name='cnpj' maxlength='14' size ='14' required autofocus>
        </p>

        <p align='left'class='formulario'>
        <strong> Razão Social <span style="color:red;">*</span></strong></br> 
        <input type='text' name='razaosocial' size="70" required>
        </p>

        <p align='left'class='formulario'>
        <strong> Nome Fantasia </strong></br> 
        <input type='text' name='nomefantasia' size="70">
        </p>

        <p align='left'class='formulario'>
        <strong> Ramo de Atividade </strong></br> 
        <select name='ramodeatividade'>
        <option value="" selected="selected" >...</option>
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
    <input type='text' name='logradouro' size="70">
    </p>

    <p align='left'class='formulario'>
    <strong> Número </strong></br> 
    <input type='text' name='numero' size="5">
    </p>

    <p align='left'class='formulario'>
    <strong> Complemento </strong></br> 
    <input type='text' name='complemento' size="70">
    </p>

    <p align='left'class='formulario'>
    <strong> Bairro </strong></br> 
    <input type='text' name='bairro' size="70">
    </p>

    <p align='left'class='formulario'>
    <strong> Cidade </strong></br> 
    <input type='text' name='cidade' size="70">
    </p>

    <p align='left'class='formulario'>
    <strong> UF </strong></br> 
    <select name='uf'>
        <option value="" selected="selected" >...</option>
        <?php foreach($ufs as $uf){ ?>
        <option value ="<?php echo $uf?>"><?php echo $uf?></option>
        <?php } ?>
      </select>
    </p>

    <p align='left'class='formulario'>
    <strong> País </strong></br> 
    <input type='text' name='pais' size="70">
    </p>

    <p align='left'class='formulario'>
    <strong> CEP (somente números) </strong></br> 
    <input type='text' name='cep' maxlength="8" size="8">
    </p>

    </fieldset>

</br>

    <fieldset>

    <legend class='formulario'><strong> Contato </strong></legend>

    <p align='left'class='formulario'>
    <strong> Telefone 1 </strong></br> 
    <input type='tel' name='tel1' size="10">
    </p>

    <p align='left'class='formulario'>
    <strong> Telefone 2 </strong></br> 
    <input type='tel' name='tel2' size="10">
    </p>
    
    <p align='left'class='formulario'>
    <strong> E-mail </strong></br> 
    <input type='email' name='email' size="50">
    </p>

    <p align='left'class='formulario'>
    <strong> Site </strong></br> 
    <input type='site' name='site' size="70">
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