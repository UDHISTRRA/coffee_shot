<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Our Products</title>
    <style>
        /* Font from Google Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #F5EFE6;
            color: #3E2723;
            margin: 0;
            position: relative;
        }

        #nav-bar {
            height: 60px;
            background-color: #191210;
            color: white;
            padding: 10px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        ul {
            list-style: none;
            margin-top: 10px;
            padding: 0;
        }

        li {
            display: inline;
            padding: 0px 20px;
            color: white;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        li a {
            text-decoration: none;
            color: inherit;
        }

        li:hover {
            color: #D7CCC8;
        }

        #icon {
            display: flex;
            align-items: center;
            position: relative;
            cursor: pointer;
        }

        #search {
            height: 30px;
            width: 30px;
            cursor: pointer;
        }

        #bag {
            height: 30px;
            width: 30px;
            margin-left: 60px;
        }

        #login1 {
            border-radius: 30px;
            background-color: #191210;
            color: white;
            padding: 10px 20px;
            border: none;
            transition: background-color 0.3s ease;
            display: inline-block;
            text-align: center;
        }

        #login1:hover {
            background-color: #fafaf9;
            color: black;
        }
        h1 {
            font-size: 32px;
            text-align: center;
            margin-top: 20px;
            color: #3E2723;
        }

        .product-list {
            margin-top: 20px;
        }
        .product-card {
            position: relative;
            cursor: pointer;
            width: 100%;
            height: 300px;
            background-color: #333;
            color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        .product-card:hover {
            transform: scale(1.05);
        }
        .product-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
            margin: 0;
        }
        .product-card h6 {
            text-align: center;
            margin-top: 10px;
            font-size: 16px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #fff; /* Default color */
            transition: color 0.3s ease; /* Smooth color transition */
        }
        .product-card:hover h6 {
            color: #F5EFE6; /* Background color */
        }
        .product-card .info {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.8);
            color: #fff;
            padding: 20px;
            text-align: center;
            height: 0; /* Start with height 0 to hide */
            overflow: hidden;
            transform: translateY(100%);
            transition: transform 0.3s ease, height 0.3s ease;
        }
        .product-card:hover .info {
            height: auto; /* Auto height when hovered */
            transform: translateY(0); /* Slide up */
        }
        .product-card .info .description {
            font-size: 14px;
            margin-bottom: 10px;
        }
        .product-card .info .price {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .product-card .info .buy-button {
            background-color: #FF8A65;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        .product-card .info .buy-button:hover {
            background-color: #FF7043;
        }
        .row {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <!-- Complete nav bar -->
        <div class="row" id="nav-bar">
            <!-- Logo -->
            <div class="col-md-1">
                <img src="resources/coffee-beans.png" id="logo" style="height: 40px; width: 40px; margin-left: 20px;">
            </div> 
            <!-- Nav bar -->
            <div class="col-md-7">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products.php">Our Products</a></li>
                    <li>Special offer</li>
                    <li>The Process</li>
                    <li>Packing</li>
                    <li>About</li>
                </ul>
            </div> 
            <!-- Login/signup -->
            <div class="col-md-2">
               <a href="login.php"><button id="login1">Login / Sign up</button></a>
            </div> 
            <!-- Search and cart -->
            <div class="col-md-2" id="icon">
                <img src="resources/magnifying-glass.png" id="search" alt="Search Icon">
                <img src="resources/shopping-bag.png" id="bag" alt="Bag Icon">
            </div>            
        </div>

        <!-- Main Content -->
        <div class="row">
            <div class="col-md-12">
                <h1>ITEMS WE OFFER</h1>                
            </div>
        </div>

        <div class="row product-list">
            <!-- Product 1 -->
            <div class="col-12 col-md-4">
                <div class="product-card">
                    <img src="resources/cookiebox.png" alt="Product 1">
                    <div class="info">
                        <h6>Cookies</h6>
                        <div class="description">Indulge in our homemade cookies, baked to perfection. Each bite is a perfect balance of sweetness and crunch, making them a delightful treat to enjoy with any beverage.</div>
                        <div class="price">₹499</div>
                        <button class="buy-button">Buy Now</button>
                    </div>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="col-12 col-md-4">
                <div class="product-card">
                    <img src="resources/macaroons.png" alt="Product 2">
                    <div class="info">
                        <h6>Macaroons</h6>
                        <div class="description">Delight in our exquisite macaroons, crafted with the finest ingredients. Each bite offers a delicate crunch on the outside with a soft, chewy center. Available in an assortment of flavors, they make the perfect treat for any occasion.</div>
                        <div class="price">₹8999</div>
                        <button class="buy-button">Buy Now</button>
                    </div>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="col-12 col-md-4">
                <div class="product-card">
                    <img src="resources/crossiantfree.png" alt="Product 3">
                    <div class="info">
                        <h6>Crossiant</h6>
                        <div class="description">Buttery and flaky, our freshly baked croissants are the ideal pairing for your coffee. Soft on the inside with a golden crust, they’re the perfect indulgence any time of the day.</div>
                        <div class="price">₹249</div>
                        <button class="buy-button">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row product-list">
            <!-- Product 4 -->
            <div class="col-12 col-md-4">
                <div class="product-card">
                    <img src="resources/donut.png" alt="Product 4">
                    <div class="info">
                        <h6>Donuts</h6>
                        <div class="description">Soft, fluffy, and delicious, our famous donuts are a must-try. Whether you like them glazed or with toppings, these treats are a great companion for your coffee moments.</div>
                        <div class="price">₹199</div>
                        <button class="buy-button">Buy Now</button>
                    </div>
                </div>
            </div>
            <!-- Product 5 -->
            <div class="col-12 col-md-4">
                <div class="product-card">
                    <img src="resources/iced-coffee.png" alt="Product 5">
                    <div class="info">
                        <h6>Iced Coffee</h6>
                        <div class="description">Cool down with our refreshing iced coffee. Brewed from premium coffee beans, it’s the perfect chilled beverage to energize you during warm days.</div>
                        <div class="price">₹349</div>
                        <button class="buy-button">Buy Now</button>
                    </div>
                </div>
            </div>
            <!-- Product 6 -->
            <div class="col-12 col-md-4">
                <div class="product-card">
                    <img src="resources/crolls.png" alt="Product 6">
                    <div class="info">
                        <h6>Cinnamon Rolls</h6>
                        <div class="description">Freshly baked and rich in cinnamon, our rolls are a crowd favorite. Drizzled with icing and served warm, they are the ultimate sweet treat for any occasion.</div>
                        <div class="price">₹399</div>
                        <button class="buy-button">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row product-list">
            <!-- Product 7 -->
            <div class="col-12 col-md-4">
                <div class="product-card">
                    <img src="resources/cbeans.png" alt="Product 7">
                    <div class="info">
                        <h6>Coffee Beans</h6>
                        <div class="description">Our premium coffee beans are sourced from the world’s finest farms. Roasted to perfection, they guarantee a full-bodied and aromatic brew in every cup.</div>
                        <div class="price">₹1299</div>
                        <button class="buy-button">Buy Now</button>
                    </div>
                </div>
            </div>
            <!-- Product 8 -->
            <div class="col-12 col-md-4">
                <div class="product-card">
                    <img src="resources/cake.png" alt="Product 8">
                    <div class="info">
                        <h6>Cake</h6>
                        <div class="description">Moist and delicious, our cakes are baked fresh daily. From classic flavors to seasonal specials, each slice is a sweet indulgence that pairs perfectly with coffee.</div>
                        <div class="price">₹1999</div>
                        <button class="buy-button">Buy Now</button>
                    </div>
                </div>
            </div>
            <!-- Product 9 -->
            <div class="col-12 col-md-4">
                <div class="product-card">
                    <img src="resources/muffin.png" alt="Product 9">
                    <div class="info">
                        <h6>Muffin</h6>
                        <div class="description">Our muffins are soft and bursting with fresh berries. Perfect for breakfast or a mid-day snack, they offer a sweet and satisfying flavor in every bite.</div>
                        <div class="price">₹299</div>
                        <button class="buy-button">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>

