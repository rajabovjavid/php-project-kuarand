<?php

$comes_from = "index";
include "header.php";

$user_data = apcu_fetch("user_data");

// filter employee by hd _route
$make_call = callAPI('GET', 'http://localhost/rest_api_slim/public/api/service/getAllServices', false);
$response = json_decode($make_call, true);
$message = $response["message"];
$status = $response["status"];

?>

<div class="home">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="../images/hairdresser.jpg"
         data-speed="0.8"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content text-center">
                        <div class="home_title"><h1>Luxury & Compfort</h1></div>
                        <div class="home_text">In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum
                            dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero
                            pretium interdum.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search_box">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="search_box_container d-flex flex-row align-items-center justify-content-start">
                            <div class="search_form_container">

                                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab"
                                                                                  role="tab" data-toggle="tab"
                                                                                  aria-expanded="true">Services</a>
                                        </li>
                                        <li role="presentation" class=""><a href="#tab_content2" role="tab"
                                                                            id="profile-tab" data-toggle="tab"
                                                                            aria-expanded="false">Type</a>
                                        </li>
                                        <li role="presentation" class=""><a href="#tab_content3" role="tab"
                                                                            id="profile-tab2" data-toggle="tab"
                                                                            aria-expanded="false">Hairdresser Name</a>
                                        </li>

                                    </ul>
                                    <div id="myTabContent" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1"
                                             aria-labelledby="home-tab">
                                            <form action="../api_routes/customer_routes/search_hairdressers_results_route.php"
                                                  id="search_form" class="search_form" method="POST">
                                                <div class="d-flex flex-lg-row flex-column align-items-center justify-content-start">
                                                    <ul class="search_form_list d-flex flex-row align-items-center justify-content-start flex-wrap">
                                                        <div class="col-md-6 col-sm-6 col-xl-12">
                                                            <input type="text" name="city"
                                                                   value=""
                                                                   class="form-control col-md-7 col-xs-12"
                                                                   placeholder="City">
                                                        </div>
                                                        <hr>

                                                        <div class="col-md-6 col-sm-6 col-xl-12">
                                                            <input type="text" name="region"
                                                                   value=""
                                                                   class="form-control col-md-7 col-xs-12"
                                                                   placeholder="Region">
                                                        </div>
                                                        <hr>

                                                        <div class="col-md-6 col-sm-6 col-xl-12">
                                                            <select id="heard" class="form-control" name="ser_name">
                                                                <?php
                                                                foreach ($response["data"] as $service) { ?>
                                                                    <option value=<?php echo $service["serName"] ?>> <?php echo $service["serName"] ?> </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </ul>
                                                    <button class="search_button">search</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_content2"
                                             aria-labelledby="profile-tab">
                                            <form action="../api_routes/customer_routes/search_hairdressers_results_route.php"
                                                  id="search_form" class="search_form" method="POST">
                                                <div class="d-flex flex-lg-row flex-column align-items-center justify-content-start">
                                                    <ul class="search_form_list d-flex flex-row align-items-center justify-content-start flex-wrap">
                                                        <div class="col-md-6 col-sm-6 col-xl-12">
                                                            <input type="text" name="city"
                                                                   value=""
                                                                   class="form-control col-md-7 col-xs-12"
                                                                   placeholder="City">
                                                        </div>
                                                        <hr>

                                                        <div class="col-md-6 col-sm-6 col-xl-12">
                                                            <input type="text" name="region"
                                                                   value=""
                                                                   class="form-control col-md-7 col-xs-12"
                                                                   placeholder="Region">
                                                        </div>
                                                        <hr>

                                                        <div class="col-md-6 col-sm-6 col-xl-12">
                                                            <select id="heard" class="form-control" name="hd_type">
                                                                <option value=0>For Woman</option>
                                                                <option value=1>For Man</option>
                                                            </select>
                                                        </div>
                                                    </ul>
                                                    <button class="search_button">search</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_content3"
                                             aria-labelledby="profile-tab">
                                            <form action="../api_routes/customer_routes/search_hairdressers_results_route.php"
                                                  id="search_form" class="search_form" method="POST">
                                                <div class="d-flex flex-lg-row flex-column align-items-center justify-content-start">
                                                    <ul class="search_form_list d-flex flex-row align-items-center justify-content-start flex-wrap">

                                                        <div class="col-md-6 col-sm-6 col-xl-12">
                                                            <input type="text" name="city"
                                                                   value=""
                                                                   class="form-control col-md-7 col-xs-12"
                                                                   placeholder="City">
                                                        </div>
                                                        <hr>

                                                        <div class="col-md-6 col-sm-6 col-xl-12">
                                                            <input type="text" name="region"
                                                                   value=""
                                                                   class="form-control col-md-7 col-xs-12"
                                                                   placeholder="Region">
                                                        </div>
                                                        <hr>

                                                        <div class="col-md-6 col-sm-6 col-xl-12">
                                                            <input type="text" name="hd_name"
                                                                   value=""
                                                                   class="form-control col-md-7 col-xs-12"
                                                                   placeholder="Hairdresser Name">
                                                        </div>
                                                    </ul>
                                                    <button class="search_button">search</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php" ?>

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
<script src="../js/custom.js"></script>

<script src="../nedmin/vendors/jquery/dist/jquery.min.js"></script>
<script src="../nedmin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../nedmin/vendors/fastclick/lib/fastclick.js"></script>
<script src="../nedmin/vendors/nprogress/nprogress.js"></script>
<script src="../nedmin/build/js/custom.min.js"></script>
</body>
</html>