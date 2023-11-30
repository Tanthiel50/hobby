<?php

include 'partials/header.php';

//Get back data if error
$firstName = $_SESSION['signup-data']['firstName'] ?? null;
$lastName = $_SESSION['signup-data']['lastName'] ?? null;
$pseudo = $_SESSION['signup-data']['pseudo'] ?? null;
$email = $_SESSION['signup-data']['email'] ?? null;
$password = $_SESSION['signup-data']['password'] ?? null;
$passwordConfirm = $_SESSION['signup-data']['passwordConfirm'] ?? null;
//delete signup data session
unset($_SESSION['signup-data']);


?>

<div class="container pt-5 pb-5">
        <h3 class="text-black text-center pt-5">VOUS ENREGISTRER</h3> 
        <div class="row ">
            <?php if(isset($_SESSION['signup'])) : ?> 
                    <div class="error-message">
                        <?= $_SESSION['signup'];
                        unset($_SESSION['signup']); ?>
                    </div>

            <?php endif ?>

            <div class="col-lg-12 mx-auto ">
                <div class="card mt-2 mx-auto p-4 bg-orange">
                    <div class="card-body bg-orange">
                        <div class = "container">
                            <form id="contact-form" role="form" action="<?= ROOT_URL ?>signup-logic.php" enctype="multipart/form-data" method="POST">
                                <div class="controls">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Prénom</label>
                                                <input type="text" name="firstName" class="form-control" value="<?= $firstName ?>" placeholder="Votre prénom" data-error="Firstname is required.">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nom</label>
                                                <input type="text" name="lastName" value="<?= $lastName ?>" class="form-control" placeholder="Votre nom" data-error="Lastname is required.">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Pseudo</label>
                                                <input type="text" name="pseudo" value="<?= $pseudo ?>" class="form-control" placeholder="Votre pseudo" data-error="Valid pseudo is required.">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" name="email" value="<?= $email ?>" class="form-control" placeholder="Votre email" data-error="Valid email is required.">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" name="password" class="form-control" placeholder="Votre password" data-error="Valid password is required.">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Répétez votre password</label>
                                                <input type="password" name="passwordConfirm" class="form-control" placeholder="Répétez votre password" data-error="Valid password is required.">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-3 pb-3">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Votre avatar</label>
                                                <input type="file" name="avatar" class="form-control-file" data-error="Valid avatar is required.">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-dark" name="submit">S'enregistrer</button>
                                    <p class="pt-3">Vous êtes déjà enregistré ? Veuillez vous <a href="signin.php" class="text-black">connecter</a> </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <!-- /.8 -->
            </div>
        <!-- /.row-->
        </div>
    </div>

    <?php

include 'partials/footer.php';

?>