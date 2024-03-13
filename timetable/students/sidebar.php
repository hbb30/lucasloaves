<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f2f2f2;
    }
    #sidebar {
      position: fixed;
      top: 0;
      left: 0;
      width: 250px;
      height: 100%;
      background-color: #007bff; /* blue */
      padding-top: 20px;
      color: #fff;
    }
    #sidebar ul {
      list-style-type: none;
      padding: 0;
    }
    #sidebar ul li {
      padding: 10px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    #sidebar ul li:hover {
      background-color: #0056b3; /* darker blue on hover */
    }
    #sidebar ul li a {
      text-decoration: none; /* Remove underline */
      color: #fff; /* White color */
    }
    #content {
      margin-left: 250px;
      padding: 20px;
    }
    #totalUsers, #totalCourses {
      display: inline-block;
      width: 45%; /* Adjust the width as needed */
      background-color: #fff;
      padding: 10px;
      margin: 10px 5px; /* Adjust margin as needed */
      border-radius: 5px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); /* Add shadow */
      pointer-events: none; /* Disable pointer events */
    }
    #totalUsers {
      background-color: #ffcdd2; /* light red */
    }
    #totalCourses {
      background-color: #c8e6c9; /* light green */
    }
  </style>
</head>
<body>

<div id="sidebar">
  <ul>
    <li> <a id="studentDashboard" href="student_dashboard.php">Dashboard</a></li>
  </ul>
</div>

</body>
</html>
