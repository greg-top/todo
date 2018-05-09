<?php
require 'db/connect.php';
require 'functions.php';
require 'db/task_read.php';


//get mysqli object with Data
$tasksData = getTasksData();

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
    <h1 class="text-center">To Do List app</h1>

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
                    <form action="db/task_create.php" method="post">
                        <div class="form-group">
                            <label for="name">Task Name *</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label for="priority">Priority *</label>
                            <select class="form-control" name="priority">
                                <option value="High">High</option>
                                <option value="Medium">Medium</option>
                                <option value="Low">Low</option>
                            </select>
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
    <div class="tasks-todo">
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
            <?php while ($row = mysqli_fetch_assoc($tasksData)): ?>
                <tr>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['priority']; ?></td>
                    <td><?php echo $row['created_at']; ?></td>
                    <td>
                        <span class="btn btn-info" data-toggle="modal" data-target="#myModal<?php echo $row['id']; ?>">Amend</span>
                        <div class="modal fade" id="myModal<?php echo $row['id']; ?>" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Amend task</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="db/task_update.php?id=<?php echo $row['id'] ?>" method="post">
                                            <div class="form-group">
                                                <label for="name">Task Name *</label>
                                                <input type="text" class="form-control" name="name" value="<?php echo $row['title']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="priority">Priority *</label>
                                                <select class="form-control" name="priority">
                                                    <option value="High" <?php if( $row['priority']=="High" ) echo ' selected'; ?> >High</option>
                                                    <option value="Medium" <?php if( $row['priority']=="Medium" ) echo ' selected'; ?> >Medium</option>
                                                    <option value="Low" <?php if( $row['priority']=="Low" ) echo ' selected'; ?> >Low</option>
                                                </select>
                                            </div>
                                            <input type="submit" name="update" class="btn btn-primary">
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <a href="db/task_delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>

            </tbody>
        </table>
    </div>

</div>

<footer>
    <h2 class="text-center">Grzegorz Topolewski <i class="far fa-copyright"></i> <?php echo date("Y"); ?></h2>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>