<?php

    //var_dump($_POST);

include("app/app.php");

    //var_dump($_SESSION);

include("app/model/commentsModel.php");

if (isset($_POST["comment_post_ID"]) && isset($_SESSION["userFO"]["ID"])) {
    if (commentInsert($_POST, $_SESSION["userFO"]["ID"])) {
        flash_create("Votre commentaire a été posté !", "success");
        header("Location:single.php?id=" . $_POST["comment_post_ID"]);
    } else {
        flash_create("Votre commentaire n'a pas été posté !", "danger");
        header("Location:single.php?id=" . $_POST["comment_post_ID"]);
    } 
} else {
     die("NON !");
}
    

    