


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operational Level</title>

    <!-- CSS links -->
    <link rel="stylesheet" href="css/styles.css">

    <!-- Carrier 4 -->
    <link rel="stylesheet" href="css/Carrier4/styles.css">
</head>
<body>
    <div class="container">
        <div class="carrier">
        <div class="bgeffect"></div>
            <div class="carrier4">
                <h1><u>Operational Level PayRoll</u></h1>
                
                <div class="search_bar">
                    <form method="POST" action="search2.php">
                        <input type="text" name="search" placeholder="Enter Employees ID">
                        <button>Search</button>
                    </form>
                </div>
                <!-- Tables Pay -->
                <div class="tables_pay">
                        
                        <?php
                        
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "payroll_db";

                        $conn = new mysqli($servername, $username, $password, $dbname);

                        $sql = $conn->prepare("SELECT * FROM `operational`");
                        $sql->execute();

                        $result = $sql->get_result();

                        if ($result->num_rows > 0) {

                            $rows = $result->fetch_all(MYSQLI_ASSOC);

                            foreach ($rows as $row) {

                                echo '

                                <div class="popup" id="' . $row["id"] . '">

                                <div>

                                <h2>Personal Information</h2>

                                <p>POSITION</p>

                                <label for="position">'. $row["position"] .'</label>

                                <p>NAME</p>

                                <label for="name">' . $row["fname"] . ' ' . $row["mname"] . ' ' . $row["lname"] . '</label>

                                <p>SEX</p>

                                <label for="sex">' . $row["sex"] . '</label>

                                <p>EMAILS</p>

                                <label for="emails">' . $row["emails"] . '</label>

                                <p>CONTACTS</p>

                                <label for="contacts">' . $row["contacts"] . '</label>

                                    </div>
   
                          
                           <div class="labelsb">
                               <h2>Gross Payment</h2>
                                   <label for="days">Daily wage : ' . $row["days"] . ' pesos</label>
                                   <label for="pays">Hourly wage: ' . $row["hours"] . ' pesos</label>
                                   <label for="pays">Monhtly wage: ' . $row["weeks"] . ' pesos</label>
                                   <label for="pays">Salary: ' . $row["months"] . ' pesos</label>
                                   <label for="pays">Employers ID: ' . $row["id"] . ' </label>

                                   

                                   <form method="POST" action="update2.php" class="destroy_update">
                                   <input type="hidden" name="update" value="' . $row["id"] . '" required>
                                   <button type="submit">Update</button>
                                   </form>

                                   <form id="destroy" class="destroy_update">
                                   <input type="hidden" name="destroy" value="' . $row["id"] . '" required>
                                   <button type="submit">Delete</button>
                                   </form>
                           </div>
                           </div>
                               ';

                            }

                        }else {
                            echo '<p>No Records</p>';
                        }
                        
                        $sql->close();
                        $conn->close();
                           
                        ?>
                        
                        
                    </div>
                </div>
            </div>
    </div>
</body>
<script src="script/scripts2.js"></script>
</html>
