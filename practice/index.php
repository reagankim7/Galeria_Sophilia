<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ticket Purchasing</h1>

    <!-- add a method and action attribute to the form -->
    <form method="post" action="send.php">
        <label for="email">Enter Email</label>
        <input type="text" name="email" id="email" required>
        
        <button type="submit" name="send">Submit</button>
    </form>

</body>
</html>