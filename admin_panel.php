<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
</head>
<body>

<h2>Manage Products</h2>
<form action="product_management.php" method="post" enctype="multipart/form-data">
    <label for="catid">Category:</label>
    <select name="catid" id="catid">
        <!-- PHP code to populate categories -->
    </select><br><br>

    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>

    <label for="price">Price:</label>
    <input type="text" id="price" name="price"><br><br>

    <label for="description">Description:</label>
    <textarea id="description" name="description"></textarea><br><br>

    <label for="image">Image (jpg/gif/png, <=10MB):</label>
    <input type="file" id="image" name="image"><br><br>

    <input type="submit" value="Submit">
</form>

<h2>Manage Categories</h2>
<form action="category_management.php" method="post">
    <!-- Fields for category management -->
    <input type="submit" value="Submit">
</form>

</body>
</html>
