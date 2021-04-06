<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products </title>

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
            <a href="products.php" class="active">Products</a>
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
        <a href="login.php">Login</a>
        <a href="registration.php">Registration</a>
    </div>

    <div class="content">
        <div>

            <?php
            require("config.php");

            $sql = mysqli_connect($host, $user, $pass, $db) or die("Cannot connect server.");

            $query = "select * from products where id = '$id'";
            $query_run = mysqli_query($sql, $query);

            $id = $_GET["id"];
            $name = $_GET["name"];
            $seller = $_GET["seller"];
            $price = $_GET["price"];
            $available = $_GET["available"];
            
            ?>

            <h3 class="text-center mt-3">All Product List</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Seller</th>
                        <th scope="col">Price</th>
                        <th scope="col">Available</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <?php echo "$id[0]"; ?> </td>
                        <td> <?php echo "$name[0]"; ?> </td>
                        <td> <?php echo "$seller[0]"; ?> </td>
                        <td> <?php echo "$price[0]"; ?> </td>
                        <td> <?php echo "$available[0]"; ?> </td>
                    </tr>

                    <tr>
                        <td> <?php echo "$id[1]"; ?> </td>
                        <td> <?php echo "$name[1]"; ?> </td>
                        <td> <?php echo "$seller[1]"; ?> </td>
                        <td> <?php echo "$price[1]"; ?> </td>
                        <td> <?php echo "$available[1]"; ?> </td>
                    </tr>

                    <tr>
                        <td> <?php echo "$id[2]"; ?> </td>
                        <td> <?php echo "$name[2]"; ?> </td>
                        <td> <?php echo "$seller[2]"; ?> </td>
                        <td> <?php echo "$price[2]"; ?> </td>
                        <td> <?php echo "$available[2]"; ?> </td>
                    </tr>

                </tbody>
            </table>
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