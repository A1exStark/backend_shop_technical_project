<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Добавление товара</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="dashboard.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
   <div class="container">
        <h1>Добавление товара</h1>
       <div>
            <form method="post" action="index.php?action=add">
               <label>
                  Наименование
                   <input type="text" name="name" value="" class="form-item" autofocus required></label>
               <label>
                  Краткое описание
                   <input type="text" name="content" value="" class="form-item" required>
                </label>
                 <label>
                  Цена
                   <input type="number" name="price" value="" class="form-item" required>
                </label>
                 <label>
                  Количество
                   <input type="number" name="quantity" value="" class="form-item" required>
                </label>
                <input type="submit" value="Сохранить" class="btn_input">
                
            </form>
       </div>
   </div>
    
</body>
</html>