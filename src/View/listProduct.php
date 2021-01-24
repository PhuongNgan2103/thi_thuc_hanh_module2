<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</head>
<style>
    table{
        border: 1px solid;
        border-collapse: collapse;
        width: 100%;
    }
</style>
<body>
<button class="btn btn-success btn-lg"><a href="index.php?page=add-listProduct" class="text-decoration-none">Create Product</a></button>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
    <?php if (isset($products)){
        foreach ($products as $product): ?>
    <tr>
        <td><?php echo $product->getId() ?></td>
        <td><?php echo $product->getName() ?></td>
        <td><?php echo $product->getCategoryId() ?></td>
        <td><?php echo $product->getPrice() ?></td>
        <td><?php echo $product->getDescription() ?></td>
        <td>
            <button class="btn btn-outline-danger"><a href="index.php?page=deleteProduct&Id=<?php echo $product->getId() ?>" class="text-decoration-none">Delete</a></button>
            <button class="btn btn-outline-danger"><a href="index.php?page=edit-listProduct&Id=<?php echo $product->getId() ?>" class="text-decoration-none">Edit</a></button>
        </td>
    </tr>
    <?php endforeach; } ?>
</table>
</body>
</html>