<?php

include 'db_connection.php'; //adding php connection

// Fetch tasks from the db
$query = "SELECT * FROM tasks"; 
$result = mysqli_query($conn, $query);

echo "<table border='1'>
        <tr>
            <th>Id</th>
            <th>Task</th>
            <th>Actions</th>
        </tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>".$row['id']."</td>
            <td>" . $row['task_name'] . "</td>
            <td>
                <a href='update_tasks.php?id=" . $row['id'] . "'>Update</a> | 
                <a href='delete_tasks.php?id=" . $row['id'] . "'>Complete</a>
            </td>
          </tr>";
}

echo "</table>";
?>
