<!DOCTYPE html>
<html>
<head>
    <title>Page de connexion</title>
</head>
<body>
    <h1>Page connexion temporaire</h1>
    <nav>
        <a href="index.php">Accueil</a> |
        <a href="activites.php">Activités</a> |
        <a href="connexion.php">Connexion</a>
    </nav>

    <h2>Connexion membre</h2>

    <form action="assets/verif.php" method="post">
        <label for="email">Email :</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="password">Mot de passe :</label><br>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Se connecter">
    </form>
</body>
</html>
