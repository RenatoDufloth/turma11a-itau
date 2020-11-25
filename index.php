<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO DE MÚSICAS</title>
    <script type="text/javascript" src="musica.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body onload="carregarartistas()">

<div class="container">
    <div class="row">
        <div class="col-12">
            <h3 style="text-align: center;">CADASTRO DE MÚSICA</h3>
        </div>
    </div>
</div>
<br><br>

<div class="input-group flex-nowrap">
    <div class="input-group-prepend">
      <span class="input-group-text" id="addon-wrapping">Título</span>
    </div>
    <input id="txttitulo" type="text" class="form-control" placeholder="Título" aria-label="Username" aria-describedby="addon-wrapping">
  </div>

  <br>

  <div class="input-group flex-nowrap">
    <div class="input-group-prepend">
      <span class="input-group-text" id="addon-wrapping">Cadastro</span>
    </div>
    <input id="txtcadastro" type="date" class="form-control" placeholder="Data de Cadastro" aria-label="Username" aria-describedby="addon-wrapping">
  </div>

  <br>

  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <label class="input-group-text" for="inputGroupSelect01">Lançamento?</label>
    </div>
    <select id="cmblancamento" class="custom-select" >
      <option value="1" selected> Sim</option>
      <option value="0">Não</option>
    </select>
  </div>
  
  <br>

  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <label class="input-group-text" for="inputGroupSelect01">Artistas</label>
    </div>
    <select id="cmbartistas" class="custom-select">
    </select>
  </div>


  <button onclick="gravar()" type="button" class="btn btn-secondary">Gravar</button>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
</body>
</html>
