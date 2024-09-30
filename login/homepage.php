<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
< lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
        body {
            font-family: Century Gothic, sans-serif;
            background-image:url("bg1.gif");
        }
        .dashboard-btn {
            background-color: blue;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 25px;
            border-radius: 5px;
        }
        .dashboard-btn:hover {
            background-color: blue;
        }
        .logout-link {
            font-size: 30px; /* Bigger font size */
            color: blue; /* Different color */
            text-decoration: none; /* Removes underline */
            font-weight: bold; /* Makes the text bold */
        }
        .logout-link:hover {
            color: darkred;
        }
    </style>
</head>
<body>
    <div style="text-align:center; padding:15%;">
      <p  style="font-size:50px; font-weight:bold;color: white">
       Hello  <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
       :)
      </p>
      <a href="dashboard.html">
            <input type="button" name="dashboard" value="DASHBOARD" class="dashboard-btn">
        </a><br><br>
        <a href="logout.php" class="logout-link">Logout</a> <!-- Styled logout link -->
    </div>
</body>
</html>