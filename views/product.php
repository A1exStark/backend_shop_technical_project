<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Магазин</title>   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="dashboard.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
        <h1>Покупка товара</h1>
        
        <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>№</th>
                  <th>Наименование</th>
                  <th>Описание</th>
                  <th>Цена</th>
                  <th>Кол-во</th>
                </tr>
              </thead>
              <tbody>
                <tr class="product">
                  <td><?=$product['id']?></td>
                  <td><?=$product['name']?></td>
                  <td><?=$product['content']?></td>
                  <td><?=$product['price']?></td>
                  <td><?=$product['quantity']-1?></td>
                </tr>
              </tbody>
              <form method="post" action="index.php?action=update&id=<?=$_GET['id']?>">
              <label>
                  Количество<br>
                   <input type="number" name="quantity" value="<?=$product['quantity']-1?>" class="form-item1" min ="1" max="<?=$product['quantity']?>" required>
                </label>
                <input type="submit" value="Купить" class="btn_input1">
                </form>
                <?php echo $product['quantity']-0 ?>
            </table>
          </div>
        
</body>
</html>