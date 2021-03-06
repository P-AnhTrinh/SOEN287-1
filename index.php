<?php
include('./BackEndPhp/User.php');
$pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';
if ($pageWasRefreshed) {
    $_SESSION['islogged'] = false;
    //unset($_SESSION["isLogged"]);
} else {
}
if (!isset($_SESSION['isLogged'])) {
    $_SESSION['isLogged'] = false;
}

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./css/index.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Home</title>
</head>

<body>

    <div class="container-fluid">

        <!-- This is a header division -->
        <div class="row">

            <div class="header col-12">
                <div class="logo">
                    Grocery
                </div>
                <div class="cart_and_accont">
                    <a href="shoppingCart.php" class="cart">
                        <img src="./icons/shopping-cart.svg" height="18px" width="18px">
                        <span>Cart</span>
                    </a>
                    <a href="LoginPage.html" class="Account">
                        <img src="./icons/account.png" height="18px" width="18px">
                        <span>Account</span>
                    </a>
                </div>
            </div>

        </div>

        <!-- This is the division for navagation bar -->
        <div class="row">

            <div class="navbar col-12">
                <!--Home brings us back to main page -->
                <div class="inner-Navbar">
                    <a href="index.php">Home</a>

                    <!--class drop down Aisle in menu bar -->
                    <div class="dropdown">
                        <div class="dropbutton">Aisle</div>
                        <div class="dropdown-content">
                            <a href="./Aisles/fruitsAisle.php">Fruits and Vegetables</a>
                            <a href="./Aisles/dairyAisle.php">Dairy</a>
                            <a href="./Aisles/pastaAisle.php">Pasta</a>
                            <a href="./Aisles/meatAisle.php">Meats</a>
                            <a href="./Aisles/seafoodAisle.php">Seafood</a>
                            <a href="./Aisles/candyAisle.php">Candy</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- This is the Opening Message Division -->
        <div class="row">
            <div class="pictures">
                <div class="picture"></div>
            </div>
            <div class="openingMessage col-12">
                <div class="opening"><span class="one">BONJOUR</span><span class="two">/HELLO!</span></div>
                <div class="subOpening">Welcome to our online grocery store! Please create an account if you are not
                    already signed in, and lets begin shopping!</div>
            </div>
        </div>

        <!-- Corousel Slides Division-->
        <div class="row">
            <div class="middle">
                <div class="middleText">
                    <pre>PLENTY AISLES TO 
CHOOSE FROM!</pre>
                </div>

                <div class="middle-container">
                    <div class="carousel">
                        <ul class="list-container">
                            <li class="list currentSlide first">
                                <div class="list-pic" style="background-image: url(https://www.foodiesfeed.com/wp-content/uploads/2017/07/food-1.jpg)">
                                </div>
                                <div class="texts">Fruits and Vegetables</div>
                            </li>

                            <li class="list second">
                                <div class="list-pic" style="background-image: url(https://www.foodiesfeed.com/wp-content/uploads/2017/07/fancy-dinner-with-seafood-pasta-and-crayfish.jpg)">
                                </div>
                                <div class="texts">SeaFood and Fish</div>
                            </li>

                            <li class="list third">
                                <div class="list-pic" style="background-image: url(https://www.foodiesfeed.com/wp-content/uploads/2017/07/orange-and-yellow-macarons-with-flowers.jpg)">
                                </div>
                                <div class="texts">Candy</div>
                            </li>

                            <li class="list fourth">
                                <div class="list-pic" style="background-image: url(https://www.foodiesfeed.com/wp-content/uploads/2019/04/mae-mu-pouring-milk.jpg)">
                                </div>
                                <div class="texts">Dairy</div>
                            </li>

                            <li class="list fifth">
                                <div class="list-pic" style="background-image: url(https://www.foodiesfeed.com/wp-content/uploads/2018/02/raw-beef-meat.jpg)">
                                </div>
                                <div class="texts">Meats</div>
                            </li>

                            <li class="list sixth">
                                <div class="list-pic" style="background-image: url(https://images.pexels.com/photos/1279330/pexels-photo-1279330.jpeg)">
                                </div>
                                <div class="texts">Pasta</div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="middle-container-gradient"></div>

                <div class="button-container">
                    <div class="button"></div>
                    <div class="button"></div>
                    <div class="cursors" style="background-image: url(./icons/right-arrow.svg)"></div>
                </div>

            </div>

        </div>

        <!-- Footer Section -->

        <div class="row">
            <div class="footer">

                <div class="section">
                    <div class="title">Grocery</div>
                    <img src="./icons/shopping-bag.svg" height="158px" width="158px">
                </div>

                <div class="section">
                    <div class="member-title">Group Members</div>
                    <div class="members">
                        <ul class="member-list">
                            <li>Annika Timermanis</li>
                            <li>Phuong Anh Trinh</li>
                            <li>Osama Hussein</li>
                            <li>Axel Solano</li>
                            <li>Jahrel Stewart</li>
                            <li>Charles Antoine</li>
                        </ul>
                    </div>
                </div>

                <div class="section">
                    <div class="innerSection">
                        <div class="contact-title">Contact</div>
                        <ul class="contact-list">
                            <li>XXX-XXX-XXXX</li>
                            <li>XXXX@gmail.com</li>
                        </ul>
                    </div>

                    <?php
                    if ($_SESSION['islogged'] === true) {
                        echo "<a href='../BackEnd/backEnd7.php' class='backEnd'>Back End</a>";
                        //session_destroy();
                    } else {
                    }
                    ?>
                    <button id="logout" onclick=" <?php $_SESSION['isLogged'] = false; ?> location.reload(); ">LOG OUT</button>

                </div>
            </div>
        </div>


    </div>

    <script src="./script/carousel.js"></script>

</body>

</html>
