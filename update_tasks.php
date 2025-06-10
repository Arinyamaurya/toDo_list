<?php

include 'db_connection.php';//db connection

//fetch task to update
if (isset($_GET['id'])) {
    $task_id = $_GET['id'];
    $query = $conn->prepare("SELECT * FROM tasks WHERE id = ?");
    $query->bind_param("i",$task_id);
    $query->execute();
    $result=$query->get_result();
    $task=$result->fetch_assoc();
    $query->close();
}
//update on db
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $updated_name = trim($_POST['name']);
    $task_id = $_POST['id'];
    $update_query =$conn->prepare("UPDATE tasks SET task_name = ? WHERE id = ?");
    $update_query->bind_param("si",$updated_name,$task_id);
    
    if($update_query->execute()){
    header('Location: index.php'); // Redirect to main page after updating
    exit();
    } 
    else{
        echo "error".$update_query->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Task</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            flex-direction:row;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            box-sizing: border-box;
        }

        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            gap: 15px;
            width: 100%;
            max-width: 400px;
        }

        input[type="text"] {
            width: calc(100% - 20px); /* Adjust for padding */
            padding: 12px 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box; /* Include padding and border in the element's total width and height */
        }

        input[type="text"]:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.25);
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>

</head>
<body>

<form action="update_tasks.php?id=<?php echo $task['id']; ?>" method="post">
    <input type="hidden" name="id" value="<?php echo $task['id']; ?>"> <!-- Hidden ID Field -->
    <input type="text" name="name" value="<?php echo $task['task_name']; ?>" required>
    <button>Update</button>
</form>
