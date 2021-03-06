<?php

/**
 * Pagina de registro.
 *
 * Contiene los formularios de inicio de sesion y registro de nuevo usuario.
 */

// Los modulos incluidos son codigo "inyectado" en toda la pagina, van en cascada.
include "includes/config.php";
include 'includes/classes/Account.php'; // Llama a la clase Account para su uso en esta pagina y otros modulos
include 'includes/classes/Constants.php';
$account = new Account(); // Creacion de nueva instancia cuenta
include 'includes/handlers/register-handler.php'; // Ejecuta acciones de registro si estas son solicitadas
include 'includes/handlers/login-handler.php'; // Ejecuta acciones de inicio de sesion. TODO

function getInputValue($name)
{
    if (isset($_POST[$name])) {
        echo $_POST[$name];
    }
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
            <input type="text" name="loginUsername" id="loginUsername" placeholder="e.g. bartSimpson"  required>
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
            <?=$account->getError(Constants::$usernameCharacters);?>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="e.g. bartSimspon" value="<?=getInputValue('username')?>" required>
            </p>
            <p>
            <?=$account->getError(Constants::$firstNameCharacters);?>
            <label for="firstName">First Name</label>
            <input type="text" name="firstName" id="firstName" placeholder="e.g. Bart" value="<?=getInputValue('firstName')?>" required>
            </p>
            <p>
            <?=$account->getError(Constants::$lastNameCharacters);?>
            <label for="lastName">Last Name</label>
            <input type="text" name="lastName" id="lastName" placeholder="e.g. Simpson" value="<?=getInputValue('lastName')?>" required>
            </p>
            <p>
            <?=$account->getError(Constants::$emailsDoNotMatch);?>
            <?=$account->getError(Constants::$emailInvalid);?>
            <label for="email">E-Mail</label>
            <input type="email" name="email" id="email" placeholder="e.g. bart.simpson@example.com" value="<?=getInputValue('email')?>" required>
            </p>
            <p>
            <label for="email2">Confirm E-Mail</label>
            <input type="email" name="email2" id="email2" placeholder="e.g. bart.simpson@example.com" value="<?=getInputValue('email2')?>" required>
            </p>
            <p>
            <?=$account->getError(Constants::$passwordsDoNotMatch);?>
            <?=$account->getError(Constants::$passwordsNotAlphanumeric);?>
            <?=$account->getError(Constants::$passwordsCharacters);?>
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
