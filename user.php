<?php

include 'partials/header.php';
//get user data
if (isset($_SESSION['user-id'])) {
    $query = "SELECT * FROM users WHERE id = " . $_SESSION['user-id'];
    $result = mysqli_query($connection, $query);
    if ($result) {
        $user = mysqli_fetch_assoc($result);
    }
}  else{
    header('location: ' . ROOT_URL . 'signin.php');
    exit();
}

?>

<div class="container pt-5 pb-5">
        <h3 class="text-black text-center pt-5">VOTRE PROFIL</h3> 
            <div class="col-lg-12 mx-auto ">
            <?php if(isset($_SESSION['edit-user'])) : ?> 
                    <div class="error-message">
                        <?= $_SESSION['edit-user'];
                        unset($_SESSION['edit-user']); ?>
                    </div>
            <?php endif ?>
                <div class="card mt-2 mx-auto p-4 bg-orange">
                    <div class="card-body bg-orange">
                        <div class = "container">
                            <form id="contact-form" role="form" action="<?= ROOT_URL ?>user-logic.php" enctype="multipart/form-data" method="POST">
                                <div class="controls">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Prénom</label>
                                                <input type="text" name="firstName" class="form-control" value="<?= $user['firstName'] ?>" placeholder="Votre prénom" data-error="Firstname is required.">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nom</label>
                                                <input type="text" name="lastName" value="<?= $user['lastName'] ?>" class="form-control" placeholder="Votre nom" data-error="Lastname is required.">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Pseudo</label>
                                                <input type="text" name="pseudo" value="<?= $user['pseudo'] ?>" class="form-control" placeholder="Votre pseudo" data-error="Valid pseudo is required.">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" name="email" value="<?= $user['email'] ?>" class="form-control" placeholder="Votre email" data-error="Valid email is required.">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-3 pb-3">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Changer votre avatar</label>
                                                <input type="file" name="avatar" class="form-control-file" data-error="Valid avatar is required.">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-dark" name="submit">Modifier</button>
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
