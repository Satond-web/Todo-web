<?php

    $task = $_POST["task"];

    if ($task == "")
    {
        header("Location: /?error=Enter a valid task");
        exit();
    }

    require "db.php";

    $query = $pdo->prepare("INSERT INTO tasks (task) VALUES (?)");
    $query->execute([$task]);

    header("Location: /");