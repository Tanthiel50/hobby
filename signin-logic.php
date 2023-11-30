<?php
require 'config/database.php';

if(isset($_POST['submit'])){
    //get form data, Remove all characters except letters, digits
    $pseudo_email = filter_var($_POST['pseudo_email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // if mail or pseudo is empty
    if(!$pseudo_email){
        $_SESSION['signin'] = "Veuillez entrer votre email ou pseudo";
        // if password is empty
    }elseif(!$password){
        $_SESSION['signin'] = "Veuillez entrer votre password";
    }else{
        //fetch user from DB
        $fetch_user_query = "SELECT * FROM users WHERE pseudo='$pseudo_email' OR email='$pseudo_email'";
        $fetch_user_result = mysqli_query($connection, $fetch_user_query);//execute query
        // chech the number of rows
        if(mysqli_num_rows($fetch_user_result) == 1){
            //convert the record into assoc array
            $user_record = mysqli_fetch_assoc($fetch_user_result);
            $db_password = $user_record['password'];
            //compare form password with DB password
            if(password_verify($password, $db_password)){
                //set session for access control
                $_SESSION['user-id'] = $user_record['id'];

                //log user in
                header('location: ' . ROOT_URL . 'index.php');
            }else {
                $_SESSION['signin']="Vérifiez les champs remplis";
            }

        }else{
            $_SESSION['signin']="Utilisateur non trouvé";
        }
    }

    //if any problem redirect to signin
    if (isset($_SESSION['signin'])) {
        $_SESSION['signin-data'] = $_POST;
        header('location: ' . ROOT_URL . 'signin.php');
        die();
    }

}else{
    header('location: ' . ROOT_URL . 'signin.php');
    die();
}