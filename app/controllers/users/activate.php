<?php 

include("app/app.php");

if (isset($_GET["key"])) {
    include("app/model/usersModel.php");
    if (userActivate($_GET["key"])) {
        flash_create("Activation réussie", "success");
        header("Location: ?module=users&action=login");
        exit;
    } else {
        flash_create("Activation refusée", "danger");
        header("Location: index.php");
        exit;
    }
    
} else {
    die ("NON");
}