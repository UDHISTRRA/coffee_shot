<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Coffee Shop</title>
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

        #background-paper {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        #background-paper img {
            height: 500px;
            width: 500px;
            position: relative;
            animation: slideIn 2s ease-out forwards;
        }

        @keyframes slideIn {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(0);
            }
        }

        #content {
            margin-top: 60px;
        }

        h2 {
            font-size: 72px;
            font-weight: 1000;
            margin-bottom: 20px;
            color: transparent;
            background-image: linear-gradient(to right, #715a52, #34231f, #0e0807);
            background-clip: text;
            -webkit-background-clip: text;
            letter-spacing: 5px;
            margin-left: 30px;
        }

        h4 {
            font-size: 24px;
            color: #6D4C41;
            font-weight: 100;
            margin-bottom: 20px;
            margin-left: 30px;
        }

        p {
            color: #5D4037;
            line-height: 1.6;
            margin-bottom: 30px;
            margin-left: 30px;
        }

        .dropdown-menu {
            background-color: #1f1714;
            border: none;
        }

        .dropdown-item {
            color: white;
            transition: background-color 0.3s ease;
        }

        .dropdown-item:hover {
            background-color: #faf4f2;
        }

        #product, #login2 {
            background-color: #17110f;
            border: 1px solid #fdfcfc;
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
            border: none;
            font-weight: bold;
            margin-left: 30px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        #product:hover, #login2:hover {
            background-color: #F5EFE6;
            color: #17110f;
        }

        .slant-text {
            text-align: center;
            font-size: 24px;
            letter-spacing: 10px;
            color: #63463b;
            text-transform: uppercase;
            font-weight: 600;
        }

        .footer {
            text-align: center;
            color: rgb(17, 7, 0);
            margin-top: 50px;
        }

        /* Media Queries */
        @media only screen and (max-width: 768px) {
            h2 {
                font-size: 48px;
                text-align: center;
            }

            #background-paper img {
                height: 300px;
                width: 300px;
            }

            #content {
                text-align: center;
            }

            .footer {
                margin-bottom: 20px;
            }
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
                    <li><a href="#">Home</a></li>
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

        <!-- Front poster -->
        <div class="row mt-5">
            <div class="col-md-7" id="content">
                <h2>COFFEE SHOT</h2>
                <h4>Freshly brewed just for you!</h4>
                <p>Experience the rich aroma and robust flavor of our premium coffee, sourced from the finest beans around the world. Each cup is a testament to our dedication to quality and craftsmanship. Whether you're starting your day or enjoying a peaceful moment, our coffee is the perfect companion.</p>
                
                <!-- Product dropdown button -->
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="product" data-bs-toggle="dropdown" aria-expanded="false">
                        Explore our products
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="product">
                        <li><a class="dropdown-item" href="products.php">Eateries</a></li>
                        <li><a class="dropdown-item" href="#">Equipments</a></li>
                        <li><a class="dropdown-item" href="#">Merchandise</a></li>
                    </ul>
                    <a href="login.php"><button id="login2">Login / Sign up</button></a>
                </div>
            </div>
            <div class="col-md-5" id="background-paper">
                <img src="resources/brown-cup.png" alt="Coffee Cup">
            </div>
        </div>

        <!-- Slanting bar -->
        <div class="row mt-5">
            <div class="col-md-12">
                <marquee direction="right" scrollamount="10">
                    <p class="slant-text">coffee coffee coffee coffee coffee coffee coffee coffee coffee coffee coffee coffee coffee coffee coffee coffee</p>
                </marquee>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>&copy; 2024 Coffee Shot. All Rights Reserved.</p>
        </div>
    </div>
</body>
</html>
