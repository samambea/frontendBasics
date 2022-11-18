<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud - OO</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <style>
        .row{
            padding: 10px;
        }
    </style>

</head>
<body>
    <div class="container">
        <form action="control/UsuarioController.php" method="post">
            <div class="row">
                <div class="col-md-3">
                    <label for="nome">Nome: </label>
                    <input type="text" name="nome" id="nome" class="form-control" require/>
                </div>
                <div class="col-md-5">
                    <label for="sobrenome">Sobrenome: </label>
                    <input type="text" name="sobrenome" id="sobrenome" class="form-control" require/>
                </div>
                <div class="col-md-2">
                    <label for="nome">Idade: </label>
                    <input type="text" name="idade" id="idade" class="form-control" require/>
                </div>
                <div class="col-md-2">
                    <label for="nome">Sexo: </label>
                    <select name="sexo" id="sexo" class="form-control" require>
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                        <option value="Null">Prefiro não declarar</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <br>
                    <button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>