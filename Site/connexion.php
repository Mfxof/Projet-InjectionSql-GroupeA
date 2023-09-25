
<!DOCTYPE html>
<html>
<head>
    <title>Basic Frites - Connexion</title>

<?php
    include('assets/php/nav.php');
    ?>

<body>
<section class="section" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                    <form action="assets/verif.php" method="post">
                    <label for="email">Email :</label><br>
                    <input type="email" id="email" name="email" required><br>
                    <label for="password">Mot de passe :</label><br>
                    <input type="password" id="password" name="password" required><br>
                    <input type="submit" value="Se connecter">
                </form>
            </div>
        </div>
    </div></div>
</section>
</body>
</html>

<?php
    include('assets/php/footer.php');
    ?>