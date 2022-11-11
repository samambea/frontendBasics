<?php
    include_once "../Conexao.php";
    include_once "../model/Usuario.php";
    include_once "../dao/UsuarioDAO.php";

    //instancia de classe

    $usuario = new Usuario();
    $usuariodao = new UsuarioDAO();
    
    //pegar todos os dados passando  via post

    $form = filter_input_array(INPUT_POST);
    
    //se a operação  for gravar entra nessa condição

    if(isset($_POST['cadastrar'])){
        $usuario->setNome($form['nome']);
        $usuario->setSobrenome($form['sobrenome']);
        $usuario->setIdade($form['idade']);
        $usuario->setSexo($form['sexo']);
    
        $usuariodao->create($usuario);

        header("Location: ../listar.php");
    }


?>