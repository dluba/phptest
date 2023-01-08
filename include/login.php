<?php
        session_start();
        require_once 'connect.php';

        $file = "users.json";
        $users = json_decode(file_get_contents($file), true);
        $login = $_POST['login'];
        $password = md5($_POST['password']);
        

        foreach ($users as $getdata){
            if ($login == $getdata['login'] && $password == $getdata['password']) {
    
                $_SESSION['user'] = [
                    "name" => $user['name'],
                    "email" => $user['email'],
    
                ];

                header('Location: ../profile.php');
            }
        else {
                echo "Wrong password";
            }
        }
    
 



?>   
