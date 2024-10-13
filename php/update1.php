<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fill in...</title>

    <!-- Style Links -->
    <link rel="stylesheet" href="css/styles2.css">

    <!-- Carrier 3 -->
     <link rel="stylesheet" href="css/Carrier3/styles.css">

</head>
<body>
    <div class="container">
        <div class="carrier">
            <div class="carrier3">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "payroll_db";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if($_SERVER["REQUEST_METHOD"] == "POST") {

                $update = $_POST["update"];

                $sql = $conn->prepare("SELECT * FROM `executive` WHERE id = ?");
                $sql->bind_param("s", $update);
                $sql->execute();
                
                $result = $sql->get_result();

                if ($result->num_rows > 0) {

                    while($row = $result->fetch_assoc()) {
                        echo '
                        
                         <form id="submit">

                    <h1>Update In ID No. ' . $row["id"] . '</h1>

                    

                    <div class="labels">
                    <label for="fname">First Name: </label>
                        <input type="text" name="fname" placeholder="Enter Your First Name" required>
                    </div>
                    <div class="labels">
                    <label for="mname">Middle Name: </label>
                        <input type="text" name="mname" placeholder="Enter Your Middle Name (Optional)">
                    </div>
                    <div class="labels">
                        <label for="lname">Last Name: </label>
                            <input type="text" name="lname" placeholder="Enter Your Last Name" required>
                    </div>
                    <div class="labels">
                        <label for="sex">Sex: </label>
                            <select name="sex" required>
                                <option value="">Choose Your Sex</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                    </div>
                    <div class="labels">
                        <label for="email">Emails: </label>
                            <input type="text" name="email" placeholder="Enter Your Email Accounts" required>
                    </div>
                    <div class="labels">
                        <label for="number">Contacts: </label>
                            <input type="number" name="number" placeholder="Enter Your Numbers" required>
                    </div>

                    <input type="hidden" id="id" name="id" value="' . $row["id"] . '">

                    <div class="buttons">
                        <button type="submit">Update</button>
                    </div>

                </form>
                        
                        ';
                    }

                }
                
                } else {

                    header('Location: retrieve1.php');
                    exit;
                }

                $conn->close();
                
                
                ?>
               
            </div>
        </div>
    </div>
</body>
<script src="script/update/scripts.js"></script>

</html>