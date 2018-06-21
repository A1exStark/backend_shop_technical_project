<?php
    require_once("database.php");
    require_once("models/products.php");

    $link = db_connect();
    $products = products_all($link);
    include("views/products.php");
?>