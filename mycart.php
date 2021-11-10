<?php  
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
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
                <a href="mycart.php" style="border-left: 1px solid #aaa; text-decoration:#ff523b"><i class="fas fa-cart-plus"
                        style="color: #ff523b;"></i>&nbsp;<span style="color:#ff523b">cart</span></a></span>
        </div>
        <!---->

        <!--middile-->
        <nav class="navbar navbar-expand-lg navbar-light "
            style="background-color:#fff; border-bottom: 1px solid #999;">

            <a class="navbar-brand" href="#" style="padding-left: 150px;"><img src="properties/images/logo.png"
                    style="height: 50px; width: 70px;"></a>

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
                        <button class="btn btn-primary btn-block btn-md"
                            style="background-color:#ff523b; color: white; border-color: white;">Search</button>

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
                    <li class="nav-item ">
                        <a class="nav-link " href="index.php" >Home <span
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
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>My cart</h1>
            </div>

    <div class="col-lg-9">
            <table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">Serial no.</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item price</th>
      <th scope="col">Quantity</th>
      <th></th>
    </tr>
  </thead>
  <tbody class="text-center">
     <?php

     $total=0;
     if(isset($_SESSION['cart'])){
         foreach($_SESSION['cart'] as $key => $value)  {
             $sr = $key+1;
                $total=$total+$value['Price'];
                echo"
                    <tr>
                <td>$sr</td>
                <td>$value[Item_Name]</td>
                <td>$value[Price]</td>
                <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10'></td>
                <td>
                <form method='POST' action='managecart.php' >  
                <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>Remove</button>
                 <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                </form>
                </td>
                    </tr>
        
      
      ";
     }
    }
     ?>
    
   
   
  </tbody>
</table>
         </div>

         <div class="col-lg-3">
             <div class="border rounded bg-light p-4">
                <h4>Total:</h4>
                <h5 class="text-right"><?php echo $total ?></h5><br>
                <form>
                <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
   Cash on Delivery   
</label>
</div>
                        <br>
                      

                <button class="btn btn-primary btn-block">Make Payment</button>
                </form>

             </div>
         </div>
     </div>
 </div>  

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