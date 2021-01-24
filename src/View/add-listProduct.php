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
<body>
<form method="post">
    <fieldset>
        <legend class="text-danger fs-1">Create Product</legend>
        <div class="mb-3 row">
            <label for="inputId" class="col-sm-1 col-form-label">Id:</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" id="inputId" required name="id">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputId" class="col-sm-1 col-form-label">Name:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="inputName" required name="name">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputId" class="col-sm-1 col-form-label">Category:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="inputCategoryId" required name="categoryId">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputId" class="col-sm-1 col-form-label">Price:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="inputPrice" required name="price">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputId" class="col-sm-1 col-form-label">Description:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="inputDescription" required name="description">
            </div>
        </div>
        <button class="btn btn-outline-success">Create Product</button>
    </fieldset>
</form>
</body>
</html>

