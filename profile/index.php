<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@300;400&family=Inria+Serif:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <?php
            
// Connection
include("/XAMPP/htdocs/sem3/test-project/Controller/connection.php");

                if(isset($_POST['submit'])){
                    $email = mysqli_real_escape_string($con, $_POST['email']);
                    $password = mysqli_real_escape_string($con, $_POST['password']);

                    // Call the stored procedure
                    $sql = "CALL emailCheck(?, ?)";
                    $stmt = $con->prepare($sql);
                    $stmt->bind_param("ss", $email, $password);
                    $stmt->execute();

                    // Check for errors
                    if (!$stmt) {
                        die('Error in SQL query: ' . $con->error);
                    }

                    // Fetch the result
                    $result = $stmt->get_result();
                    $row = $result->fetch_assoc();

                    if(is_array($row) && !empty($row)) {
                        // Set session variables
                        $_SESSION['valid'] = $row['email'];
                        $_SESSION['id'] = $row['customerID'];
                        $_SESSION['username'] = $row['username'];
                        $_SESSION['password'] = $row['password'];

                        // Redirect to home.php
                        header("Location: home.php");
                        exit();
                    }
                    if(isset($_SESSION['valid'])) {
                        echo "<div class='message'>
                            <p>Incorrect email or password</p>
                            <a href='index.php'><button class='btn'>Try again</button></a>
                            </div>";                    }
                } else {
                ?>
            <div class="header">
                <h1>Log in</h1>
            </div>
            <div class="forms">
                <form action="" method="post">
                    <div class="formField">
                        <input type="text" name="email" id="email" placeholder="Email" required>
                    </div>
                    <br>
                    <div class="formField">
                        <input type="password" name="password" id="password" placeholder="Password" required>
                    </div>
                    <br>
                    <div class="formField1">
                        <input type="submit" name="submit" value="Login" required>
                    </div>
                    <br>
                    <div class="links">
                        <h2>Dont have account?</h2>
                        <a href="register.php">Register Now</a>
                    </div>

                </form>
            </div>
        </div>
        <?php } ?>
    </div>
</body>
</html>