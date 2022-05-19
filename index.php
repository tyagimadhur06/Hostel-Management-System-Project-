<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <title>Home Page</title>
    <link rel="stylesheet" href="admin/css/style.css">
</head>
<body>
    <div class="banner">
        <h1>
            Hostel Management System
        </h1>
        <section class="box">
            <section class="admin">
                <!-- <img src="/images/admin2.jpg" alt="admin-logo"> -->
                <a href="admin/login.php"><img src="admin/admin2.jpg" alt="admin-logo"><span class="text-banner">Admin Login</span></a>
                
            </section>
            <section class="student">
                <!-- <img class="img-std" src="/images/schoolboy-studying-in-his-laptop.jpg" alt="student-logo"> -->
                <a href="student/login.php"><img class="img-std" src="admin/schoolboy-studying-in-his-laptop.jpg" alt="student-logo"><span class="text-banner">Student Login</span></a>
                
            </section>
        </section>
    </div>
    
    

</body>
</html>