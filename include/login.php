<?php
        session_start();

        if(!isset($_POST['login'])||!isset($_POST['password'])){
            echo "Login and password required";
            die();
        }
        
        $file = "users.json";
        $users = json_decode(file_get_contents($file), true);
        $login = $_POST['login'];
        $password = $_POST['password'];
        

        foreach ($users as $getdata){
            if ($login == $getdata['login'] && $password == $getdata['password']) {
    
                $_SESSION['user'] = [
                    "name" => $user['name'],
                    "email" => $user['email'],
    
                ];

                header('Location: ../profil.php');
            }
        else {
                echo "Wrong password";
            }
        }
    
 



?>   