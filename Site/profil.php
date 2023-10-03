
<!DOCTYPE html>
<html>
<head>
<title>Basic Frites - Profil</title>

<?php
include('assets/php/nav.php');
?>

<?php
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
$host = "localhost";
$database = "basic_frites";
$username = "root";
$password = "admin";

$user = $_SESSION['username'];
$pass = $_SESSION['password'];

$mysqli = new mysqli($host, $username, $password, $database);

if ($mysqli->connect_error) {
die("La connexion à la base de données a échoué : " . $mysqli->connect_error);
}

$query = "SELECT * FROM membre WHERE Login='$user' AND Psw='$pass'";
$result = $mysqli->query($query);

if ($result->num_rows == 1) {
$row = $result->fetch_assoc();
$nom = $row['Nom'];
$prenom = $row['Prenom'];
$email = $row['Email'];
$adressePostale = $row['Adresse'];
$numTelephone = $row['Telephone'];
$formationInscrite = $row['FormationInscrite'];

echo '<body>
<!-- ***** Section Profil Début ***** -->
<section class="section" id="features">
<div class="container">
<div class="row">
<div class="col-lg-6 offset-lg-3">
<div class="section-heading">
<h2>Bienvenue sur <em>votre Profil</em></h2>
<img src="assets/images/line-dec.png" alt="vagues">
</div>
</div>
<div class="col-lg-6">
<ul class="features-items">
<li class="feature-item" style="display:flex; flex-direction:row;">
<div class="left-icon">
<img src="assets/images/features-first-icon.png" alt="Premier">
</div>
<div class="right-content">
<h5>Nom :</h5>
<span>' . $nom . '</span>
</div>
</li>
<br>
<li class="feature-item" style="display:flex; flex-direction:row;">
<div class="left-icon">
<img src="assets/images/features-first-icon.png" alt="deuxième">
</div>
<div class="right-content">
<h5>Adresse postale :</h5>
<span>' . $adressePostale . '</span>
</div>
</li>
<br>
<li class="feature-item" style="display:flex; flex-direction:row;">
<div class="left-icon">
<img src="assets/images/features-first-icon.png" alt="troisième">
</div>
<div class="right-content">
<h5>Numéro de téléphone :</h5>
<span>' . $numTelephone . '</span>
</div>
</li>
</ul>
</div>
<div class="col-lg-6">
<ul class="features-items">
<li class="feature-item" style="display:flex; flex-direction:row;">
<div class="left-icon">
<img src="assets/images/features-first-icon.png" alt="Premier">
</div>
<div class="right-content">
<h5>Prénom :</h5>
<span>' . $prenom . '</span>
</div>
</li>
<br>
<li class="feature-item" style="display:flex; flex-direction:row;">
<div class="left-icon">
<img src="assets/images/features-first-icon.png" alt="quatrième">
</div>
<div class="right-content">
<h5>Adresse mail :</h5>
<span>' . $email . '</span>
</div>
</li>
<br>
<li class="feature-item" style="display:flex; flex-direction:row;">
<div class="left-icon">
<img src="assets/images/features-first-icon.png" alt="cinquième">
</div>
<div class="right-content">
<h5>Formation inscrite :</h5>
<span>' . $formationInscrite . '</span>
</div>
</li>
</ul>
</div>
</div>
</div>
</section>
<!-- ***** Section Profil Fin ***** -->
</body>';
}

$mysqli->close();
} else {
header("Location: connexion.php");
exit();
}
?>

<?php
include('assets/php/footer.php');
?>
</html>
