<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Product - Online Shop</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }
        header {
            background-color: #d81b60;
            color: white;
            text-align: center;
            padding: 20px;
        }
        header h1 {
            margin: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }
        .form-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #d81b60;
        }
        .form-container label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }
        .form-container input[type="text"], 
        .form-container input[type="number"], 
        .form-container textarea, 
        .form-container input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 4px;
            border: 1px solid #ddd;
            box-sizing: border-box;
        }
        .form-container textarea {
            resize: vertical;
            height: 150px;
        }
        .form-container button {
            background-color: #d81b60;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .form-container button:hover {
            background-color: #c2185b;
        }
        .success-message {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
        }
        .product-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 20px;
            text-align: center;
        }
        .product-card img {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        .product-card h3 {
            color: #333;
            margin: 10px 0;
            font-size: 20px;
        }
        .product-card p {
            color: #777;
            margin: 10px 0;
            font-size: 16px;
        }
        .product-card .price {
            font-size: 18px;
            font-weight: bold;
            color: #d81b60;
        }
        .products-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .products-grid .product-card {
            width: 23%;
            margin: 15px 0;
        }
        @media (max-width: 768px) {
            .products-grid .product-card {
                width: 48%;
            }
        }
        @media (max-width: 480px) {
            .products-grid .product-card {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>Online Shop - Women's Dresses</h1>
</header>

<div class="container">
    @if(session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    <!-- Product Upload Form -->
    <div class="form-container">
        <h2>Upload Product</h2>
        <form action="{{ route('Store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="product-name">Product Name</label>
            <input type="text" id="product-name" name="product_name" required>

            <label for="product-image">Product Image</label>
            <input type="file" id="product-image" name="product_image" accept="image/*" required>

            <label for="product-description">Product Description</label>
            <textarea id="product-description" name="product_description" required></textarea>

            <label for="product-price">Price ($)</label>
            <input type="number" id="product-price" name="product_price" min="0" step="0.01" required>

            <button type="submit">Upload Product</button>
        </form>
    </div>

    <!-- Display Products -->
    <h2>Our Products</h2>
    <div class="products-grid">
        <div class="product-card">
            <img src="dress1.jpg" alt="Dress 1">
            <h3>Elegant Red Dress</h3>
            <p>A beautiful red dress perfect for any occasion.</p>
            <div class="price">$29.99</div>
        </div>
        <div class="product-card">
            <img src="dress2.jpg" alt="Dress 2">
            <h3>Summer Floral Dress</h3>
            <p>Light and breezy, perfect for hot weather.</p>
            <div class="price">$34.99</div>
        </div>
        <div class="product-card">
            <img src="dress3.jpg" alt="Dress 3">
            <h3>Black Evening Gown</h3>
            <p>Elegant and sleek, perfect for formal events.</p>
            <div class="price">$49.99</div>
        </div>
        <div class="product-card">
            <img src="dress4.jpg" alt="Dress 4">
            <h3>Casual Summer Dress</h3>
            <p>Comfortable and chic, perfect for casual outings.</p>
            <div class="price">$24.99</div>
        </div>
    </div>
</div>

</body>
</html>
