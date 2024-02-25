<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        <!-- Bootstrap Font Icon CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <!-- slideshow swiper -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <!-- css -->
        <link rel="stylesheet" type="text/css" href="../style.css" >
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src='https://use.fontawesome.com/releases/v5.0.8/js/all.js'></script>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <title>Luca's Loaves - Guest Homepage</title>
    </head>
    
    <body>
        <!-- navbar -->
        <?php
            include("guest-nav-bar.php");
        ?>
        
        <!-- auto image slide -->
        <div class="container-carousel">
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        $images = ["front.png", "slides.png"];
                        foreach ($images as $index => $image) {
                            $activeClass = ($index === 0) ? 'active' : '';
                            echo '<div class="carousel-item ' . $activeClass . '">
                                    <img src="img/' . $image . '" class="d-block w-100" alt="Slide ' . ($index + 1) . '">
                                </div>';
                        }
                        ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
            </div>
        </div>

        <!-- bottom containers -->
        <div class="lower-container">
            <div class="bs-box">
                <h5>Best Selling</h5>
                <div class="bs-box-imgcon">
                    <div class="bs-img"><img src="../img/sd-spelt.jpg"></div>
                    <div class="bs-description"><p>Sourdough Spelt<br>
                    Price: $9.00 <br><br>
                    Customer Review:<br>Good quality! The outside is crusty but the inside is soft and chewy.</p></div>
                </div>
            </div>
                    
            <div class="new-box">
                <h5>New<h5>
                    <div class="new-box-imgcon">
                        <div class="new-img"><img src="../img/sd-classic.webp"> <div class="bs-description"><p>Classic White<br>Price: $7.00</p></div></div>
                        <div class="new-img"><img src="../img/moaripotato.webp"> <div class="bs-description"><p>Moari Potato<br>Price: $6.00</p></div></div>
                        <div class="new-img"><img src="../img/choco.webp"> <div class="bs-description"><p>Chocolate Sourdough<br>Price: $9.00</p></div></div>
                    </div>
            </div>
        
            <div class="jn-box">
                <h5>Join Us!</h5>
                    <div class="jn-content-con">
                        <p>Are you interested in learning how to make your own bread? Join us in our Sourdough Breadmaking Class!<a href="#" data-bs-toggle="modal" data-bs-target="#breadmakingclassModal">View details</a></p>
                        <p>Create an account to enjoy discounts and receive early notifications of new bread, promos, and sales.<a href="#" data-bs-toggle="modal" data-bs-target="#createAccountModal">Create account</a></p>
                    </div>
            </div>
        </div>

        <!-- bootstrap modal - Register Modal -->
        <!-- Create Account Modal -->
        <div class="modal fade" id="createAccountModal" tabindex="-1" role="dialog" aria-labelledby="createAccountModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="createAccountModalLabel">Create Account</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Your form for creating an account goes here -->
                        <form action="" method="POST">
                            <div class="form-floating mb-2 mt-3">
                                <input type="text" class="form-control form-control-lg shadow-sm" id="username" name="username" autocomplete="off" placeholder="Username" required>
                                <label for="username">Username</label>
                            </div>
                            <div class="form-floating mb-2 mt-3">
                                <input type="password" class="form-control form-control-lg shadow-sm" id="password" name="password" placeholder="Password" required>
                                <label for="password">Password</label>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary" id="createAccountBtn" name="createAccountBtn">Create Account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- bootstrap modal - View Details -->
        <div class="modal fade" id="breadmakingclassModal" tabindex="-1" role="dialog" aria-labelledby="breadmakingclassModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="breadmakingclassModalLabel">Create Account</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Your form for creating an account goes here -->
                        <form action="" method="POST">
                            <div class="form-floating mb-2 mt-3">
                                <input type="text" class="form-control form-control-lg shadow-sm" id="username" name="username" autocomplete="off" placeholder="Username" required>
                                <label for="username">Username</label>
                            </div>
                            <div class="form-floating mb-2 mt-3">
                                <input type="password" class="form-control form-control-lg shadow-sm" id="password" name="password" placeholder="Password" required>
                                <label for="password">Password</label>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary" id="createAccountBtn" name="createAccountBtn">Create Account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php
    include '../createacc-process.php';
?>

<script>
    // Function to open the register account modal
    function createAccountModal() {
        $('#createAccountModal').modal('show');
    }

    // Function to go back to the sign-in modal
    function goBackToExampleModal() {
        $('#exampleModal').modal('show');
    }

    // Event listener for the "Click here to register" link
    $('#openRegisterModalLink').on('click', function (e) {
        // Prevent the default link behavior
        e.preventDefault();

        // Close the sign-in modal and open the register account modal
        $('#exampleModal').modal('hide');
        openRegisterModal();
    });

    // Listen for the 'hidden' event of the register account modal
    $('#registerModal').on('hidden.bs.modal', function (e) {
        // When the register account modal is hidden, go back to the sign-in modal
        goBackToExampleModal();
    });
</script>

    <script>
    // Function to open the breadmaking class modal
        function breadmakingclassModal() {
            $('#breadmakingclassModal').modal('show');
        }
    </script>

<!-- JavaScript for automatic slideshow -->
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var myCarousel = new bootstrap.Carousel(document.getElementById('carouselExample'), {
            interval: 2000
            });
    });
    </script>

<!-- Bootstrap JS and jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>


    </body>
</html>