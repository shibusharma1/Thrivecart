<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product - Online Store</title>
    <link rel="stylesheet" href="css/sellers.css">
</head>
<body>
    <header>
        <h1>Add Product</h1>
        <nav>
            <ul>
                <li><a href="seller.php">Dashboard</a></li>
                <li><a href="product.php">Products</a></li>
                <li><a href="order.php">Orders</a></li>
                <li><a href="#">Settings</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="add-product">
            <h2>Add New Product</h2>
            <form action="#" method="post">
                <label for="productName">Product Name:</label>
                <input type="text" id="productName" name="productName" required>

                <label for="description">Description:</label>
                <textarea id="description" name="description" required></textarea>

                <label for="price">Price:</label>
                <input type="number" id="price" name="price" min="0.01" step="0.01" required>

                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" min="1" required>

                <label for="image">Image:</label>
                <input type="file" id="image" name="image" accept="image/*" required>

                <input type="submit" value="Add Product">
            </form>
        </section>
    </main>
    <footer>
        <?php
        include("includes/sellfooter.php") 
        ?>

    </footer>
</body>
</html>
