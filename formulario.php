<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    

    <title>Formulario</title>
    <style type="text/css">
    	#formu {
    		padding: 10px 10px 10px;
    		margin: 15px 15px 15px;
    		border:1px solid #d3d3d3;
    		border-radius: 10px 10px 10px;
    		box-shadow: 0px 0px 10px #999;

    	}
    </style>
  </head>
  <body>
    
    <form id="formu">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nome">Nome da empresa</label>
      <input type="text" class="form-control" id="nome" placeholder="Nome da empresa">
    </div>
    <div class="form-group col-md-6">
      <label for="cnpj">Cnpj</label>
      <input type="text" class="form-control" id="cnpj">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nome">E-mail</label>
      <input type="email" class="form-control" id="nome" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="Telefone">Telefone</label>
      <input type="text" class="form-control" id="Telefone">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Endereço</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Bairro, Rua, Nº">
  </div>
  
  <div class="form-group">
  	<label for="mensagem">Assunto</label>
  	<textarea class="form-control" id="mensagem" placeholder="Assunto..." rows="6"></textarea>	
  </div>
 
  
  
  <button type="submit" class="btn btn-primary">Enter</button>
</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="jquery.mask.min"></script>
    <script type="text/javascript">
    	$(document).ready(function(){
  			$('#cnpj').mask('00/00/0000');
    	})
    </script>
  </body>
</html>