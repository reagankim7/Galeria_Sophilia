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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@300;400&family=Inria+Serif:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">
</head>
<body class="homeBody">
    <div class="nav">
        <div class="logo">
            <a href="/sem3/test-project/Home/home.php"><p>Galeria <span>Sophilia</span></p></a>
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
                }
            } else {
                echo "Customer not found";
            }

            // Close connection
            $stmt->close();
            $con->close();

        ?>
            <a href="index.php"><button class="butn">Log out</button></a>
        </div>
    </div>
    <div class="profileBox">
        <div class="box">
            <p>Hello <b><?php echo $res_Uname ?></b>, Welcome</p>
        </div>
        <div class="box">
            <p>Your email is <b><?php echo $res_Email ?></b>, Welcome</p>
        </div>
    </div>
    
</body>
</html>