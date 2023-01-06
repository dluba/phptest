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

    <!-- Профиль -->

    <form>
        <h2><?= $_SESSION['user']['name'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></h2>
        <h2>Hello</h2>
        <a href="include/logout.php">Выход</h2>
    </form>

    
</body>
</html>