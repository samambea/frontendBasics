<?php
include_once "../Conexao.php";
include_once "../model/Usuario.php";
include_once "../dao/UsuarioDAO";

//instancia de classe

$usuario = new Usuario();
$usuariodao = new UsuarioDAO();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuário</title>
    
</head>
    <body>
        <div class="container">
            <h3>Usuários cadastrados: </h3>
            <div class ="table-responsive">
                <table class="table table-sm table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID: </th>
                            <th>Nome: </th>
                            <th>Sobrenome: </th>
                            <th>Idade: </th>
                            <th>Sexo: </th>
                            <th>Ações: </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($usuariodao->read() as $usuario): ?>
                            <tr>
                                <td><?=$usuario->getId()?></td>
                                <td><?=$usuario->getNome()?></td>
                                <td><?=$usuario->getSobrenome()?></td>
                                <td><?=$usuario->getIdade()?></td>
                                <td><?=$usuario->getSexo()?></td>
                                <td>
                                    <button class="btn btn-warning btn-sm">
                                        Editar
                                    </button>
                                    <button class="btn btn-danger btn-sm">
                                        Excluir
                                    </button>
                                </td>
                            </tr> 
                            <?php endforeach?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</hmtl>