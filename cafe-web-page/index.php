<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <title>Cafe</title>

        <style>
        body{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            /* font-size: 40px; */
            background-color: #202429;
        }

        .content-con{
            display: flex;
            align-items: center;
            justify-content: center;
            /* background-color: bisque; */
            height: 700px;
            width: 100%;
        }

        button{
            height: 100px;
            width: 500px;
            font-size: 100px;
            border: none;
            border-radius: 10px;
            font-size: xx-large;
        }

        button:hover{
            cursor: pointer;
            background-color: yellow;
        }
    </style>

    </head>
    <body>
        <div class="content-con">
            <button type="button" id="btn-order" onclick="myfunction()">Order</button>
        </div>
    </body>

    <script>
        function myfunction(){
            window.location.href = 'customer/products.php';
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</html>