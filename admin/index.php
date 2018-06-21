<?php
    require_once("../database.php");
    require_once("../models/products.php");

    $link = db_connect();

    if(isset($_GET['action']))
        $action = $_GET['action'];
    else
        $action = "";
    
    if($action == "add"){
       if(!empty($_POST)){
           products_new($link, $_POST['name'], $_POST['content'], $_POST['price'], $_POST['quantity']);
           header("Location: index.php");
       } 
        include("../views/product_add_admin.php");
    }
    else if($action == "edit"){
        if(!isset($_GET['id']))
            header("Location: index.php");
        $id = (int)$_GET['id'];
        
        if(!empty($_POST) && $id > 0){
            products_edit($link, $id, $_POST['name'], $_POST['content'], $_POST['price'], $_POST['quantity']);
            header("Location: index.php");
    }
        $product = products_get($link, $id);
        include("../views/product_admin.php");
    }

    
    else if($action == "update"){
         if(!isset($_GET['id']))
            header("Location: index.php");
        $id = (int)$_GET['id'];
        
        if(!empty($_POST) && $id > 0){
            products_edit($link, $id, $_POST['name'], $_POST['content'], $_POST['price'], $_POST['quantity']);
            header("Location: index.php");
    }
        $product = products_update($link, $id);
        include("../views/product_admin.php");
    }



    else if($action == "delete"){
        $id = $_GET['id'];
        $product = products_delete($link, $id);
        header("Location: index.php");
    }
    else{
        $products = products_all($link);
        include("../views/products_admin.php");
    }
?>