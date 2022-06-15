<?php

    require_once 'connect.php';

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];

    mysqli_query($connect, "INSERT INTO `user` (`id`, `name`, `surname`, `email`)
    VALUES (NULL, '$name', '$surname', '$email')");
    header('Location: /');
?>
