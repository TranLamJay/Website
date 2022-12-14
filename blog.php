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


    <!-- Page Header Start -->
    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">Blog Grid</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Blog Grid</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Blog Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Tin tức mới nhất</h1>
            
            </div>
            <div class="row g-4">
                <?php

                include_once "backend/Util/ConnectDb.php";
                $dbConn = new ConnectDb('', '', '', '');

                $sql = "select * from tintuc";

                $data = $dbConn->getAllData($sql);


                foreach ($data as $value) {
                    echo "  <div class='col-lg-4 col-md-6 wow fadeInUp' data-wow-delay='0.1s'>";
                    echo " <img class='img-fluid' src='img/{$value['hinhminhhoa']}' alt=''>";
                    echo "<div class='bg-light p-4'>";
                    echo " <a class='d-block h5 lh-base mb-4' href=''>{$value['tieude']}</a>";
                    echo " <div class='text-muted border-top pt-4'>";
                    echo "  <small class='me-3'><i class='fa fa-calendar text-primary me-2'></i>{$value['ngaydang']}</small>";
                    echo "  <small class='me-3'><i class='fa fa-calendar text-primary me-2'></i></small>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
                ?>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="">Load More</a>
                </div>
            </div>
        </div>
    </div>


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