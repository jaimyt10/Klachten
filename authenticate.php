<?php
require_once 'dbConnect.php';


$login = FALSE;

if (isset($_POST["login"])) {
    if (empty($_POST["email"]) || empty($_POST["password"])) {
        $message = '<label>All fields are required</label>';
    } else {
        $query = "SELECT * FROM accounts WHERE email = :email";

        $values = [':email' => $_POST["email"]];
        try {
            $statement = $conn->prepare($query);

            $statement->execute($values);

        } catch (PDOException $e) {
            /* Query error. */
            echo 'Query error.';
            die();
        }
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        while ($haalop = $statement->fetch(PDO::FETCH_OBJ)) {
            $hetwachtwoord = $haalop->password;
        }


        if (isset($hetwachtwoord)) {
            if (password_verify($_POST['password'], $hetwachtwoord)) {
                /* The password is correct. */
                header('Location: index.php');
                exit;


            } else {
                echo "ongeldig wachtoord of gebruikersnaam of email";
            }

        }

    }
}
