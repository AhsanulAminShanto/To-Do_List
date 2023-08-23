<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tododb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT task_description, due_time FROM tasks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<li class='list-group-item'>" . htmlspecialchars($row["task_description"]) . " - Time: " . $row["due_time"] . "</li>";
    }
} else {
    echo "<li class='list-group-item'>No tasks found</li>";
}

$conn->close();
?>
