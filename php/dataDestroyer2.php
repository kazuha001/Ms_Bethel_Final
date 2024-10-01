
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "payroll_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if($_SERVER["REQUEST_METHOD"] === "POST") {

    $destroyerId = $_POST["destroy"];

    $sql = $conn->prepare("DELETE FROM `operational` WHERE id = ?");
    $sql->bind_param("i", $destroyerId);
    $sql->execute();

}




?>