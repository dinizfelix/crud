<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Crud PHP com MVC</title>
</head>

<body>

    <nav class="navbar navbar-light bg-light menu">
        <div class="container">
        <a class="navbar-brand" href="#">
            CRUD PHP
        </a>
        </div>
        <div class="container">
            <form>
                <div class="row">
                    <div class="col-md-3">
                        <label>Nome</label>
                        <input type="text" name="nome" value="" autofocus class="form-control" require />
                    </div>
                    <div class="col-md-5">
                        <label>Sobrenome</label>
                        <input type="text" name="sobrenome" value="" class="form-control" require />
                    </div>
                    <div class="col-md-1">
                        <label>Idade</label>
                        <input type="number" name="idade" value="" class="form-control" require />
                    </div>
                    <div class="col-md-2">
                        <label>Sexo</label>
                        <select class="form-control" name="sexo" id="sexo">

                            <option value="F">Feminino</option>
                            <option value="M">Masculino</option>
                        </select>        
</div>
<div>
    <br>
    <button type="button" class="btn btn-primary">Cadastrar</button>
</div>
</div>
 </div>
        </form>


</body>

</html>