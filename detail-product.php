<!DOCTYPE html>
<html lang="en">

<?php
include_once "./header/header.php"
?>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <?php
    include_once "./menu-navbar/menu.php"
    ?>
    <!-- Navbar End -->


    <!-- Welcome Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7">
                                    <h1 class="display-2 mb-5 animated slideInDown">Detail Products</h1>
                                    <a href="" class="btn btn-primary rounded-pill py-sm-3 px-sm-5">Event</a>
                                    <a href="shop.php" class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">Shopping</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7">
                                    <h1 class="display-2 mb-5 animated slideInDown">Detail Products</h1>
                                    <a href="" class="btn btn-primary rounded-pill py-sm-3 px-sm-5">Event</a>
                                    <a href="shop.php" class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">Shopping</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Welcome End -->


    <!-- About Start -->

    <!-- About End -->


    <!-- Feature Start -->

    <!-- Feature End -->


    <!-- Product Start -->
    <div class="container">
        <div class="row">
            <div class="col-xs-4 item-photo">
                <?php
                $id = isset($_GET['id']) ? ($_GET['id']) : "";

                include_once "backend/Util/ConnectDb.php";
                $dbConn = new ConnectDb('', '', '', '');

                $sql = "select * from sanpham";

                $data = $dbConn->getAllData($sql);

                foreach ($data as $value) {
                    if ($id == $value['id']) {
                        echo "
                        <img style='max-width:32%;' src='img/{$value['images']}' />
                </div>
                <div class='col-xs-5' style='border:0px solid gray'>
                <h3>{$value['name']}</h3>

                <h6 class='title-price'><small>Giá tiền/small></h6>
                <h3 style='margin-top:0px;'>{$value['price']}</h3>

                <div class='section'>
                    <h6 class='title-attr' style='margin-top:15px;'><small>COLOR</small></h6>
                    <div>
                        <div class='attr' style=''>{$value['color']}</div>
                    </div>
                </div>
                <div class='section' style='padding-bottom:5px;'>
                    <h6 class='title-attr'><small>Dung lượng</small></h6>
                    <div>
                        <div class='attr2'>{$value['gb']}</div>
                    </div>
                </div>

                <div class='section' style='padding-bottom:5px;'>
                    <h6 class='title-attr'><small>Mô tả</small></h6>
                    <div>
                        <div class=''>{$value['describe']}</div>
                    </div>
                </div>
                        
                        ";
                    }
                }
                ?>

                <div class="def-number-input number-input safari_only">
                    <h6 class="title-attr"><small>CAPACIDAD</small></h6>
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus">-</button>
                    <input class="quantity fw-bold text-black" min="0" name="quantity" value="1" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus">+</button>
                </div>

                <!-- Botones de compra -->
                <div class="section" style="padding-bottom:20px;">
                    <button class="btn btn-success"><span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Mua Ngay</button>
                    <!-- <h6><a href="#"><span class="glyphicon glyphicon-heart-empty" style="cursor:pointer;"></span> Agregar a lista de deseos</a></h6> -->
                </div>
            </div>

            


    <!-- Firm Visit Start -->

    <!-- Firm Visit End -->


    <!-- Testimonial Start -->

    <!-- Testimonial End -->


    <!-- Blog Start -->

    <!-- Blog End -->


    <!-- Footer Start -->
    <?php
    include_once "./footer/footer.php"
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>