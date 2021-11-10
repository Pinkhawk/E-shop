<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
      echo "<script>window.location.href='index.php'
      alert('successfully logged out');
      </script>";
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Shopping</title>
    <link rel="stylesheet" href="properties/css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/fontawesome.min.css"
        integrity="sha512-kJ30H6g4NGhWopgdseRb8wTsyllFUYIx3hiUwmGAkgA9B/JbzUBDQVr2VVlWGde6sdBVOG7oU8AL35ORDuMm8g=="
        crossorigin="anonymous" />
    <style>
        .navbart {
            width: 100%;
            background-color: white;
            height: auto;
            overflow: auto;
            border-bottom: 1px solid #aaa;
        }

        .navbart a {
            float: left;
            padding: 12px;
            color: #555;
            text-decoration: none;
            font-size: 14px;
            text-align: center;
        }




        @media screen and (max-width: 300px) {
            .navbart a {
                float: none;
                display: block;
                width: 100%;
                text-align: left;
                font-size: 10px;
            }
        }

        .dropdown-item {

            font-size: 14px;
        }

        .dropdown-header {
            border-bottom: 1px solid #999;
            font-size: 16px;
            color: black;
        }

        .dropdown-item:hover {
            background-color: #ff523b;
            color: white;
        }
    </style>

</head>

<body>


   <header>
        <!-- Tripple Navbar-->

        <!--navbar top-->
        <div class="navbart">
            <a href="#" style="padding-left: 50px;"> Have you any question? call : +91 0090290390</a>

            <?php  if (isset($_SESSION['username'])) : ?>
    	<span style="magin-bottom:-30px; margin-left:30%">Welcome <strong><?php echo $_SESSION['username']; ?></strong></span> &nbsp; <a href="index.php?logout='1'" style="color: red; float:right;border-left: 1px solid #aaa;">logout</a> 
    <?php endif ?>
            <span style="float: right; padding-right: 30px;">
           
                <a href="register.php" style="border-left: 1px solid #aaa;"><i class="fas fa-user" style="color: #aaa;"></i>
                    Account</a>
                <a href="mycart.php" style="border-left: 1px solid #aaa;"><i class="fas fa-cart-plus"
                        style="color: #aaa;"></i>&nbsp;cart</a></span>
        </div>
        <!---->

        <!--middile-->
        <nav class="navbar navbar-expand-lg navbar-light "
            style="background-color:#fff; border-bottom: 1px solid #999;">

            <a class="navbar-brand" href="#" style="padding-left: 150px;"><img src="properties/images/logo.png"
                    style="height: 50px; width: 70px;"><h6 style="color:#ff523b">E-Shop</h6></a>

            <div class="input-group justify-content-center">
                <div class="row no-gutters ">
                    <div class="col-7">
                        <input type="search" class="form-control" placeholder="search">
                    </div>
                    <div class="col-3 col-md-3" style="padding-left: 3px;">
                        <select class="form-control input-lg" name="category">
                            <option value="all">All Categories</option>
                            <optgroup label="Mens">
                                <option value="shirts">Shirts</option>
                                <option value="coats-jackets">Coats & Jackets</option>
                                <option value="underwear">Underwear</option>
                                <option value="sunglasses">Sunglasses</option>
                                <option value="socks">Socks</option>
                                <option value="belts">Belts</option>
                            </optgroup>
                            <optgroup label="Womens">
                                <option value="bresses">Bresses</option>
                                <option value="t-shirts">T-shirts</option>
                                <option value="skirts">Skirts</option>
                                <option value="jeans">Jeans</option>
                                <option value="pullover">Pullover</option>
                            </optgroup>
                            <option value="kids">Kids</option>
                            <option value="fashion">Fashion</option>
                            <optgroup label="Sportwear">
                                <option value="shoes">Shoes</option>
                                <option value="bags">Bags</option>
                                <option value="pants">Pants</option>
                                <option value="swimwear">Swimwear</option>
                                <option value="bicycles">Bicycles</option>
                            </optgroup>
                            <option value="bags">Bags</option>
                            <option value="shoes">Shoes</option>
                            <option value="hoseholds">HoseHolds</option>
                            <optgroup label="Technology">
                                <option value="tv">TV</option>
                                <option value="camera">Camera</option>
                                <option value="speakers">Speakers</option>
                                <option value="mobile">Mobile</option>
                                <option value="pc">PC</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-2" style="padding-left: 5px;">
                        <a href="product.php"><button class="btn btn-primary btn-block btn-md"
                            style="background-color:#ff523b; color: white; border-color: white;">Search</button></a>

                    </div>

                </div>



            </div>


        </nav>
        <!--middle-->

        <!--last navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link " href="index.php" style="color: #ff523b;">Home <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="about.php" style="padding-left: 30px;">About</a>
                    </li>
                    <li class="nav-item  ">
                        <a class="nav-link " href="services.php" style="padding-left: 30px;">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle " href="product.html" id="servicesDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            style="padding-left: 20px;">Products</a>
                        <!-- your mega menu starts here! -->
                        <div class="dropdown-menu " aria-labelledby="servicesDropdown" style="margin-left:5%;">



                            <!-- finally, using flex to create your layout -->
                            <div class="d-md-flex align-items-start justify-content-start">

                                <div>
                                    <div class="dropdown-header">Men</div>

                                    <a class="dropdown-item" href="product.php">Clothing</a>
                                    <a class="dropdown-item" href="product.php">Sports Wear</a>
                                    <a class="dropdown-item" href="product.php">Suit Blazer</a>
                                    <a class="dropdown-item" href="product.php">Mens Grooming</a>
                                    <a class="dropdown-item" href="product.php">Ethic Wears</a>
                                    <a class="dropdown-item" href="product.php">Accessories</a>


                                </div>

                                <div>
                                    <div class="dropdown-header">Women</div>
                                    <div style="background-color: #f9f9f9;">
                                        <a class="dropdown-item" href="product.php">Clothing</a>
                                        <a class="dropdown-item" href="product.php">Party Dress</a>
                                        <a class="dropdown-item" href="product.php">Jwelleries</a>
                                        <a class="dropdown-item" href="product.php">Beauty</a>
                                        <a class="dropdown-item" href="product.php">Ethic Wears</a>
                                        <a class="dropdown-item" href="product.php">Accessories</a>
                                        <a class="dropdown-item" href="product.php">Featured</a>

                                    </div>
                                </div>

                                <div>
                                    <div class="dropdown-header">Baby Kid</div>
                                    <a class="dropdown-item" href="product.php">Clothing</a>
                                    <a class="dropdown-item" href="product.php">Toys</a>
                                    <a class="dropdown-item" href="product.php">Baby care</a>
                                    <a class="dropdown-item" href="product.php">Kids Winter wear</a>


                                </div>

                                <div>
                                    <div class="dropdown-header">Electronics</div>
                                    <div style="background-color: #f9f9f9;">
                                        <a class="dropdown-item" href="product.php">Mobile</a>
                                        <a class="dropdown-item" href="product.php">Mobile Acessories</a>
                                        <a class="dropdown-item" href="product.php">Laptops</a>
                                        <a class="dropdown-item" href="product.php">Camera</a>
                                        <a class="dropdown-item" href="product.php">Speaker</a>
                                        <a class="dropdown-item" href="product.php">Camera components</a>
                                        <a class="dropdown-item" href="product.php">Computers Desktop</a>
                                    </div>
                                </div>
                                <div>
                                    <div class="dropdown-header">Home & Furniture</div>
                                    <a class="dropdown-item" href="product.php">Kitchen Cookware</a>
                                    <a class="dropdown-item" href="product.php">Tableware & Dinnerware</a>
                                    <a class="dropdown-item" href="product.php">Kitchen Storage </a>
                                    <a class="dropdown-item" href="product.php">Bedroom Furniture</a>
                                    <a class="dropdown-item" href="product.php">Livingroom Furniture</a>
                                    <a class="dropdown-item" href="product.php">Home Lighting </a>
                                </div>

                                <div>

                                    <div class="dropdown-header">Sports & Books</div>
                                    <div style="background-color: #f9f9f9;">

                                        <a class="dropdown-item" href="product.php">Sports</a>
                                        <a class="dropdown-item" href="product.php">Exercise Fitness</a>
                                        <a class="dropdown-item" href="product.php">Food Essential</a>
                                        <a class="dropdown-item" href="product.php">Health and Nutrition</a>
                                        <a class="dropdown-item" href="product.php">Books</a>
                                        <a class="dropdown-item" href="product.php">Stationary </a>
                                        <a class="dropdown-item" href="product.php">Gaming </a>

                                    </div>
                                </div>


                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  " href="contact.php" style="padding-left: 30px;">contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--last navbar-->
    </header>


    <div class="heade">

        <div class="row1">
            <div class="col-6">
                <img src="properties/images/5a364c0cbc63f7.3528559715135078527717.png" class="img-fluid">

            </div>
            <div class="col-6 float-left">
                <h1>Give Your Shopping<br> A New Way</h1>
                <p>Success isn't always about greatness. It's about consistency. Consistent<br> hard work gains
                    success.Greatness will come.</p>
                <a href="product.php" class="button" style="text-decoration: none;">Shop Now &#8594; </a>

            </div>

        </div>

    </div>

    <!--Featured Products-->
    <section>
        <div class="container">
            <h3 class="h3">Featured Products </h3>
            <hr
                style="margin-left: 45%; width: 100px; background-color: #ff523b; border-width: 2px; margin-top: -15px; margin-bottom: 40px;">
            <div class="row" style="margin-left: 60px; margin-right: 60px;">
                <div class="col-md-3 col-sm-6">
                <form action="managecart.php" method="POST">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="#">
                                <img class="pic-1"
                                    src="images/pic1.jpg">
                                <img class="pic-2"
                                    src="images/pic1.jpg">
                            </a>
                            <ul class="social">
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                           <a><button type="submit" class="add-to-cart border-0" name="Add_to_cart" class="btn btn-info">Add to cart</button></a>
                                <input type="hidden" name="Item_Name" value="Designers Top">
                                    <input type="hidden" name="Price" value=" 325">
                            
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Designers Top</a></h3>
                            <span class="price">Rs. 325</span>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="col-md-3 col-sm-6">
                <form action="managecart.php" method="POST">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="#">
                                <img class="pic-1"
                                    src="images/pic2.jpg">
                                <img class="pic-2"
                                    src="images/pic2.jpg">
                            </a>
                            <ul class="social">
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                           <a><button type="submit" class="add-to-cart border-0" name="Add_to_cart" class="btn btn-info">Add to cart</button></a>
                                <input type="hidden" name="Item_Name" value="T-shirt">
                                    <input type="hidden" name="Price" value="  400">
                            
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">T-shirt</a></h3>
                            <span class="price">Rs. 400</span>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="col-md-3 col-sm-6">
                <form action="managecart.php" method="POST">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="#">
                                <img class="pic-1"
                                    src="images/pic3.jpg">
                                <img class="pic-2"
                                    src="images/pic3.jpg">
                            </a>
                            <ul class="social">
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                           <a><button type="submit" class="add-to-cart border-0" name="Add_to_cart" class="btn btn-info">Add to cart</button></a>
                                <input type="hidden" name="Item_Name" value=" Top">
                                    <input type="hidden" name="Price" value="200">
                            
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#"> Top</a></h3>
                            <span class="price">Rs. 200</span>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="col-md-3 col-sm-6">
                <form action="managecart.php" method="POST">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="#">
                                <img class="pic-1"
                                    src="images/pic4.jpg">
                                <img class="pic-2"
                                    src="images/pic4.jpg">
                            </a>
                            <ul class="social">
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                             <a><button type="submit" class="add-to-cart border-0" name="Add_to_cart" class="btn btn-info">Add to cart</button></a>
                                <input type="hidden" name="Item_Name" value=" Jeans">
                                    <input type="hidden" name="Price" value="400">
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Jeans</a></h3>
                            <span class="price">Rs. 400</span>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>


    </section>
    <!--Featured Products-->
    <!--all products-->
    <section>


        <div class="container">
            <div class="d-flex">
                <h3 class="">All Products </h3>

                <!-- Example single danger button -->
                <div class="btn-group" style="padding-left: 70%;">
                    <button type="button" class="btn btn-sm btn-danger dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Default Sort
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Sort By Price </a>
                        <a class="dropdown-item" href="#">Sort By Name</a>
                        <a class="dropdown-item" href="#">Sort By Brand</a>

                    </div>
                </div>

            </div>

            <div class="row" style="margin-left: 60px; margin-right: 60px; padding-top:20px;">
                <div class="col-md-3 col-sm-6">
                <form action="managecart.php" method="POST">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="#">
                                <img class="pic-1"
                                    src="images/pic5.jpg">
                                <img class="pic-2"
                                    src="images/pic5.jpg">
                            </a>
                            <ul class="social">
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                           <a><button type="submit" class="add-to-cart border-0" name="Add_to_cart" class="btn btn-info">Add to cart</button></a>
                                <input type="hidden" name="Item_Name" value="Shoe">
                                    <input type="hidden" name="Price" value=" 675">
                            
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Shoe</a></h3>
                            <span class="price">Rs. 675</span>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="col-md-3 col-sm-6">
                <form action="managecart.php" method="POST">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="#">
                                <img class="pic-1"
                                    src="images/pic6.jpg" style="height:280px">
                                <img class="pic-2"
                                    src="images/pic6.jpg" style="height:280px">
                            </a>
                            <ul class="social">
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                           <a><button type="submit" class="add-to-cart border-0" name="Add_to_cart" class="btn btn-info">Add to cart</button></a>
                                <input type="hidden" name="Item_Name" value="College Bag">
                                    <input type="hidden" name="Price" value="  500">
                            
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">College bag</a></h3>
                            <span class="price">Rs. 500</span>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="col-md-3 col-sm-6">
                <form action="managecart.php" method="POST">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="#">
                                <img class="pic-1"
                                    src="images/pic7.jpg" style="height:280px">
                                <img class="pic-2"
                                    src="images/pic7.jpg" style="height:280px">
                            </a>
                            <ul class="social">
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                           <a><button type="submit" class="add-to-cart border-0" name="Add_to_cart" class="btn btn-info">Add to cart</button></a>
                                <input type="hidden" name="Item_Name" value=" Shoes">
                                    <input type="hidden" name="Price" value="2000">
                            
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Shoes</a></h3>
                            <span class="price">Rs. 2000</span>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="col-md-3 col-sm-6">
                <form action="managecart.php" method="POST">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="#">
                                <img class="pic-1"
                                    src="images/pic8.jpg" style="height:280px">
                                <img class="pic-2"
                                    src="images/pic8.jpg" style="height:280px">
                            </a>
                            <ul class="social">
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                             <a><button type="submit" class="add-to-cart border-0" name="Add_to_cart" class="btn btn-info">Add to cart</button></a>
                                <input type="hidden" name="Item_Name" value=" Goggles">
                                    <input type="hidden" name="Price" value="90">
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Goggles</a></h3>
                            <span class="price">Rs. 90</span>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>



        </div>

        <div class="container" style="margin-top: -100px;">

        <div class="row" style="margin-left: 60px; margin-right: 60px; padding-top:20px;">
                <div class="col-md-3 col-sm-6">
                <form action="managecart.php" method="POST">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="#">
                                <img class="pic-1"
                                    src="images/pic9.jpg" style="height:280px">
                                <img class="pic-2"
                                    src="images/pic9.jpg" style="height:280px">
                            </a>
                            <ul class="social">
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                           <a><button type="submit" class="add-to-cart border-0" name="Add_to_cart" class="btn btn-info">Add to cart</button></a>
                                <input type="hidden" name="Item_Name" value="Formal watch">
                                    <input type="hidden" name="Price" value=" 235">
                            
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Formal Watch</a></h3>
                            <span class="price">Rs. 235</span>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="col-md-3 col-sm-6">
                <form action="managecart.php" method="POST">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="#">
                                <img class="pic-1"
                                    src="images/pic10.jpg" style="height:280px">
                                <img class="pic-2"
                                    src="images/pic10.jpg" style="height:280px">
                            </a>
                            <ul class="social">
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                           <a><button type="submit" class="add-to-cart border-0" name="Add_to_cart" class="btn btn-info">Add to cart</button></a>
                                <input type="hidden" name="Item_Name" value="Neckles">
                                    <input type="hidden" name="Price" value="  530">
                            
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Neckles</a></h3>
                            <span class="price">Rs. 530</span>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="col-md-3 col-sm-6">
                <form action="managecart.php" method="POST">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="#">
                                <img class="pic-1"
                                    src="images/pic11.jpg" style="height:280px">
                                <img class="pic-2"
                                    src="images/pic11.jpg" style="height:280px">
                            </a>
                            <ul class="social">
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                           <a><button type="submit" class="add-to-cart border-0" name="Add_to_cart" class="btn btn-info">Add to cart</button></a>
                                <input type="hidden" name="Item_Name" value=" Top">
                                    <input type="hidden" name="Price" value="200">
                            
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#"> Laptop Combo &nbsp;Hp and samsung </a></h3>
                            <span class="price">Rs. 125000</span>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="col-md-3 col-sm-6">
                <form action="managecart.php" method="POST">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="#">
                                <img class="pic-1"
                                    src="images/pic12.jpg" style="height:280px">
                                <img class="pic-2"
                                    src="images/pic12.jpg" style="height:280px">
                            </a>
                            <ul class="social">
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                             <a><button type="submit" class="add-to-cart border-0" name="Add_to_cart" class="btn btn-info">Add to cart</button></a>
                                <input type="hidden" name="Item_Name" value=" DSLR Camera">
                                    <input type="hidden" name="Price" value="40000">
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">DSLR</a></h3>
                            <span class="price">Rs. 40000</span>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
           <span class="float-right"> <a href="product.php" class="btn btn-primary ml-auto" style="align-self: flex-end; background-color: #ff523b; color: white; border-style: none;">View All</a> </span>

        </div>

        </div>




    </section>

    <!-- All Products -->

    <!-- Promote business-->
    <div class="container-fluid promotion">



        <div class="container">
            <div class="row1">
                <div class="col-6 c6">
                    <h1>Promote Your Business Online</h1>
                    <p>Doesn't Matter how small or large your business want to promote <br>Then Come here Simply Promote
                        your business online.</p>
                    <a href="promote.php" class="button" style="text-decoration: none;">Promote &#8594; </a>


                </div>
                <div class="col-6 c6 float-left">
                    <img src="properties/images/presentation-1454403_640.png" style="height: 400px; width: 400px;">

                </div>
            </div>
        </div>


    </div>

    <!-- Promote business-->

    <section>
        <!--testimonial-->
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: 50px;">
            <!-- Carousel indicators -->
            <!-- <ol class="carousel-indicators" style="color: #ff523b;">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol> -->
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">
                <div class="item carousel-item active">
                    <div class="img-box"><img
                            src="images/team1.jpeg"
                            alt=""></div>
                    <p class="testimonial">A Best place to do shop anything till now it is best.
                    </p>
                    <p class="overview"><b>Shyam Mohan</b> Verified Customer </p>
                    <div class="star-rating"> </div>
                </div>
                <div class="item carousel-item active">
                    <div class="img-box"><img
                            src="images/banner.png"
                            alt=""></div>
                    <p class="testimonial">A Best place to get authentic products.
                    </p>
                    <p class="overview"><b> Shiv Shankar</b> Verified Customer </p>
                    <div class="star-rating"> </div>
                </div>
                <div class="item carousel-item">
                    <div class="img-box"><img
                            src="images/team2.jpeg"
                            alt=""></div>
                    <p class="testimonial">We just got the very simple things from here such a nice design.
                    </p>
                    <p class="overview"><b>Ankur kushwaha</b> Verified Customer </p>
                    <div class="star-rating"> </div>
                </div>
                <div class="item carousel-item">
                    <div class="img-box"><img
                            src="images/team3.jpeg"
                            alt=""></div>
                    <p class="testimonial">All the resources uses here very relevant to things.
                    </p>
                    <p class="overview"><b>kapil Mishra</b> Verified Customer </p>
                    <div class="star-rating"> </div>
                </div>
            </div> <!-- Carousel controls --> <a class="carousel-control left carousel-control-prev" href="#myCarousel"
                data-slide="prev"> <i class="fa fa-angle-left"></i> </a> <a
                class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next"> <i
                    class="fa fa-angle-right"></i> </a>
        </div>

        <!--Testimonial-->

    </section>
    <footer class="mainfooter" role="contentinfo">
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <!--Column1-->
                        <div class="footer-pad">
                            <h4>Contacts</h4>
                            <ul class="list-unstyled">
                                <li><a href="#"></a></li>
                                <li><a href="#"><i class="fas fa-phone-alt"></i>&nbsp;+91 0909400493</a></li>
                                <li><a href="#"><i class="far fa-envelope"></i>&nbsp; Eshop@gmail.com</a></li>
                                <li><a href="#"><i class="far fa-map"></i>&nbsp; Industrial Area Naini Prayagraj.</a>
                                </li>
                                <li><a href="#"><i class="far fa-clock"></i>&nbsp; 9:00 Am to 4:00 Pm </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!--Column1-->
                        <div class="footer-pad">
                            <h4>Products</h4>
                            <ul class="list-unstyled" style="list-style-type:inherit; padding-left: 20px;">
                                <li><a href="product.php">Mens</a></li>
                                <li><a href="product.php">Formal</a></li>
                                <li><a href="product.php">Womens</a></li>
                                <li><a href="product.php">Kids</a></li>
                                <li><a href="product.php">Woolen</a></li>
                                <li><a href="product.php">Acessories</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!--Column1-->
                        <div class="footer-pad">
                            <h4>Quick links</h4>
                            <ul class="list-unstyled">
                                <li><a href="product.php">Collection</a></li>
                                <li><a href="services.php">Services</a></li>
                                <li><a href="product.php">Products</a></li>
                                <li><a href="contact.php">Contacts</a></li>
                                <li><a href="contact.php">Help/FAQ</a></li>
                                <li>
                                    <a href="#"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h4>Follow Us</h4>
                        <ul class="social-network social-circle">
                            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fab fa-linkedin"></i></a>
                            </li>
                            <li><a href="#" class="icoInstagram" title="Linkedin"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li><a href="#" class="icoTwitter" title="Linkedin"><i class="fab fa-twitter"></i></a></li>

                        </ul>


                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 copy">
                        <p class="text-center">&copy; Copyright 2021 - E-shop All rights reserved.</p>
                    </div>
                </div>


            </div>
        </div>
    </footer>





    <script src="properties/js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>