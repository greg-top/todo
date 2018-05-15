<?php include 'includes/first_view_modal.php'?>
<div class="container">
    <h1 class="text-center">To Do List app</h1>
    <h2>Welcome <?php if ( isset($_COOKIE['fname']) ) { echo $_COOKIE['fname']; } else { echo 'my friend'; } ?></h2>

    <div class="clearfix">
        <h2 class="pull-left">Task list</h2>
        <button class="btn btn-lg btn-primary pull-right" data-toggle="modal" data-target="#myModal">Add task</button>
    </div>

    <!-- Modal -->
    <?php require 'includes/add_task_form.php'?>
    <?php if ( isset($_POST['submit']) ): ?>
        <div class="well text-center">
            <h2><?php showMessage("Task created") ?> </h2>
        </div>
    <?php endif; ?>
    <?php require 'includes/show_tasks_table.php'?>

</div>