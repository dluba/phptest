<?php
    session_start(); 
    if ($_SESSION['user']){
    header('Location: profile.php');
    }   
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="css/main.css"

</head>
<body>

    <!-- Форма Авторизации -->

    <form action="include/login.php" method="post">
        <label>Login</label>
        <input type="text" name="login" placeholder="Enter login">
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter password">
        <button type="submit">Login</button>
        
        <p>Don't you have an account?- <a href="register.php">Register</a></p>
        <?php

            if ($_SESSION['message'])
            {
                echo '<p class="msg"> '. $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

    
</body>
</html>