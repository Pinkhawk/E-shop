<!DOCTYPE html>
<html>
    <head>
        <title>service page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="properties/css/index.css">
        <link rel="stylesheet" href="properties/css/contact.css">
    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    
        <link 
        href ="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"  rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />        
       
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
          
          .dropdown-item{
          
          font-size: 14px;
          }
          .dropdown-header{
          border-bottom: 1px solid #999;
          font-size: 16px;
          color: black;
          }
          .dropdown-item:hover{
          background-color: #ff523b;
          color: white;
          }
          
          </style>
        <head>
            <body>
              <header>
                <!-- Tripple Navbar-->
        
              <!--navbar top-->  <div class="navbart">
                    <a  href="#" style="padding-left: 50px;"> Have you any question? call : +91 0090290390</a> 
                    <span style="float: right; padding-right: 30px;">
                         
                    <a href="register.php" style="border-left: 1px solid #aaa;"><i class="fas fa-user" style="color: #aaa;"></i>  Account</a> 
                    <a href="mycart.php" style="border-left: 1px solid #aaa;"><i class="fas fa-cart-plus" style="color: #aaa;"></i>&nbsp;cart</a></span>
                  </div><!---->
        
        <!--middile-->
        <nav class="navbar navbar-expand-lg navbar-light " style="background-color:#fff; border-bottom: 1px solid #999;">
           
            <a class="navbar-brand" href="index.html" style="padding-left: 150px;"><img src="properties/images/logo.png" style="height: 50px; width: 70px;"></a>
           
           <div class="input-group justify-content-center" >
            <div class="row no-gutters "  >
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
                <button class="btn btn-primary btn-block btn-md" style="background-color:#ff523b; color: white; border-color: white;">Search</button>
        
            </div>
          
        </div>
        
        
        
           </div>
        
        
          </nav>
        <!--middle-->
        
        <!--last navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light " >
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item ">
              <a class="nav-link " href="index.php">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="about.php" style="padding-left: 30px;">About</a>
              </li>
              <li class="nav-item  ">
                <a class="nav-link " href="services.php" style="padding-left: 30px; color: #ff523b;">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link dropdown-toggle " href="product.html" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-left: 20px;">Products</a>
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
        
              <div >   
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
               <a class="dropdown-item" href="product.php">Computers Desktop</a></div>
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
                <a class="nav-link  " href="contact.php" style="padding-left: 30px; ">contact</a>
              </li>
            </ul>
          </div>
        </nav>
        <!--last navbar-->
        </header>
                <div class="container-fluid bga" style="padding-top: 0 !important; height: 700px;">
                    <div class="services" style=" padding-top: 100px;">
                        <h1>Our Services</h1>
                    </div>
                    <div class="row" style="padding-left: 2%;padding-right: 2%;padding-top: 100px;">
                    <div class="col-md-3 text-center">

                        <div class="icon">
                            <i class="fas fa-truck"></i>
                        </div>
                        <h3>Home-Delivery</h3>
                        <p style="color: white;">We operate India’s largest express parcel transportation network with fully integrated and self-owned pickup, mid-mile and delivery operations that successfully reach 20 households every second across India.</p>
                    </div>
                    <div class="col-md-3 text-center">

                        <div class="icon">
                            <i class="fas fa-building" ></i>
                        </div>
                        <h3>Business-Promotion</h3>
                        <p style="color: white;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                    <div class="col-md-3 text-center">

                        <div class="icon">
                            <i class="fas fa-ad"></i>
                        </div>
                        <h3>Ad Management</h3>
                        <p style="color: white;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book..</p>
                    </div>
                    <div class="col-md-3 text-center">

                        <div class="icon">
                            <i class="fab fa-facebook-square"></i>
                        </div>
                        <h3>Facebook Ad management</h3>
                        <p style="color: white;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>

                    </div>
                </div>

      
      
      
      
      
      <div class="bg-light">
        <div class="container py-5">
          <div class="row h-100 align-items-center py-5">
            <div class="col-lg-6">
              <h1 style="color:black;">Promote Your Business</h1>
              <p class="lead  mb-0" style="color: black;">Promote your organization’s updates to targeted audiences on desktop, mobile, and tablet. Drive awareness and leads in the world's most viewed professional news feed. 
              </p>
              <a href="promote.php" class="button" style="text-decoration: none;">Promote &#8594; </a>

              
              </p>
            </div>
            <div class="col-lg-6 d-none d-lg-block"><img src="images/lms-ads-paid-pos-1-final.png.original.png" alt="" class="img-fluid"></div>
          </div>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-5 px-5 mx-auto"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834136/img-2_vdgqgn.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
        <div class="col-lg-6"><i class="fa fa-quote-left fa-2x mb-3 text-primary"></i>
          <h2 class="font-weight-light"style="color:black">Shop</h2>
          <p class="font-italic text-muted mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          <a href="product.php" class="button" style="text-decoration: none;">Shop Now &#8594; </a>
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
                      <li><a href="#"><i class="far fa-map"></i>&nbsp; Industrial Area Naini Prayagraj.</a></li>
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
                       <li><a href="#" class="icoFacebook" title="Facebook"><i class="fab fa-facebook"></i></a></li>
                       <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                       <li><a href="#" class="icoInstagram" title="Linkedin"><i class="fab fa-instagram"></i></a></li>
                       <li><a href="#" class="icoTwitter" title="Linkedin"><i class="fab fa-twitter"></i></a></li>
        
                      </ul>	
                      
                      
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12 copy">
                      <p class="text-center">&copy; Copyright 2021 - E-shop  All rights reserved.</p>
                  </div>
              </div>
          
          
            </div>
            </div>
          </footer>
          <script src="properties/js/index.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            </body>
</html>