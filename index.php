<?php
require 'db/connect.php';
require 'functions.php';
require 'db/task_read.php';


//get mysqli object with Data
$tasksData = getTasksData();

?>
<!doctype html>
<html lang="en">
<?php require 'html/head.php' ?>
<body>
<?php require 'html/content.php'; ?>

<?php require 'html/footer.php'; ?>
</body>
</html>