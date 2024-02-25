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
        <title>Luca's Loaves - About</title>
    </head>

    <body>
        <!-- navbar -->
        <?php
            include("guest-nav-bar.php");
        ?>

        <div class="content-title-con">
            <h4>Key Facts about Luca and the Bread</h4>
        </div>

        <div class="content-con">
            <div class="content-img-con">
                <img src="img/aboutimg.png">
            </div>
            <div class="content-info-con">
                <p>Luca commenced his career as a lifeguard but was laid off. <br>He found he enjoyed making bread and experimented and in no time at all had built up a thriving business.</p>
                <p>About sourdough bread.</p>
                <p> - It has no store/commercial yeast<br>
                - Hand kneaded and shaped in-house<br>
                - Prepared over 14-17hrs<br>
                - Organic flour, the water is filtered and the electricity used to power the oven is solar powered!<br>
                - Store bought bread is mixed and baked within 2 hours meaning the gluten content is really <br>high and can lead to someone feeling clogged up when eating bread. Sourdough is a great alternative and much easier to digest.
</p>
            </div>
        </div>
    </body>

    <style>
        .content-title-con{
            margin-top: 40px;
            width: 100%;
            height: 50px;
        }

        .content-title-con h4{
            font-weight: bolder;
            font-family: 'Century Gothic', normal;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .content-con{
            display: flex;
            justify-content: space-between;
            align-items: top;
            width: 100%;
            height: 100vh;
            /* background-color: gray; */
        }

        .content-img-con{
            width: 50%;
            height: 70%;
            /* background-color: black; */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .content-con img{
            width: 70%;
            height: 110%;
            margin-left: 40px;
            margin-top: 50px;
        }

        .content-info-con{
            margin: 20px;
            width: 50%;
            height: 100%;
        }

        .content-info-con p{
            font-weight: bolder;
        }
    </style>
</html>