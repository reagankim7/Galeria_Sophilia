<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@300;400&family=Inria+Serif:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <?php
            
            // database connection
            include("/XAMPP/htdocs/sem3/test-project/Controller/connection.php");

            // Action when the submit button is clicked
            if (isset($_POST['submit'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                // Call the email verification 3rd stored procedure
                $sql = "CALL emailVerify(?)";
                $stmt = $con->prepare($sql);
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $stmt->bind_result($emailExists);
                $stmt->fetch();
                $stmt->close();

                if ($emailExists) {
                    echo 
                    "<div class='message'>
                        <p>Email is already used</p>
                        <a href='register.php'><button class='btn'>Go back</button></a>
                    </div>";
                } else {
                    // Call the customer registration stored procedure
                    $sqlCustomerNew = "CALL customerNew(?, ?, ?)";
                    $stmtCustomerNew = $con->prepare($sqlCustomerNew);
                    $stmtCustomerNew->bind_param("sss", $username, $email, $password);
                    $stmtCustomerNew->execute();
                    $stmtCustomerNew->close();
            
                    echo "
                    <div class='message'>
                        <p>Registration Successful!</p>
                        <a href='index.php'><button class='btn'>Login Now</button></a>
                    </div>";
                    echo "";
                }
            } else {
            
            // Close connection
            $con->close();
            ?>
            <div class="header">
                <h1>Sign Up</h1>
            </div>
            <div class="forms1">
                <form action="register.php" method="post">
                    <div class="formField">
                        <input type="text" name="username" id="username" autocomplete="off" placeholder="Username" required>
                    </div>

                    <div class="formField">
                        <input type="text" name="email" id="email" autocomplete="off" placeholder="Email" required>
                    </div>

                    <div class="formField">
                        <input type="password" name="password" id="password" autocomplete="off" placeholder="Password" required>
                    </div>
                    <br>
                    <div class="formField1">
                        <input type="submit" name="submit" value="Register" required>
                    </div>

                    <div class="links">
                        <h2>Already a member?</h2>
                        <a href="index.php">Sign in</a>
                    </div>

                </form>
            </div>
        </div>
        <?php } ?>
    </div>
    
</body>
</html>