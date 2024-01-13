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
    <title>change profile</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="nav">
        <div class="logo">
            <a href="home.php"><p>logo</p></a>
        </div>
        
        <div class="right-links">
            <a href="#">Change Profile</a>
            <a href="logout.php"><button class="btn">Log out</button></a>
        </div>
    </div>

    <div class="container">
        <div class="box form-box">
            <?php
                //if user clicks on submit
                if(isset($_POST['submit'])) {
                    $username = $_POST['username'];

                    $id = $_SESSION['id'];

                    // try changing into a procedure
                    $edit_query = mysqli_query($con, "UPDATE customer SET username='$username' WHERE customerID=$id") or die("error occured");
                    
                    //if update success
                    if($edit_query) {
                        echo "Update Successful";
                        echo "<a href='home.php'><button>back</button></a>";
                    }
                } else {
                
                // show old credentials
                $id = $_SESSION['id'];
                $query = mysqli_query($con, "SELECT * FROM customer WHERE customerID=$id");
                
                while($result = mysqli_fetch_assoc($query)){
                    $res_Uname = $result['username'];
                    $res_Email = $result['email'];
                }
            ?>
            <header>Change Profile</header>
            <!-- form has post method -->
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" value="<?php echo $res_Uname ?>" required>
                </div>
            
                <div class="field">
                    <!-- submit button -->
                    <input type="submit" name="submit" value="Update" required>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
    
</body>
</html>