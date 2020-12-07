<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ToDo List</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">

        <h1>To-Do</h1>

        <?php if ( isset($_GET["error"]) ) echo "<div style='color:red'>" . $_GET["error"] . "</div>"; ?>

        <form action="/add.php" method="POST">
            <input type="text" name="task" id="task_input" placeholder="Learn php..." class="form-control">
            <button type="submit" name="send_task" class="btn btn-success">Save</button>
        </form>

        <?php

        require "db.php";

        $query = get_tasks($pdo);
        while ($row = $query->fetch(PDO::FETCH_OBJ))
        {
            echo "<div class='task'> <b>" . $row->task . "</b><a href='/del.php?id=" . $row->id . "'><button class='btn'>Done</button></a></div>";
        }
        ?>
    </div>
</body>
</html>