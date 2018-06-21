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
        <h5><a href="index.php?action=add">Добавить товар</a></h5>
        
        <div class="table-responsive">
            <table class="table table-striped table-sm admin-table">
              <thead>
                <tr>
                  <th>№</th>
                  <th>Наименование</th>
                  <th>Описание</th>
                  <th>Цена</th>
                  <th>Кол-во</th>
                  <th>Редактировать</th>
                  <th>Удалить</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($products as $p): ?>
                    <tr class="product">
                      <td><?=$p['id']?></td>
                      <td><?=$p['name']?></td>
                      <td><?=$p['content']?></td>
                      <td><?=$p['price']?></td>
                      <td><?=$p['quantity']?></td>
                      <td><a href="index.php?action=edit&id=<?=$p['id']?>"><button type="button" class="btn btn-primary">Редактировать</button></a></td>
                      <td><a href="index.php?action=delete&id=<?=$p['id']?>"><button type="button" class="btn btn-primary">Удалить</button></a></td>
                    </tr>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
        
</body>
</html>