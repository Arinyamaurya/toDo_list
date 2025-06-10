<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO List</title>
    <link rel="stylesheet" href="style.css">
    <style>
        table {
  width: 100%;
  border-collapse: collapse; /* Collapse borders into one */
  margin-top: 20px; /* Add some space from the form above */
}

/* Style for table headers */
th {
  background-color:rgb(15, 80, 145);
  color: white;
  padding: 10px;
  text-align: left;
}

/* Style for table cells */
td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #ddd; /* Add a bottom border for rows */
}

/* Style for table row on hover */
tr:hover {
  background-color: #f2f2f2;
}

/* Style for the actions links (Update/Complete) */
a {
  text-decoration: none;
  color:rgb(27, 35, 84); /* Green color for links */
  font-weight: bold;
}

a:hover {
  color:rgb(27, 35, 84); /* Darker green on hover */
}

/* Style for the action links container */
td a {
  margin-right: 10px; /* Space between the links */
}

    </style>
</head>
<body>
<?php include 'db_connection.php'; ?>
    <form  method="post">
        <h1>TODO-LIST</h1>
        <div>
            <input name="name" type="text" placeholder="Add your task">
            <button>ADD</button>
        </div>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch and sanitize input
    $task_name = trim($_POST['name']);
    $status = 'pending';  // Default status
    $created_at = date('Y-m-d H:i:s');  // Current timestamp

    // Check if task name is not empty
    if (!empty($task_name)) {
        // Use a prepared statement to insert data securely
        $query = $conn->prepare("INSERT INTO tasks (task_name, status, created_at) VALUES (?, ?, ?)");
        $query->bind_param("sss", $task_name, $status, $created_at);

        // Execute query and check success
        if ($query->execute()) {
            
        } else {
            echo "Error: " . $query->error;
        }

        // Close statement
        $query->close();
    } else {
        echo "Please enter a valid task.";
    }
}
?>

    <!-- Display Tasks -->
    <?php include 'display_tasks.php'; ?>
</body>
</html>













