<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timetable</title>
    <style>
        /* Basic styling for demonstration purposes */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        #sidebar {
            width: 200px;
            background-color: #333;
            color: #fff;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding: 20px;
        }
        #content {
            margin-left: 220px;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>
    <div id="sidebar">
        <h2>Navigation</h2>
        <ul>
            <li><a href="#">Monday</a></li>
            <li><a href="#">Tuesday</a></li>
            <li><a href="#">Wednesday</a></li>
            <li><a href="#">Thursday</a></li>
            <li><a href="#">Friday</a></li>
        </ul>
    </div>
    <div id="content">
        <h1>Timetable</h1>
        <table>
            <thead>
                <tr>
                    <th>Time</th>
                    <th>Activity</th>
                    <th>Location</th>
                </tr>
            </thead>
            <tbody>
                <!-- Timetable entries will be dynamically generated here -->
                <tr>
                    <td>9:00 - 10:00</td>
                    <td>Meeting</td>
                    <td>Conference Room</td>
                </tr>
                <tr>
                    <td>10:00 - 12:00</td>
                    <td>Workshop</td>
                    <td>Training Room</td>
                </tr>
                <!-- More entries here -->
            </tbody>
        </table>
    </div>
</body>
</html>
