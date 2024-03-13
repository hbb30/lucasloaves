<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Timetable</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <style>
    .content-container {
      margin-left: 250px; /* Adjust sidebar width */
      margin-top: 20px; /* Add margin to the top */
    }
  </style>
</head>
<body class="bg-white">

<?php include 'sidebar.php'; ?>
  
<div class="container content-container">
    <div class="d-flex justify-content-between">
        <h1 class="text-warning mt-3"><span class="text-dark">My</span> Timetable</h1>
        <button type="button" class="btn btn-outline-light mt-3"  data-bs-toggle="modal" data-bs-target="#log_out">
        Logout &nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
        </svg>
        </button>
    </div>
    
    <div class="p-4 shadow bg-light mt-3 rounded-4 ">
        <div class="d-flex justify-content-between gap-3 mb-4">
            
            <div class="input-group w-25">
                <input type="text" class="form-control rounded-3" id="searchUser" placeholder="Search Name">
                <button class="input-group-text rounded-3" id="btn-searchUser">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
            </div>

        </div>
    
        <!-- <table class="table table-dark table-striped shadow-lg rounded mt-5"> -->
        <table class="table ">
            <thead>
                <tr>
                    <th scope="col">Course Title</th>
                    <th scope="col">Room</th>
                    <th scope="col">Schedule</th>
                </tr>
            </thead>
            <tbody id="showUser">
                <!-- data will display here from display() function. Data is from display/user.php -->
            </tbody>
        </table>

        </div>
    
</div>

<!-- 
  include the add_user from the modal folder 
  meaning, all codes in add_user.php will be included here       
-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- script is in JS folder so that the code is cleaner and sorted -->
<script src="adminJs/manageUser.js"></script>
<script src="../../confirmLogout.js"></script>
<script>
  
</script>
</body>
</html>
