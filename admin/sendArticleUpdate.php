<?php

//var_dump($_POST);

    include("app/app.php");
    include("app/protect.php");

    include("app/model/postModel.php");
    postUpdate($_POST);

    header("Location:articles.php");
   