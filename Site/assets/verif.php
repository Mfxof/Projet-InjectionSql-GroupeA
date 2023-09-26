<?php
// Récupérer les informations du formulaire
$email = $_POST['email'];
$password = $_POST['password'];

// Vérifier l'email et le mot de passe
if ($email == 'xiode.gam@gmail.com' && $password == 'admin') {
    echo "Connexion réussie !";
} else {
    echo "Email ou mot de passe incorrect.";
}
?>
