<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders - Online Store</title>
    <link rel="stylesheet" href="css/sellers.css">
</head>
<body>
    <header>
        <h1>Orders</h1>
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
        <section id="order-list">
            <h2>Order List</h2>
            <table>
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer Name</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ram Thapa</td>
                        <td>Product A</td>
                        <td>2</td>
                        <td>599</td>
                        <td>Pending</td>
                        <td><button>Update Status</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Shyam Thapa</td>
                        <td>Product B</td>
                        <td>1</td>
                        <td>1999</td>
                        <td>Shipped</td>
                        <td><button>Update Status</button></td>
                    </tr>
                    <!-- Add more order rows as needed -->
                </tbody>
            </table>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Your Online Store. All rights reserved.</p>
    </footer>
</body>
</html>
