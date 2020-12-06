<?php

    require "db.php";

    $task_id = $_GET["id"];

    $query = $pdo->prepare("DELETE FROM tasks WHERE id=?");
    $query->execute([$task_id]);

    header("Location: /");