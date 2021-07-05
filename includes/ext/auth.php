<?php

    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);


    $pass = md5($pass . 'qweeqwweqweqweewq1123');

    $mysqli = new mysqli('db3.myarena.ru', 'u2661_diplomkireev', 'diplomkireev', 'u2661_diplomkireev');
    // include ('includes/ext/db.php');

    $result = $mysqli->query("SELECT * FROM `main` WHERE `login` = '$login' AND `pass` = '$pass'");
    $user = $result->fetch_assoc();

    if (count($user) == 0) {
        echo "<div class='error_login'>Ошибка! Неправильный логин или пароль.</div>";
        exit();
    }

    setcookie('user', $user['name'], time() + 3600, "/");

    $mysqli->close();

    header('Location:/');

?>