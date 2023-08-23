<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tododb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["task"]) && isset($_POST["due_time"])) {
    $task = $_POST["task"];
    $dueTime = $_POST["due_time"];
    
    $sql = "INSERT INTO tasks (task_description, due_time) VALUES ('$task', '$dueTime')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: index.html");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

