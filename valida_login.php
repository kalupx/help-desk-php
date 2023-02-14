<?php
    session_start();

    $senha = $_POST['senha'];
    $email = $_POST['email'];
    
    
    $usuarios_app = array(
        array('email' => 'admteste@gmail.com', 'senha' => '123456'),
        array('email' => 'userteste@gmail.com', 'senha' => '654321')
    );
    
    
    foreach($usuarios_app as $user){
        if($user['email'] == $email && $user['senha'] == $senha){
            $usuario_autenticado =  true;        
            header('Location: home.php');
        }
    } 
    if($usuario_autenticado){
        echo 'SENHA certa';
        $_SESSION['autenticado'] = 'SIM';
    }else{
        $_SESSION['autenticado'] = 'NAO';
        echo 'SEnha errada';
        header('Location: index.php?login=erro');
    }

?>