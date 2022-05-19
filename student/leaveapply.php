<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Student login</title>
    <link rel="stylesheet" href="CSS\style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <script src="./script.js"></script>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap"
    />
  </head>
  <body>
    <div class="container">
      <div class="navigation">
        <ul>
          <li>
            <a href="#">
              <span class="icon"
                ><ion-icon name="logo-web-component"></ion-icon
              ></span>
              <span class="title">Hostel Management System</span>
            </a>
          </li>
          <li>
            <a href="studentdashboard.php">
              <span class="icon"
                ><ion-icon name="home-outline"></ion-icon
              ></span>
              <span class="title">Student Dashboard</span>
            </a>
          </li>
          <li>
            <a href="leaveapply.php">
              <span class="icon"
                ><ion-icon name="clipboard-outline"></ion-icon
              ></span>
              <span class="title">Apply for leave </span>
            </a>
          </li>

          <li>
            <a href="messmenu.php">
              <span class="icon"
                ><ion-icon name="grid-outline"></ion-icon
              ></span>
              <span class="title">Mess Menu</span>
            </a>
          </li>
          <li>
            <a href="complain.php">
              <span class="icon"
                ><ion-icon name="help-outline"></ion-icon
              ></span>
              <span class="title">Complain</span>
            </a>
          </li>
          <li>
            <a href="settings.php">
              <span class="icon"
                ><ion-icon name="settings-outline"></ion-icon
              ></span>
              <span class="title">Settings</span>
            </a>
          </li>
          <li>
            <a href="logout.php">
              <span class="icon"
                ><ion-icon name="log-out-outline"></ion-icon
              ></span>
              <span class="title">Sign Out</span>
            </a>
          </li>
        </ul>
      </div>

      <!---------------------main----------------->
      <div class="main">
        <nav class="topbar">
          <div class="toggle"><ion-icon name="menu-outline"></ion-icon></div>

          <!--search-->
          <div class="search">
            <label>
              <input type="text" placeholder="Search here" />
              <ion-icon name="search-outline"></ion-icon>
            </label>
          </div>
          <!--userImg-->
          <div class="user">
            <img src="image.jpeg" />
          </div>
        </nav>
        <!--Welcome Message-->
        <section class="dashboard-welcome">
          <h1 id="user-hello">Hello!! <?php echo $_SESSION['email'];?></h1>
        </section>

        <!--------------------------Form Section--------------------->
        <section id="leave-form">
            <div class="banner">Apply for Hostel Leave</div>
          <form class="form-group">
            <label for="leave-type">Type of Leave</label>
            <select name="Select" id="leave-type" class="form-input">
                <option value="Select">--Select--</option>
                <option value="day-out">Day Out</option>
                <option value="night-out">Night Out / Leave</option>
            </select>
            <label for="from-date">From Date</label>
            <input type="date" id="from-date" class="form-input"> 
            <label for="to-date">To Date</label>
            <input type="date" name="" id="to-date" class="form-input">
            <label for="from-time">From Time</label>
            <input type="time" class="form-input">
            <label for="to-time">To time</label>
            <input type="time" id="to-time" class="form-input">
            <label for="purpose">Purpose of leave</label>
            <textarea name="" id="purpose" class="form-input" cols="30" rows="4"></textarea>
            <div class="form-input cont-submit">
                <input id="submit" type="submit" value="Submit">
            </div>
        </form>
        </section>

        <!--Footer Section-->
        <footer id="footer">
          <div class="footer-content">
            <p>
              Chandigarh University
              <br />
              Gharuan,Mohali(Punjab)
              <br />
              General Helpline No:+91-160-3051003, +91-160-3014444
              <br />
              (Mr.Jaspreet Singh)
            </p>
            <ul class="socials">
              <li>
                <a href="#"><i class="fa fa-facebook"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-google-plus"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-youtube"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-linkedin-square"></i></a>
              </li>
            </ul>
          </div>
          <div class="footer-bottom">
            <p>
              copyright &copy;2022 ChandigarhUniversity. designed by
              <span>MSKP</span>
            </p>
          </div>
        </footer>
      </div>
    </div>

    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>

    <script>
      //MenuToggle
      let toggle = document.querySelector(".toggle");
      let navigation = document.querySelector(".navigation");
      let main = document.querySelector(".main");

      toggle.onclick = function () {
        navigation.classList.toggle("active");
        main.classList.toggle("active");
      };

      // add hovered class in selected list item
      let list = document.querySelectorAll(".navigation li");
      function activelink() {
        list.forEach((item) => item.classList.remove("hovered"));
        this.classList.add("hovered");
      }
      list.forEach((item) => item.addEventListener("mouseover", activelink));
    </script>
  </body>
</html>
