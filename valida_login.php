<?php
    $senha = $_POST['senha'];
    $email = $_POST['email'];

    $usuarios_app = array(
        array('email' => 'admteste@gmail.com', 'senha' => '123456'),
        array('email' => 'userteste@gmail.com', 'senha' => '654321')
    );
    
    foreach($usuarios_app as $user){
        if($user['email'] == $email && $user['senha'] == $senha){
            echo 'usario e senhas corretos';
            break;
        }else{
            echo 'usuario e senhas errados';
        }
    } 

?>