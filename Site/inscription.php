<!DOCTYPE html>
<html>
<head>
    <title>Basic Frites - ConnInscriptionexion</title>
    <?php include('assets/php/nav.php'); ?>
</head>
<body>

<section class="section" id="our-classes">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>s'<em>insrcire</em></h2>
                    <img src="assets/images/line-dec.png" alt="">
                    <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                </div>
            </div>
        </div>
        <div class="row" id="tabs">
        </div>
    </div>
</section>

<section class="registration-form">
    <form id="registration-form" method="post" action="assets/verif.php" role="form" onsubmit="return validateForm()">
        <div class="form-group">
            <label for="username">Nom d'utilisateur *</label>
            <input id="username" type="text" name="" class="form-control" required="required">
        </div>
        <div class="form-group">
            <label for="username">Email *</label>
            <input id="username" type="text" name="" class="form-control" required="required">
        </div>
        <div class="form-group">
            <label for="username">Numéro de thelephone</label>
            <input id="username" type="text" name="" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Mot de passe *</label>
            <input id="" type="password" name="" class="form-control" required="required">
        </div>
        <div class="form-group">
            <label for="confirm-password">Confirmez le mot de passe *</label>
            <input id="" type="password" name="" class="form-control" required="required">
        </div> 
        <div class="form-group">
            <input type="submit" class="btn btn-success btn-register" value="S'inscrire ">
        </div>
    </form>
</section>

<script>
    function validateForm() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirm-password").value;

        if (password !== confirmPassword) {
            alert("Les mots de passe ne correspondent pas.");
            return false;
        }
        return true;
    }
</script>

</body>
</html>
<?php include('assets/php/footer.php'); ?>
