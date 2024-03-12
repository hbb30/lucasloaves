<!-- HTML Login Page -->
<?php
    session_start();
    if(isset($_SESSION['userid'])){
        if($_SESSION['userlevel']=='admin'){
            header("location: admin/dashboard.php");
        }else if($_SESSION['userlevel']=='teacher'){
            header("location: teachers/dashboard.php");
        }else{
            header("location: students/dashboard.php");
        }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body class="bg-dark">
    
        <div class="position-absolute top-50 start-50 translate-middle">
            <form id="loginform" class="p-5 rounded-5 bg-light shadow">
                <div class="position-absolute top-0 start-50 translate-middle">
                    <span class="bg-dark p-4 rounded-5 text-light"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#f7c00a" class="bi bi-rocket-takeoff" viewBox="0 0 16 16">
                        <path d="M9.752 6.193c.599.6 1.73.437 2.528-.362.798-.799.96-1.932.362-2.531-.599-.6-1.73-.438-2.528.361-.798.8-.96 1.933-.362 2.532Z"/>
                        <path d="M15.811 3.312c-.363 1.534-1.334 3.626-3.64 6.218l-.24 2.408a2.56 2.56 0 0 1-.732 1.526L8.817 15.85a.51.51 0 0 1-.867-.434l.27-1.899c.04-.28-.013-.593-.131-.956a9.42 9.42 0 0 0-.249-.657l-.082-.202c-.815-.197-1.578-.662-2.191-1.277-.614-.615-1.079-1.379-1.275-2.195l-.203-.083a9.556 9.556 0 0 0-.655-.248c-.363-.119-.675-.172-.955-.132l-1.896.27A.51.51 0 0 1 .15 7.17l2.382-2.386c.41-.41.947-.67 1.524-.734h.006l2.4-.238C9.005 1.55 11.087.582 12.623.208c.89-.217 1.59-.232 2.08-.188.244.023.435.06.57.093.067.017.12.033.16.045.184.06.279.13.351.295l.029.073a3.475 3.475 0 0 1 .157.721c.055.485.051 1.178-.159 2.065Zm-4.828 7.475.04-.04-.107 1.081a1.536 1.536 0 0 1-.44.913l-1.298 1.3.054-.38c.072-.506-.034-.993-.172-1.418a8.548 8.548 0 0 0-.164-.45c.738-.065 1.462-.38 2.087-1.006ZM5.205 5c-.625.626-.94 1.351-1.004 2.09a8.497 8.497 0 0 0-.45-.164c-.424-.138-.91-.244-1.416-.172l-.38.054 1.3-1.3c.245-.246.566-.401.91-.44l1.08-.107-.04.039Zm9.406-3.961c-.38-.034-.967-.027-1.746.163-1.558.38-3.917 1.496-6.937 4.521-.62.62-.799 1.34-.687 2.051.107.676.483 1.362 1.048 1.928.564.565 1.25.941 1.924 1.049.71.112 1.429-.067 2.048-.688 3.079-3.083 4.192-5.444 4.556-6.987.183-.771.18-1.345.138-1.713a2.835 2.835 0 0 0-.045-.283 3.078 3.078 0 0 0-.3-.041Z"/>
                        <path d="M7.009 12.139a7.632 7.632 0 0 1-1.804-1.352A7.568 7.568 0 0 1 3.794 8.86c-1.102.992-1.965 5.054-1.839 5.18.125.126 3.936-.896 5.054-1.902Z"/>
                        </svg>
                    </span>
                </div>
                <h2>Login Form</h2><br>
                <div class="form-floating mb-2 mt-2">
                    <input type="text" class="form-control form-control-lg shadow-sm" id="uname" autocomplete="off" placeholder="Username" required>
                    <label for="uname">Username</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="password" class="form-control form-control-lg shadow-sm" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-outline-warning shadow-sm" type="submit">Login</button>
                <center><div class="mt-3 text-muted">&copy; 2022-2023</div></center>
            </form>
            
        </div>

        <!-- modal -->
        <!-- failed -->
        <div class="modal fade" role="dialog" id="error">
            <div class="modal-dialog" role="document">
                <div class="modal-content rounded-4 shadow bg-danger">
                <div class="modal-header border-bottom-0">
                    <h1 class="modal-title fs-5 text-light">Opps!</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body py-0">
                    <p class="text-light">Invalid credentials!</p>
                </div>
                </div>
            </div>
        </div>
                
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $(document).ready(function(){
                $("#loginform").submit(function(e){
                    e.preventDefault();
                    $uname = $("#uname").val();
                    $password = $("#password").val();
                    $.post("login.php",{uname:$uname, password:$password},function(data){ 
                        // alert(data);
                       if(data == 'admin'){
                        window.location.href = "admin/dashboard.php";
                       }else if(data == 'teacher'){
                        window.location.href = "teachers/dashboard.php";
                       }else if(data == 'students'){
                           window.location.href = "students/dashboard.php";
                       }else{
                        $("#error").modal("show");
                       }
                    });
                });
            });
        </script>
    </body>
</html>