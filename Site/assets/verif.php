<?php
$host = "localhost";
$database = "basic_frites";
$username = "root";
$password = "admin";

$user = $_POST['username'];
$pass = $_POST['password'];

$mysqli = new mysqli($host, $username, $password, $database);

if ($mysqli->connect_error) {
    die("La connexion à la base de données a échoué : " . $mysqli->connect_error);
}

$user = $mysqli->real_escape_string($user);
$pass = $mysqli->real_escape_string($pass);

$query = "SELECT * FROM membre WHERE Login='$user' AND Psw='$pass'";
$result = $mysqli->query($query);

if ($result->num_rows == 1) {
    echo "Authentification réussie. Vous pouvez accéder à votre compte.";
} else {
    echo "Erreur : Nom d'utilisateur ou mot de passe incorrect.";
}
$mysqli->close();
?>
