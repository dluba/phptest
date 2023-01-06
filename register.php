<?php
    session_start();   
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="css/main.css"

</head>
<body>

    <!-- Форма Регистрации -->

    <form action="include/signup.php" method="post">
        <label>Name</label>
        <input type="text" name="name" placeholder="Enter name">
        <label>Login</label>
        <input type="text" name="login" placeholder="Enter login">
        <label>Email</label>
        <input type="email" name="email" placeholder="Enter email">
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter password">
        <label>Сonfirm password</label>
        <input type="password" name="password_confirm" placeholder="Сonfirm password">
        <button type="submit">Login</button>
        
        <p>Already have an account?- <a href="index.php">Login here</a></p>
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
