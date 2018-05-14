<?php

/**
 * Clase de usuario con sus metodos de validacion y registro.
 */

class Account
{

    private $errorArray;

    public function __construct()
    {
        $this->errorArray = array();
    }

    public function register($un, $fn, $ln, $em, $em2, $pw, $pw2)
    {
        $this->validateUsername($un);
        $this->validateFirstName($fn);
        $this->validateLastName($ln);
        $this->validateEmails($em, $em2);
        $this->validateEmails($pw, $pw2);

    }

    private function validateUsername($un)
    {
        // Valido largo del username
        if (strlen($un) > 25 || strlen($un) < 5) {
            array_push($this->errorArray, "Your username must be between 5 and 25 characters.");
            return;
        }
        // TODO: check if username exists.
    }

    private function validateFirstName($fn)
    {
        // Valida largo del nombre
        if (strlen($fn) > 25 || strlen($fn) < 5) {
            array_push($this->errorArray, "Your first name must be between 2 and 25 characters.");
            return;
        }

    }

    private function validateLastName($ln)
    {
        // Validar largo del apellido
        if (strlen($ln) > 25 || strlen($ln) < 5) {
            array_push($this->errorArray, "Your last name must be between 2 and 25 characters.");
            return;
        }

    }

    private function validateEmails($em, $em2)
    {
        // Valida que los password sean iguales
        if ($em != $em2) {
            array_push($this->errorArray, "Your emails don't match");
            return;
        }

        // Utiliza una constante del lenguaje para validar el email.
        if (!filter_var($em, FILTER_VALIDATE_EMAIL)) {
            array_push($this->errorArray, "Email is invalid");
            return;
        }

        // TODO: Check that email hasn't been used.
    }

    private function validatePasswords($pw, $pw2)
    {
        // Valida que los passwords sean iguales
        if ($pw != $pw2) {
            array_push($this->errorArray, "Your passwords don't match");
            return;
        }

        // Valida que sean valores alfanumericos
        if (preg_match('/[^A-Za-z0-9]', $pw)) { // Si no es alfanumerico.
            array_push($this->errorArray, "Your password can only contain numbers and letters");
            return;
        }

        // Valida el largo del password
        if (strlen($ln) > 30 || strlen($ln) < 5) {
            array_push($this->errorArray, "Your password must be between 5 and 30 characters.");
            return;
        }
    }
}
