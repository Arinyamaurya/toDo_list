<?php
// delete_task.php
include 'db_connection.php';

if (isset($_GET['id'])) {
    $task_id = $_GET['id'];
    $delete_query = $conn->prepare("DELETE FROM tasks WHERE id = ?");
    $delete_query->bind_param("i",$task_id);

    if($delete_query->execute()){
    header('Location: index.php'); // Redirect back to the main page
    }
}
?>
