<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <div class="container">
        <form action="validate.php" method="POST" id="login-form">
            <h1>Login</h1>
            <div class="login-input">
                <input type="text" name="username" placeholder="Enter username" required>
                <input type="password" name="password" placeholder="Enter password" required>
            </div>
            <div class="login-navigate">
                <input type="submit" value="Login" name="login">
                <a href="signup.php">Signup</a>
            </div>      
        </form>
    </div>
</body>
</html>