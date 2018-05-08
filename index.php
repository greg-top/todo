<?php
require 'db/connect.php';
require 'functions.php';
require 'db/task_create.php';

insertTask();

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

    <div class="clearfix">
        <h2 class="pull-left">Task list</h2>
        <button class="btn btn-lg btn-primary pull-right" data-toggle="modal" data-target="#myModal">Add task</button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add task to the list</h4>
                </div>
                <div class="modal-body">
                    <form action="index.php" method="post">
                        <div class="form-group">
                            <label for="name">Task Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label for="priority">Priority</label>
                            <input type="text" class="form-control" name="priority">
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <?php if ( isset($_POST['submit']) ): ?>
        <div class="well text-center">
            <h2><?php showMessage("Task created") ?> </h2>
        </div>
    <?php endif; ?>
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
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>