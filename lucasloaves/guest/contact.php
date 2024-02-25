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
        <title>Luca's Loaves - Shop</title>
    </head>

    <body>
        <!-- navbar -->
        <?php
            include("guest-nav-bar.php");
        ?>

        <div class="contact-container">
            <div class="contact-info-container">
                <div class="contact-info-inner-con">
                    <h5><br><br>Contact Details</h5>
                    <p>Telephone number:<br>
                        1800 849 165<br>
                        Email address: info@lucasloaves.com.au<br></p>
                    <h5>Address</h5>
                    <p>Level 2, 128 Chalmers Street, Surry Hills NSW 2010 Australia</p>
                </div>
            </div>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3148.219145984548!2d151.20425327550916!3d-33.88710287321963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ae23187fe451%3A0xc77a5e0a2b431d40!2sStrathfield%20College!5e1!3m2!1sen!2sau!4v1706786240782!5m2!1sen!2sau" width="750" height="585" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <style>
            .contact-container{
                /* background-color: gray; */
                width: 100%;
                height: 160%;
                display: flex;
                justify-content: top;
                align-items: top;
            }

            .contact-info-container{
                /* background-color: blue; */
                width: 50%;
                height: 50%;
                margin: 30px;
            }

            .contact-info-inner-con{
                background-color: green;
                margin: 30px;
                height: 70%;
                border-radius: 20px;
                background-color:burlywood;
            }

            .contact-info-container h5, p{
                display: flex;
                justify-content: center;
                align-items: center;
                margin-top: 20px;
            }

            .contact-info-container h5{
                margin-top: 100px;
                font-weight: bolder;
                font-family: 'Century Gothic', normal;
            }

            .map-container{
                background-color: brown;
                width: 50%;
                height: 50%;
                margin: 30px;
            }
        </style>
    </body>
</html>