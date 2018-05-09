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