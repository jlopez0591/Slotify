<?php

if (isset($_POST['loginButton'])) {
    // echo "Login button was pressed.";

}

if (isset($_POST['registerButton'])) {
    // echo "Register button was pressed.";

}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome to Slotify!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div id="inputContainer">
        <form id="loginForm" action="register.php" method="POST">
            <h2>Login to your account</h2>
            <p>
            <label for="loginUsername">Username</label>
            <input type="text" name="loginUsername" id="loginUsername" placeholder="e.g. bartSimpson" required>
            </p>
            <p>
            <label for="loginPassword">Password</label>
            <input type="password" name="loginPassword" id="loginPassword" required>
            </p>
            <button type="submit" name="loginButton">Log In</button>
        </form>


        <form id="registerForm" action="register.php" method="POST">
            <h2>Create your free account</h2>
            <p>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="e.g. bartSimspon" required>
            </p>
            <p>
            <label for="firstName">First Name</label>
            <input type="text" name="firstName" id="firstName" placeholder="e.g. Bart" required>
            </p>
            <p>
            <label for="lastName">Last Name</label>
            <input type="text" name="lastName" id="lastName" placeholder="e.g. Simpson" required>
            </p>
            <p>
            <label for="email">E-Mail</label>
            <input type="email" name="email" id="email" placeholder="e.g. bart.simpson@example.com" required>
            </p>
            <p>
            <label for="email2">Confirm E-Mail</label>
            <input type="email" name="email2" id="email2" placeholder="e.g. bart.simpson@example.com" required>
            </p>





            <p>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
            </p>
            <p>
            <label for="password2">Confirm Password</label>
            <input type="password" name="password2" id="password2" required>
            </p>
            <button type="submit" name="registerButton">SIGN UP</button>
        </form>
    </div>
</body>
</html>
