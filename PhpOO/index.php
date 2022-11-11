<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - OO</title>

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
                <div class="cold-md-3">
                    <label for="nome">Nome: </label>
                    <input type="text" name="nome" id="nome" class="form-control" require/>
                </div>
                <div class="cold-md-5">
                    <label for="sobrenome">Sobrenome: </label>
                    <input type="text" name="sobrenome" id="sobrenome" class="form-control" require/>
                </div>
                <div class="cold-md-2">
                    <label for="idade">Idade: </label>
                    <input type="text" name="idade" id="idade" class="form-control" require/>
                </div>
                <div class="cold-md-2">
                    <label for="sexo">Sexo: </label>
                    <select name="sexo" id="sexo">
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                    </select>
                </div>
                <div class="cold-md-2">
                    <br>
                    <button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button>
                </div>
            </div>
    
        </form>
    </div>

</body>
</html>  