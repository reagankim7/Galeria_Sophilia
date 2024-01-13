<?php
    session_start();

    include("/XAMPP/htdocs/sem3/test-project/Controller/connection.php");
    // if customer login fail, go back to login page
    if(!isset($_SESSION['valid'])){
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="nav">
        <div class="logo">
            <a href="home.php"><p>logo</p></a>
        </div>
        
        <div class="right-links">

            <?php
                // 1st Procedure
                // User input
                $userId = $_SESSION['id'];

                // Call the stored procedure
                $sql = "CALL getCustomer(?)";
                $stmt = $con->prepare($sql);
                $stmt->bind_param("i", $userId);
                $stmt->execute();

                // Fetch the result
                $result = $stmt->get_result();
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $res_Uname = $row['username'];
                        $res_Email = $row['email'];
                        $res_id = $row['customerID'];

                        echo "<a href='edit.php?customerID=$res_id'> Change Profile</a>";
                    }
                } else {
                    echo "Customer not found";
                }

                // Close connection
                $stmt->close();
                $con->close();

            ?>
            <a href="logout.php"><button class="btn">Log out</button></a>
        </div>
    </div>
    <main>
        <div class="main-box top">
            <div class="top">
                <div class="box">
                    <p>Hello <b><?php echo $res_Uname ?></b>, Welcome</p>
                </div>

                <div class="box">
                    <p>Your email is <b><?php echo $res_Email ?></b>, Welcome</p>
                </div>
            </div>

            <div class="bottom">
                <div class="box">
                    <p>And you are hello</p>
                </div>
            </div>
        </div>
    </main>
    
</body>
</html>