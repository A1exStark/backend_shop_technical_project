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
        <h1>Список товаров</h1>
        <h5><a href="admin">Админка</a></h5>
        
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
                <?php foreach($products as $p): ?>
                    <tr class="product">
                      <td><?=$p['id']?></td>
                      <td><a href="product.php?id=<?=$p['id']?>">
                      <?=$p['name']?></a></td>
                      <td><?=$p['content']?></td>
                      <td><?=$p['price']?></td>
                      <td><?=$p['quantity']?></td>
                    </tr>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
        
</body>
</html>