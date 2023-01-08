<?php
        session_start();
        require_once 'connect.php';


        $name = $_POST['name'];
        $login  = $_POST['login']; 
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $password_confirm = md5($_POST['password_confirm']);

        password_hash($password, PASSWORD_DEFAULT);
        if ($password == $password_confirm)
        {
        $json = json_decode(file_get_contents('users.json'), true);
        $json['user'][] = [
            'name'     => $_POST['name'],
            'login'     => $_POST['login'], 
            'email'    => $_POST['email'],
            'password'     => md5($_POST['password']),
            'password_confirm'     => md5($_POST['password_confirm'])
    
        ];

        file_put_contents('users.json', json_encode($json));
        //con..
        header('Location: ../profile.php');
        }
        else
        {
        $_SESSION['message'] = 'Password error!';
        header('Location: ../register.php');
        }



    

?>
