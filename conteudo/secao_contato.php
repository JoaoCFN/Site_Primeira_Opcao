<!-- Modal extra grande -->
<button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl">Modal extra grande</button>

<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
     
    <form class="form-horizontal" method="get" action=".">
<fieldset>
<div class="panel panel-primary">
    <div class="panel-heading">Formulario de contato</div>
    
    <div class="panel-body">
<div class="form-group">
<!--
<div class="form-group">   
<div class="col-md-4 control-label">
    <img id="logo" src="http://blogdoporao.com.br/wp-content/uploads/2016/12/Faculdade-pitagoras.png"/>
</div>
<div class="col-md-4 control-label">
    <h1>Cadastro de Cliente</h1>
    
</div>
</div>
    -->
<div class="col-md-11 control-label">
        <p class="help-block"><h11>*</h11> Campo Obrigatório </p>
</div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label" for="Tratamento">Tratamento <h11>*</h11></label>
    <div class="col-md-1">
      <select required id="Tratamento" name="Tratamento" required="" class="form-control">
        <option value="Sr.">Sr.</option>
        <option value="Sra.">Sra.</option>
      </select>
    </div>
<br>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="Nome">Nome <h11>*</h11></label>  
  <div class="col-md-5">
  <input id="Nome" name="Nome" placeholder="" class="form-control input-md" required="" type="text">
  </div>
</div>



<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-2 control-label" for="prependedtext">Número para contato<h11>*</h11></label>
  <div class="col-md-2">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
      <input id="prependedtext" name="prependedtext" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
      OnKeyPress="formatar('## #####-####', this)">
    </div>
  </div>
  
<br>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-2 control-label" for="prependedtext">Email <h11>*</h11></label>
  <div class="col-md-5">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input id="prependedtext" name="prependedtext" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
    </div>
  </div>
</div>


<!-- Search input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="CEP">CEP <h11>*</h11></label>
  <div class="col-md-2">
    <input id="cep" name="cep" onblur="pesquisacep(this.value);" placeholder="Apenas números" class="form-control input-md" required="" value="" type="search" maxlength="8" pattern="[0-9]+$">
  </div>

</div>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-2 control-label" for="prependedtext">Endereço</label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon"> Rua</span>
      <input id="rua" name="rua" class="form-control" placeholder="" required="" readonly="readonly" type="text">
    </div>
    
  </div>
    <div class="col-md-2">
    <div class="input-group">
      <span class="input-group-addon"> Nº <h11>*</h11></span>
      <input id="numero" name="numero" class="form-control" placeholder="" required=""  type="text">
    </div>
    
  </div>
  <br>
  <div class="col-md-3">
    <div class="input-group">
      <span class="input-group-addon"> Bairro</span>
      <input id="bairro" name="bairro" class="form-control" placeholder="" required="" readonly="readonly" type="text">
    </div>
    
  </div>
</div>
<br>
<div class="form-group">
  <label class="col-md-2 control-label" for="prependedtext"></label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon"> Cidade</span>
      <input id="cidade" name="cidade" class="form-control" placeholder="" required=""  readonly="readonly" type="text">
    </div>
  </div>
  <br>
   <div class="col-md-2">
    <div class="input-group">
      <span class="input-group-addon"> Estado</span>
      <input id="estado" name="estado" class="form-control" placeholder="" required=""  readonly="readonly" type="text">
    </div>

  </div>
<br>
  <div class="col-md-3">
    <div class="input-group">
      <span class="input-group-addon">Ponto de referência</span>
      <input id="textinput" name="textinput" class="form-control" placeholder="" type="text">
    </div>

    
  </div>

</div>
  

 
 <!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="textinput">Como conheceu o restaurante</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" placeholder="" class="form-control input-md" type="text">
    

  </div>
  
</div>

<div class="form-group">
    <label class="col-md-2 control-label" for="textinput">Assunto</label>  
    <div class="col-md-9">
    <input id="textinput" name="textinput" placeholder="" class="form-control input-md" type="text">
      
  
    </div>
    
  </div>


</fieldset>
</form>

    </div>
  </div>
</div>
<br>