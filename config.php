<?php
$servername = "localhost";
$username = "root";
$password = "victor0516";
$db_name = "final_project";

$conn = new mysqli($servername, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Error: " . $conn->connect_error);
}
echo "資料庫連接成功\n";

?>