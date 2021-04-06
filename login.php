<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Here </title>

    <!-- title icon  -->
    <link rel="shortcut icon" href="assets/image/p5.png" type="image/x-icon">

    <!-- link with bootstrap 4 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- custom css & js  -->
    <link rel="stylesheet" href="assets/css/center.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="assets/js/customjs.js"></script>
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
    <div class="offer">
        <marquee behavior="scroll" direction="left">
            <<<<<<<<<<< <span>Special Offer Up to 70% discount on Grocery Items</<span> >>>>>>>>>>>>>
        </marquee>
    </div>

    <!-- sidebar -->
    <div class="sidebar">
        <img src="assets/image/p5.png" alt="logo" width="100%" class="p-3">
        <a href="index.php">Home</a>
        <div onmouseover="mouserhover()" onmouseout="mouserhoverout()">
            <a href="products.php">Products</a>
            <ul class="list-unstyled products pl-5" id="products">
                <a href="grocery.php">
                    <li>Grocery</li>
                </a>
                <a href="dress.php">
                    <li>Dress</li>
                </a>
                <a href="electronics.php">
                    <li>Electronics</li>
                </a>
            </ul>
        </div>
        <a class="active" href="login.php">Login</a>
        <a href="registration.php">Registration</a>
    </div>

    <div class="content">
        <div class="login mt-5 mb-5">
            <div class="wrapper fadeInDown">
                <div id="formContent">
                    <!-- Tabs Titles -->

                    <!-- Icon -->
                    <div class="fadeIn first">
                        <h3 class="p-3"
                            style="border: rgba(47, 79, 79, 0.493) solid 2px; border-radius: 10px 10px 0 0;">Login Here
                        </h3>
                        <img src="assets/image/p5.png" width="100px" class="mb-3 mt-3">
                    </div>

                    <!-- Login Form -->
                    <form name="registration" action="U_login_db.php" method="POST">
                        <input type="text" id="login" class="fadeIn second" name="user" placeholder="User ID">
                        <input type="text" id="password" class="fadeIn third" name="password" placeholder="Password">
                        <input type="submit" class="fadeIn fourth" value="Log In">
                    </form>

                </div>
            </div>
        </div>

        <!-- foooter -->
        <div class="myfooter bg-dark text-white mt-5 pt-3 pl-4">
            <div class="row">
                <div class="col-sm-4 text-center">
                    <img src="assets/image/p5.png" alt="" width="80%" height="200px">

                    <p class="text-justify mt-5">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. In deserunt hic animi dolorem eius
                        ad debitis consequatur mollitia? Voluptatem optio molestiae reiciendis, rerum deserunt
                        expedita perspiciatis nostrum assumenda facere quo?
                    </p>
                </div>

                <div class="col-sm-2 main-menu">
                    <h3>Main Menu</h3>
                    <br>
                    <a class="active" href="index.php">Home</a>
                    <hr>
                    <a href="products.php">Products</a>
                    <hr>
                    <a href="login.php">Login</a>
                    <hr>
                    <a href="registration.php">Registration</a>
                </div>

                <div class="col-sm-2 main-menu">
                    <h3>Quick Links</h3>
                    <br>
                    <a class="active" href="index.php">Home</a>
                    <hr>
                    <a href="products.php">Products</a>
                    <hr>
                    <a href="login.php">Login</a>
                    <hr>
                    <a href="registration.php">Registration</a>
                </div>

                <div class="col-sm-4" style="font-size: 15px;">
                    <h3>Contact Us</h3>
                    <br>
                    <span><i class="fas fa-phone-volume logof"></i> 01**********</span><br>
                    <span><i class="fas fa-map-marked-alt logof"></i> Ashulia Model Town, Dhaka-1230</span><br>
                    <span><i class="fas fa-envelope  logof"></i> rayhan15-1557@diu.edu.bd</span>
                    <br><br>
                    <div class="mt-3">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14594.205823943492!2d90.32542259680191!3d23.870056449801954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c224dd9d88f5%3A0x9a9e728879b7600d!2sAshulia%20Model%20Town%20Park!5e0!3m2!1sen!2sbd!4v1617699375717!5m2!1sen!2sbd"
                            width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>

            <hr>
            <div class="text-center pb-3">
                &copy; 172-15-1557. Rayhan Kabir_2021
            </div>
        </div>

    </div>


</body>

</html>