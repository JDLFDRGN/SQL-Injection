<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <?php
        include 'database.php';
        if(isset($_POST['signup'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $password2 = $_POST['password2'];

            if($password == $password2){
                $query = "INSERT INTO users(username, password) VALUES('$username', '$password')";
                if($connect->query($query)) echo "<script>alert('Account created successfully')</script>";
                else echo "<script>alert('Error ocurred')</script>";
            }else echo "<script>alert('Passwords do not match!')</script>";
        }
    ?>
    <div class="container">
        <form id="signup-form" method="POST">
            <h1>Signup</h1>
            <div class="signup-input">
                <input type="text" placeholder="Enter username" name="username" required>
                <input type="password" placeholder="Enter password" id="submit-password" name="password" required>
                <input type="password" placeholder="Reenter password" id="submit-reenter-password" name="password2" required>
                <div class="show-password">
                    <input type="checkbox" id="submit-checkbox">
                    <label>Show password</label>
                </div>
            </div>
            <div class="signup-button">
                <input type="button" value="Back" onclick="navigate('index.php')">
                <input type="submit" name="signup">
            </div>
        </form>
    </div>
</body>
</html>