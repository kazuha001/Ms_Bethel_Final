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

$fnameId = $_POST['fname'];
$mnameId = $_POST['mname'];
$lnameId = $_POST['lname'];
$sexId = $_POST['sex'];
$emailId = $_POST['email'];
$numberId = $_POST['number'];
$daysId = $_POST["days"];
$hoursId = $_POST["hours"];
$weeksId = $_POST["weeks"];
$monthsId = $_POST["months"];
$position3_Id = $_POST['position3'];

$sql = $conn->prepare("INSERT INTO `support` (`fname`, `mname`, `lname`, `sex`, `emails`, `contacts`, 
`days`, `hours`, `weeks`, `months`, `position`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$sql->bind_param("sssssssssss", $fnameId, $mnameId, $lnameId, $sexId, $emailId, $numberId, 
$daysId, $hoursId, $weeksId, $monthsId, $position3_Id);

$sql->execute();


}
$sql->close();

$conn->close();

?>