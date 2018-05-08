<?php
require 'db/connect.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDo list project</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">
    <!--Custom styles-->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="container">
    <h1 class="text-center">To Do application</h1>

    <h2 class="pull-left">Task list</h2>
    <button class="btn btn-lg btn-primary pull-right">Add task</button>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Task Name</th>
            <th>Priority</th>
            <th>Created</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
            <td>
                <span class="btn btn-info">Amend</span>
                <span class="btn btn-danger">Delete</span>
                <span class="btn btn-success"><i class="fas fa-check"></i></span>
            </td>
        </tr>
        <tr>
            <td>Mary</td>
            <td>Moe</td>
            <td>mary@example.com</td>
            <td>
                <span class="btn btn-info">Amend</span>
                <span class="btn btn-danger">Delete</span>
                <span class="btn btn-success"><i class="fas fa-check"></i></span>
            </td>
        </tr>
        <tr>
            <td>July</td>
            <td>Dooley</td>
            <td>july@example.com</td>
            <td>
                <span class="btn btn-info">Amend</span>
                <span class="btn btn-danger">Delete</span>
                <span class="btn btn-success"><i class="fas fa-check"></i></span>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<div class="container">
    <footer>
        <h2>Grzegorz Topolewski <i class="far fa-copyright"></i> <?php echo date("Y"); ?></h2>
    </footer>
</div>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>