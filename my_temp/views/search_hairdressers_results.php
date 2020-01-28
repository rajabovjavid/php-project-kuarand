<?php

ob_start();
session_start();

?>

<?php

$search_data = apcu_fetch("user_data")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>KuaRand</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Major - 5* Hotel template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
    <link href="../plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../styles/rooms.css">
    <link rel="stylesheet" type="text/css" href="../styles/rooms_responsive.css">
    <link rel="stylesheet" type="text/css" href="../styles/dropdown_menu.css">
</head>
<body>

<div class="super_container">

    <?php
    $comes_from_page = "list_hairdressers";
    $index_url = "./index.php";
    $sign_url = "signin.php";
    $signout_url = "../actions/customer_actions/signout_action.php";
    $comes_from_url = "";
    include "../header.php";
    ?>

    <!-- Hairdressers -->
    <!--<a href="./../../index.php"></a>-->
    <div class="rooms">
        <div class="container">
            <div class="row rooms_row">

                <?php

                foreach ( $search_data as $hd ) { ?>
                <!-- Room -->
                <div class="col-lg-4">
                    <div class="rooms_item">
                        <div class="rooms_image"><img src="../images/rooms_1.jpg" alt="https://unsplash.com/@yuni_ladyday2"></div>
                        <div class="rooms_title_container text-center">
                            <div class="rooms_title"><h1><?php echo $hd["hdName"] ?></h1></div>
                            <div class="rooms_price">Average Rating: <?php echo $hd["hdRating"]?></div>
                        </div>
                        <div class="rooms_list">
                            <ul>
                                <li class="d-flex flex-row align-items-start justify-content-start">
                                    <div><div>City:</div></div>
                                    <div> <?php echo $hd["hdAddressCity"]?> </div>
                                </li>
                                <li class="d-flex flex-row align-items-start justify-content-start">
                                    <div><div>Region:</div></div>
                                    <div> <?php echo $hd["hdAddressRegion"]?> </div>
                                </li>
                            </ul>
                        </div>
                        <div class="button rooms_button ml-auto mr-auto"><a href="#">See details</a></div>
                    </div>
            </div>
               <?php } ?>
        </div>
    </div>

    <?php include "../footer.php"?>


</div>

<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../styles/bootstrap-4.1.2/popper.js"></script>
<script src="../styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="../plugins/greensock/TweenMax.min.js"></script>
<script src="../plugins/greensock/TimelineMax.min.js"></script>
<script src="../plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="../plugins/greensock/animation.gsap.min.js"></script>
<script src="../plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="../plugins/easing/easing.js"></script>
<script src="../plugins/progressbar/progressbar.min.js"></script>
<script src="../plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="../plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="../js/rooms.js"></script>
</body>
</html>

