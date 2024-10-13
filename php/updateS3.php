<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "payroll_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "Error";
}else {
    echo "Connected";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$id_id = $_POST['id'];

$fnameId = $_POST['fname'];
$mnameId = $_POST['mname'];
$lnameId = $_POST['lname'];
$sexId = $_POST['sex'];
$emailId = $_POST['email'];
$numberId = $_POST['number'];


$sql = $conn->prepare("UPDATE `support` SET fname = ?, mname = ?, lname = ?, 
sex = ?, emails = ?, contacts = ? WHERE id = ?");

$sql->bind_param("sssssss", $fnameId, $mnameId, $lnameId, $sexId, $emailId, $numberId, $id_id);

$sql->execute();

$sql->close();
}


$conn->close();

?>