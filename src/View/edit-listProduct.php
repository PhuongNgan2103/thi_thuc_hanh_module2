<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <?php if (!empty($product)): ?>
        <fieldset>
            <legend>Edit item</legend>
            Id: <input type="number" name="id" value="<?php echo $product[0]['id'] ?>">
            Name: <input type="text" name="name" value="<?php echo $product[0]['name'] ?>">
            Type: <input type="text" name="categoryId" value="<?php echo $product[0]['categoryId'] ?>">
            Price: <input type="text" name="price" value="<?php echo $product[0]['price'] ?>">
            Description: <input type="text" name="description" value="<?php echo $product[0]['description'] ?>">
            <button>Save</button>
        </fieldset>
    <?php endif; ?>
</form>
</body>
</html>