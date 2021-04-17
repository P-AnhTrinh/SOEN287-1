<?php
session_start();    

$filename = explode("/", $_SERVER["SCRIPT_NAME"]);
$filename = $filename[count($filename) - 1];

if(!isset($_SESSION['allSessions'])){        
    $_SESSION['allSessions'] = array();
}

if(!isset($_SESSION[$filename])){
    $_SESSION[$filename] = 1;
}

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../../css/productDescription.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Shrimp</title>
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
                    <a href="../../shoppingCart.php" class="cart">
                        <img src="../../icons/shopping-cart.svg" height="18px" width="18px">
                        <span>Cart</span>
                    </a>
                    <a href="../../LoginPage.html" class="Account">
                        <img src="../../icons/account.png" height="18px" width="18px">
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
                    <a href="../../index.html">Home</a>

                    <!--class drop down Aisle in menu bar -->
                    <div class="dropdown">
                        <div class="dropbutton">Aisle</div>
                        <div class="dropdown-content">
                            <a href="../../Aisles/fruitsAisle.html">Fruits and Vegetables</a>
                            <a href="../../Aisles/dairyAisle.html">Dairy</a>
                            <a href="../../Aisles/pastaAisle.html">Pasta</a>
                            <a href="../../Aisles/meatAisle.html">Meats</a>
                            <a href="../../Aisles/seafoodAisle.html">Seafood</a>
                            <a href="../../Aisles/candyAisle.html">Candy</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- This is the division for Product Description bar -->

        <div class="row">

            <div class="middle">
                <div class="directory">
                    <div class="message">Shrimp</div>
                    <div class="innerAisle">SEAFOOD</div>
                </div>

                <div class="product_and_description">
                    <div class="box picture-container">
                        <div class="picture" style="background-image: url(../../images/seafoodAisle/shrimp.jpg)">
                        </div>
                    </div>

                    <!-- Slider for different colour apples -->
                    <div class="box description">
                        <div class="align">

                            <div class="descriptionRow" data-value="133" data-measure="g"><span>WEIGHT</span> 133g</div>

                            <div class="descriptionRow" data-value="12.10"><span>PRICE</span> $12.10</div>

                            <div class="descriptionRow">
                                <button type="button" class="plusMinus">-</button>

                                <input class="input-quantity" type="number" value="">

                                <button type="button" class="plusMinus">+</button>
                            </div>

                            <button class="descriptionRow">Add to Cart</button>

                            <button class="descriptionRow" id="moreDescription">More Description...</button>
                        </div>

                        <div class="smallCarousel">
                            <div class="goBack" style="background-image: url(../../icons/right-arrow.svg)"></div>
                            <!-- more description -->
                            <div class="detail">You can think of shrimps as bite-size lobsters. Regardles of their size,
                                their flavour still packs a punch! </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- This is the division for Footer bar -->

        <div class="row">
            <div class="footer">

                <div class="section">
                    <div class="title">Grocery</div>
                    <img src="../../icons/shopping-bag.svg" height="158px" width="158px">
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

                    <a href="../../BackEnd/backEnd7.html" class="backEnd">Back End</a>

                </div>
            </div>
        </div>

    </div>

    <script type="text/javascript">
        const inputQuantity = document.querySelector('.descriptionRow:nth-child(3) .input-quantity');               
        inputQuantity.value = <?php echo ($_SESSION[$filename] == "") ? 1 : $_SESSION[$filename]; ?>;                   
    </script>

    <script src="../../script/productDescription.js"></script>

</body>

</html>