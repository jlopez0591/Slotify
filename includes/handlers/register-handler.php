<?php

/**
 * Manejador de registro de usuario.
 */

function sanitizeFormPassword($inputText)
{
    /**
     * Valida el password proveniente del formulario
     */
    $inputText = strip_tags($inputText); // strip_tags elimina tags HTML
    return $inputText;
}

function sanitizeFormUsername($inputText)
{
    /**
     * Valida el nombre de usuario proveniente del formulario
     */
    $inputText = strip_tags($inputText); // strip_tags elimina tags HTML
    $inputText = str_replace(" ", "", $inputText); // Reemplaza espacios con empty string.
    return $inputText;
}

function sanitizeFormString($inputText)
{
    /**
     * Valida los strings provenientes del formulario.
     */
    $inputText = strip_tags($inputText); // strip_tags elimina tags HTML
    $inputText = str_replace(" ", "", $inputText); // Reemplaza espacios con empty string.
    $inputText = ucfirst(strtolower($inputText)); // Asegura que el nombre este capitalizado e.g Bart
    return $inputText;
}

if (isset($_POST['registerButton'])) {
    /**
     * Asigna los valores del formulario de registro a variables e intenta generar un nuevo usuario.
     */
    // echo "Register button was pressed.";
    $username = sanitizeFormUsername($_POST['username']);
    $firstName = sanitizeFormString($_POST['firstName']);
    $lastName = sanitizeFormString($_POST['lastName']);
    $email = sanitizeFormString($_POST['email']);
    $email2 = sanitizeFormString($_POST['email2']);
    $password = sanitizeFormPassword($_POST['password']);
    $password2 = sanitizeFormPassword($_POST['password2']);

    $wasSuccessful = $account->Register($username, $firstName, $lastName, $email, $email2, $password, $password2);
    if ($wasSuccessful) {
        header("Location: index.php"); // Redirije a index.php
    }
}
