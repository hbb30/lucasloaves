<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
<!-- Bootstrap Font Icon CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<!-- css -->
<link rel="stylesheet" type="text/css" href="style.css" >
<title>Luca's Loaves - Career</title>
</head>

<body>
<!-- navbar -->
<?php
    include("guest-nav-bar.php");
?>

<div class="content-title-container">
    <h4>Job Opportunities</h4>
</div>
<div class="content-position-container">
    <div class="baker-container">
        <h5>Baker</h5>
    </div>
    <div class="representative-container">
        <h5>Customer Service Representative</h5>
    </div>
    <div class="specialist-container">
        <h5>Digital Marketing Specialist</h5>
    </div>
</div>
<div class="content-information">
    <div class="baker-img-container">
        <img src="img/baker.webp">
    </div>
    <div class="representative-img-container">
        <img src="img/custorep.png">
    </div>
    <div class="specialist-img-container">
        <img src="img/digital.jpg">
    </div>
</div>
<div class="bottom-container">
    <button type="button" class="baker-apply" data-bs-toggle="modal" data-bs-target="#bakerapplyModal">Apply</button>
    <button type="button" class="rep-apply" data-bs-toggle="modal" data-bs-target="#repapplyModal">Apply</button>
    <button type="button" class="specialist-apply" data-bs-toggle="modal" data-bs-target="#specialistapplyModal">Apply</button>
</div>

<!-- bootstrap modal - BAKER Apply Modal -->
<div class="modal fade" id="bakerapplyModal" tabindex="-1" role="dialog" aria-labelledby="bakerapplyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="bakerapplyModalLabel">Application Form</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="application-process.php" method="POST" enctype="multipart/form-data">

                <p>What we are looking for:<br>
                    Have australian working authorization<br>
                    Have Food Safety certification<br>
                    A team player</p>

                    <div class="form-floating mb-2 mt-3">
                        <input type="hidden" class="form-control form-control-lg shadow-sm" id="position" name="position" value="Baker">
                        <label for="position">Position</label>
                    </div>

                    <div class="form-floating mb-2 mt-3">
                        <input type="text" class="form-control form-control-lg shadow-sm" id="firstname" name="firstname" autocomplete="off" placeholder="Firstname" required>
                        <label for="firstname">Firstname</label>
                    </div>
                    <div class="form-floating mb-2 mt-3">
                        <input type="text" class="form-control form-control-lg shadow-sm" id="lastname" name="lastname" placeholder="Lastname" placeholder="Lastname" required>
                        <label for="lastname">Lastname</label>
                    </div>
                    <div class="form-floating mb-2 mt-3">
                        <input type="email" class="form-control form-control-lg shadow-sm" id="email" name="email" placeholder="Email" placeholder="Email" required>
                        <label for="email">Email</label>
                    </div>

                    <label for="resume">Resume:(filename format: fullname-resume)</label><br>
                    <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required><br><br>

                    <label for="coverletter">Cover Letter:(filename format: fullname-CV)</label><br>
                    <input type="file" id="coverletter" name="coverletter" accept=".pdf,.doc,.docx" required><br><br>

                    <p>Thank you for your interest in job! we and hope and look forward in working with you!</p>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" id="bakerapplyBtn" name="bakerapplyBtn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- bootstrap modal - REPRESENTATIVE Apply Modal -->
<div class="modal fade" id="repapplyModal" tabindex="-1" role="dialog" aria-labelledby="repapplyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="repapplyModalLabel">Application Form</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="application-process.php" method="POST" enctype="multipart/form-data">

                <p>What we are looking for:<br>
                    Have australian working authorization<br>
                    Have Food Safety certification<br>
                    A team player</p>

                    <div class="form-floating mb-2 mt-3">
                        <input type="hidden" class="form-control form-control-lg shadow-sm" id="position" name="position" value="Customer Representative">
                        <label for="position">Position</label>
                    </div>

                    <div class="form-floating mb-2 mt-3">
                        <input type="text" class="form-control form-control-lg shadow-sm" id="firstname" name="firstname" autocomplete="off" placeholder="Firstname" required>
                        <label for="firstname">Firstname</label>
                    </div>
                    <div class="form-floating mb-2 mt-3">
                        <input type="text" class="form-control form-control-lg shadow-sm" id="lastname" name="lastname" placeholder="Lastname" placeholder="Lastname" required>
                        <label for="lastname">Lastname</label>
                    </div>
                    <div class="form-floating mb-2 mt-3">
                        <input type="email" class="form-control form-control-lg shadow-sm" id="email" name="email" placeholder="Email" placeholder="Email" required>
                        <label for="email">Email</label>
                    </div>

                    <label for="resume">Resume:(filename format: fullname-resume)</label><br>
                    <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required><br><br>

                    <label for="coverletter">Cover Letter:(filename format: fullname-CV)</label><br>
                    <input type="file" id="coverletter" name="coverletter" accept=".pdf,.doc,.docx" required><br><br>

                    <p>Thank you for your interest in job! we and hope and look forward in working with you!</p>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" id="repapplyBtn" name="repapplyBtn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- bootstrap modal - SPECIALIST Apply Modal -->
<div class="modal fade" id="specialistapplyModal" tabindex="-1" role="dialog" aria-labelledby="specialistapplyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="specialistapplyModalLabel">Application Form</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="application-process.php" method="POST" enctype="multipart/form-data">

                <p>What we are looking for:<br>
                    Have australian working authorization<br>
                    Have Food Safety certification<br>
                    A team player</p>

                    <div class="form-floating mb-2 mt-3">
                        <input type="hidden" class="form-control form-control-lg shadow-sm" id="position" name="position" value="Digital Marketing Specialist">
                        <label for="position">Position</label>
                    </div>

                    <div class="form-floating mb-2 mt-3">
                        <input type="text" class="form-control form-control-lg shadow-sm" id="firstname" name="firstname" autocomplete="off" placeholder="Firstname" required>
                        <label for="firstname">Firstname</label>
                    </div>
                    <div class="form-floating mb-2 mt-3">
                        <input type="text" class="form-control form-control-lg shadow-sm" id="lastname" name="lastname" placeholder="Lastname" placeholder="Lastname" required>
                        <label for="lastname">Lastname</label>
                    </div>
                    <div class="form-floating mb-2 mt-3">
                        <input type="email" class="form-control form-control-lg shadow-sm" id="email" name="email" placeholder="Email" placeholder="Email" required>
                        <label for="email">Email</label>
                    </div>

                    <label for="resume">Resume:(filename format: fullname-resume)</label><br>
                    <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required><br><br>

                    <label for="coverletter">Cover Letter:(filename format: fullname-CV)</label><br>
                    <input type="file" id="coverletter" name="coverletter" accept=".pdf,.doc,.docx" required><br><br>

                    <p>Thank you for your interest in job! we and hope and look forward in working with you!</p>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" id="specialistapplyBtn" name="specialistapplyBtn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
            .content-title-container{
                margin-top: 40px;
                width: 100%;
                height: 50px;
                /* background-color: gray; */
            }

            .content-title-container h4{
                font-weight: bolder;
                font-family: 'Century Gothic', normal;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .content-position-container{
                display: flex;
                justify-content: space-around;
                align-items: center;
                /* background-color: brown; */
            }

            .content-position-container h5{
                margin: 20px;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .baker-container{
                /* background-color: orange; */
                width: 300px;
            }

            .representative-container{
                /* background-color: orange; */
            }

            .specialist-container{
                /* background-color: orange; */
            }

            .content-information{
                display: flex;
                justify-content: center;
                align-items: center;
                /* background-color: blue; */
                width: 100%;
                height: 50%;
            }

            .baker-img-container, .representative-img-container, .specialist-img-container{
                display: flex;
                justify-content: space-around;
                align-items: center;
            }

            .baker-img-container img{
                width: 122%;
                height: 90%;
            }

            .representative-img-container img{
                width: 80%;
                height: 150%;
            }

            .specialist-img-container img{
                width: 120%;
                height: 90%;
            }

            .bottom-container{
                /* background-color: gray; */
                display: flex;
                justify-content: space-around;
                align-items: center;
                margin-top: 10px;
            }

            .bottom-container button{
                width: 120px;
                height: 40px;
                border-radius: 5px;
                background-color:burlywood;
                font-weight: bolder;
                font-family: 'Century Gothic', normal;
            }

            .bottom-container button:hover{
                background-color: #0C9AED;
            }
        </style>


<!-- Bootstrap JS and jQuery -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    </body>
</html>