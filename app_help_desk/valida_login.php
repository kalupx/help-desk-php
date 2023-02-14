<?php
    session_start();
    $usuario_autenticado =  false;
    $usuario_id =  null;
    $usuario_perfil_id =  null;

    $perfis = array(1 => 'administrativo', 2 => 'usuario');


    $senha = $_POST['senha'];
    $email = $_POST['email'];
    
    
    $usuarios_app = array(
        array('id' => 1, 'email' => 'admteste@gmail.com', 'senha' => '1234', 'perfil_id' => 1),
        array('id' => 2, 'email' => 'userteste@gmail.com', 'senha' => '1234', 'perfil_id' => 1),
        array('id' => 3, 'email' => 'maria@gmail.com', 'senha' => '1234', 'perfil_id' => 2),
        array('id' => 4, 'email' => 'joao@gmail.com', 'senha' => '1234', 'perfil_id' => 2)
    );
    
    
    foreach($usuarios_app as $user){
        if($user['email'] == $email && $user['senha'] == $senha){
            $usuario_autenticado =  true;        
            $_SESSION['id'] = $user['id'];
            $_SESSION['perfil_id'] = $user['perfil_id'];
        }
    } 
    if($usuario_autenticado){
        $_SESSION['autenticado'] = 'SIM';
        header('Location: home.php');
    }else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }

?>