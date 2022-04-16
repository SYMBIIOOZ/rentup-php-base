<?php
include_once './includes/functions.php';



if (!isset($_POST)) {
    checKValidationForm($_POST);
    foreach ($errors as $error) {
        echo $error . '<br>';
    }


}else{
    $name = $_FILES['image']['name'];
    $tmp_name =  $_FILES['image']['tmp_name'];
    $location = "uploads/";
    $new_name = $location.time()."-".rand(1000, 9999)."-".$name;
    if (move_uploaded_file($tmp_name, $new_name)){
        echo "uploaded";

    }
    else{
        sleep(rand(1,5));
        $new_name = $location.time()."-".rand(1000, 9999)."-".$name;
        if (move_uploaded_file($tmp_name, $new_name)){
            echo "uploaded";
        }
        else{
            echo"failed, better luck next time";
        }
    }

    createProperty($_POST, $new_name);
}

