<?php
include_once './includes/functions.php';

if (empty($_POST['check'])) {


    var_dump($_POST);
    if (!isset($_POST)) {
        checKValidationForm($_POST);
        foreach ($errors as $error) {
            echo $error . '<br>';
        }


    } else {
        $new_name = getNew_name();


        createProperty($new_name);
        header('Location: ./displayAllProperties.php');
    }
}else {
    $id = $_POST['check'];
    $new_name = getNew_name();
    updateProperty($new_name, $id);
    header('Location: ./displayAllProperties.php');
}
