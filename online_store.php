<?php
$title = "store";
include('components/head.php');
include('components/header.php');
?>
<main>
    <div class="container my-5">
        <h1 class="text-center mb-4">Online Store</h1>
        <div class="row g-4">
            <!-- Product 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <img src="images/apples.jpg" class="card-img-top" alt="Apples">
                    <div class="card-body">
                        <h5 class="card-title">Fresh Apples (1 lb)</h5>
                        <p class="card-text">$3.99</p>
                        <p class="card-text">Fresh, crisp apples from our local farmers.</p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <img src="images/tomatoes.jpg" class="card-img-top" alt="tomatoes">
                    <div class="card-body">
                        <h5 class="card-title">tomatoes(1 box)</h5>
                        <p class="card-text">$4.99</p>
                        <p class="card-text">Freshly baked bread from our local bakery.</p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <img src="images/greens.jpg" class="card-img-top" alt="greens">
                    <div class="card-body">
                        <h5 class="card-title">greens (1 pack)</h5>
                        <p class="card-text">$7.99</p>
                        <p class="card-text">Handcrafted cheese from our local dairy farm.</p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-primary">View All Products</a>
        </div>
    </div>
    <div class="container my-5">
        <h1 class="text-center mb-4">Product Details</h1>
        <div class="row">
            <div class="col-lg-6">
                <img src="images/apples.jpg" alt="apples" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <h2>Product Name: Fresh Apples (1 lb)</h2>
                <p>Price: $3.99</p>
                <p>Quantity:
                    <select>
                        <option value="1">1 lb</option>
                        <option value="2">2 lbs</option>
                        <option value="3">3 lbs</option>
                    </select>
                </p>
                <p>Description: Fresh, crisp apples from our local farmers. Perfect for snacking, baking, or making a
                    delicious
                    apple pie.</p>
                <button class="btn btn-primary">Add to Cart</button>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-12">
                <h2>Product Specifications:</h2>
                <ul>
                    <li>Weight: 1 lb</li>
                    <li>Origin: Local farmers</li>
                    <li>Seasonality: Available year-round</li>
                    <li>Storage: Store in a cool, dry place</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <h1 class="text-center mb-4">Shopping Cart</h1>
        <div class="row">
            <div class="col-lg-8">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Fresh Apples (1 lb)</td>
                            <td>
                                <input type="number" value="1" min="1">
                            </td>
                            <td>$3.99</td>
                            <td>$3.99</td>
                            <td>
                                <button class="btn btn-danger">Remove</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Homemade Bread (1 loaf)</td>
                            <td>
                                <input type="number" value="1" min="1">
                            </td>
                            <td>$4.99</td>
                            <td>$4.99</td>
                            <td>
                                <button class="btn btn-danger">Remove</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Order Summary</h5>
                        <p class="card-text">Subtotal: $8.98</p>
                        <p class="card-text">Tax (8%): $0.72</p>
                        <p class="card-text">Total: $9.70</p>
                        <button class="btn btn-primary">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include('components/footer.php');
?>