<?php

function products_all($link){
    // запрос
    $query = "SELECT * FROM products ORDER BY id DESC";
    $result = mysqli_query($link, $query);
    
    if (!$result)
        die(mysqli_error($link));
    
    // извлечение
    $n = mysqli_num_rows($result);
    $products = array();
    
    for ($i = 0; $i < $n; $i++){
        $row = mysqli_fetch_assoc($result);
        $products[] = $row;
    }
    
    return $products;
}

function products_get($link, $id_product){
    // запрос
    $query = sprintf("SELECT * FROM products WHERE id=%d", (int)$id_product);
    $result = mysqli_query($link, $query);
    
    if(!$result)
        die(mysqli_error($link));
    $product = mysqli_fetch_assoc($result);
    
    return $product;
}

function products_new($link, $name, $content, $price, $quantity){
    // подготовка
    $name = trim($name);
    $content = trim($content);
    
    // проверка
    if ($name == '')
        return false;
    
    // запрос
    $t = "INSERT INTO products (name, content, price, quantity) VALUES ('%s', '%s', '%s', '%s')";
    
    $query = sprintf($t, mysqli_real_escape_string($link, $name), mysqli_real_escape_string($link, $content), mysqli_real_escape_string($link, $price), mysqli_real_escape_string($link, $quantity));
    
    echo $query;
    $result = mysqli_query($link, $query);
    
    if (!$result)
        die(mysqli_error($link));
    return true;
}

function products_edit($link, $id, $name, $content, $price, $quantity){
    // подготовка
    $name = trim($name);
    $content = trim($content);
    $price = trim($price);
    $quantity = trim($quantity);
    $id = (int)$id;
    
    // проверка
    if ($name == '')
        return false;
    
    // запрос
    $sql = "UPDATE products SET name='%s', content='%s', price='%s', quantity='%s' WHERE id='%d'";
    
    $query = sprintf($sql, 
            mysqli_real_escape_string($link, $name), mysqli_real_escape_string($link, $content), mysqli_real_escape_string($link, $price), mysqli_real_escape_string($link, $quantity),
            $id);
    $result = mysqli_query($link, $query);
    if (!$result)
        die(mysqli_error($link));
    return mysqli_affected_rows($link);
}


function products_update($link, $id, $name, $content, $price, $quantity){
    // подготовка
    $name = trim($name);
    $content = trim($content);
    $price = trim($price);
    $quantity = trim($quantity);
    $id = (int)$id;
    
    // проверка
    if ($name == '')
        return false;
    
    // запрос
    $sql = "UPDATE products SET name='%s', content='%s', price='%s', quantity='%s' WHERE id='%d'";
    
    $query = sprintf($sql, 
            mysqli_real_escape_string($link, $name), mysqli_real_escape_string($link, $content), mysqli_real_escape_string($link, $price), mysqli_real_escape_string($link, $quantity),
            $id);
    $result = mysqli_query($link, $query);
    if (!$result)
        die(mysqli_error($link));
    return mysqli_affected_rows($link);
}


function products_delete($link, $id){
    $id = (int)$id;
    // проверка
    
    if ($id == 0)
        return false;
    // запрос
    $query = sprintf("DELETE FROM products WHERE id='%d'", $id);
    $result = mysqli_query($link, $query);
    
    if (!$result)
        die(mysqli_error($link));
    return mysqli_affected_rows($link);
}

?>