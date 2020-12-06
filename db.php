<?php

    $pdo = new PDO("mysql:host=localhost;dbname=tasks", 'root', 'root');

    function get_tasks($pdo)
    {
        $query = $pdo->query("SELECT * FROM `tasks` ORDER BY `id` DESC");
        return $query;
    }