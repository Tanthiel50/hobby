<?php
require 'config/database.php';
if(isset($_POST['submit'])){
    //get updated form data
    $firstName = filter_var($_POST['firstName'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastName = filter_var($_POST['lastName'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $pseudo = filter_var($_POST['pseudo'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $avatar = $_FILES['avatar'];


    //check for valid input
    if(!$firstName || !$lastName){
        $_SESSION['edit-user'] = "Changements invalides.";
    } else {
        $avatar_name = null;
        if ($avatar['name']) {
            //rename avatar
            $time = time(); //make each image a unique name
            $avatar_name = $time . $avatar['name'];
            $avatar_tmp_name = $avatar['tmp_name'];
            $avatar_destination_path = 'images/avatar/' . $avatar_name;

            
            //make sure file is image
            $allowed_files = ['png','jpg','jpeg'];
            $extention = explode('.', $avatar_name);
            $extention = end($extention);

            if(in_array($extention, $allowed_files)){
                //make sure image is not too big(1mb)
                if($avatar['size'] < 1000000 ){
                    //upload
                    move_uploaded_file($avatar_tmp_name, $avatar_destination_path);


                } else{
                    $_SESSION['signup'] = 'Taille du fichier trop important. Il doit etre plus petit que 1mb';
                }
            } else {
                $_SESSION['signup'] = 'Le fichier doit être png, jpg ou jpeg ';
            }
        }
        //update user
        $update_query = "UPDATE users SET firstName='$firstName', lastName='$lastName', pseudo='$pseudo', email='$email'";
        if ($avatar_name) {
            $update_query .= ", avatar='$avatar_name'";
        }
        $update_query .= " WHERE id = " . $_SESSION['user-id'];

        $result = mysqli_query($connection, $update_query);

        if(mysqli_errno($connection)){
            $_SESSION['edit-user'] = "Échec de la mise à jour de l'utilisateur";
        } else {
            $_SESSION['edit-user-success'] = "Utilisateur mis à jour avec succès.";
        }
    }
    

    }


header('location: ' . ROOT_URL . 'index.php');
die();