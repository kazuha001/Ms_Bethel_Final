<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Level</title>

    <!-- CSS links -->
    <link rel="stylesheet" href="css/styles.css">

    <!-- Carrier 4 -->
    <link rel="stylesheet" href="css/Carrier4/styles.css">
</head>
<body>
    <div class="container">
        <div class="carrier">
            <div class="carrier4">
                <h1>Support Level PayRoll</h1>
                
                <div class="search_bar">
                    <form method="POST" action="">
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

                        if ($_SERVER["REQUEST_METHOD"] === "POST") {

                        $search = $_POST["search"];

                        $sql = $conn->prepare("SELECT * FROM `support` WHERE id = ?");
                        $sql->bind_param("i", $search);
                        
                        $sql->execute();
                        $result = $sql->get_result();

                        if ($result->num_rows > 0) {

                            while ($row = $result->fetch_assoc()) {

                                echo '<form id="destroy">';

                                echo '<div class="popup" id="' . $row["id"] . '">';

                                echo '  <div>';

                                echo ' <h2>Personal Information</h2>';

                                echo '<p>POSITION</p>';

                                echo '<label for="position">'. $row["position"] .'</label>';

                                echo ' <p>NAME</p>';

                                echo '<label for="name">' . $row["fname"] . ' ' . $row["mname"] . ' ' . $row["lname"] . '</label>';

                                echo '<p>SEX</p>';

                                echo '<label for="sex">' . $row["sex"] . '</label>';

                                echo '<p>EMAILS</p>';

                                echo '<label for="emails">' . $row["emails"] . '</label>';

                                echo '<p>CONTACTS</p>';

                                echo '<label for="contacts">' . $row["contacts"] . '</label>';

                                echo ' </div>';

                                echo '   
                          
                           <div>
                               <h2>Gross Payment</h2>
                                   <label for="days">Payment per Days: ' . $row["days"] . ' pesos</label>
                                   <label for="pays">Payment per Hours: ' . $row["hours"] . ' pesos</label>
                                   <label for="pays">Payment per Weeks: ' . $row["weeks"] . ' pesos</label>
                                   <label for="pays">Payment per Monthly: ' . $row["months"] . ' pesos</label>
                                   <label for="pays">Employers ID: ' . $row["id"] . ' </label>

                                   <input type="hidden" name="destroy" value="' . $row["id"] . '" required>

                                   <button type="submit">delete</div>

                           </div>

                           </form>
                               ';

                            }

                        }else {

                            echo 'No Records';

                        }
                        
                               

                        }

                      
                        $sql->close();
                        $conn->close();
                           
                        ?>
                        
                        
                    </div>
                </div>
            </div>
    </div>
</body>
<script src="script/scripts.js"></script>
</html>
