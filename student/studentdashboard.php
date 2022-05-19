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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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

      <!--main-->
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

        <!--Info section-->
        <section id="info">
          <!-- ------- Info card ---------->
          <div class="box card">
            <h1>ABOUT</h1>
            <table>
              <tr>
                <td>Name</td>
                <td>Madhur Tyagi</td>
              </tr>
              <tr>
                <td>UID</td>
                <td>20BCS7725</td>
              </tr>
              <tr>
                <td>Hostel Name</td>
                <td>Gobind Abode Boys Hostel</td>
              </tr>
              <tr>
                <td>Room No.</td>
                <td>313-B</td>
              </tr>
              <tr>
                <td>Valid Till</td>
                <td>July 2022</td>
              </tr>
            </table>
          </div>

          <!-- Percentage -->
          <div class="box percent-box">
            <div class="percent">
              <svg>
                <circle cx="70" cy="70" r="70"></circle>
                <circle cx="70" cy="70" r="70"></circle>
              </svg>
              <div class="number">
                <h2>87<span>%</span></h2>
              </div>
            </div>
            <h2 class="text">Attendance</h2>
          </div>

          <!--Important notice -->
          <div class="box notice-box">
            <h1 class="text">Importnant notice</h1>
            <ul>
              <li>Monday to friday lunch will be in LC Hostel</li>
              <li>Saturday and Sunday lunch will be in Gobind Hostel</li>
              <li>
                Breakfast timings on Monday to friday is 8:00 A.M-9:00 A.M
              </li>
              <li>
                Breakfast timing on Saturday and Sunday is 8:30 A.M-9:30 A.M
              </li>
            </ul>
          </div>
        </section>

        <!--Footer Section-->
        <footer id="footer">
          <div class="footer-content">
            <p>
              Chandigarh University
              <br>
              Gharuan,Mohali(Punjab)
              <br>
              General Helpline No:+91-160-3051003, +91-160-3014444
              <br>
              (Mr.Jaspreet Singh)
            </p>
            <ul class="socials">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>  
            </ul>
          </div>
          <div class="footer-bottom">
            <p>copyright &copy;2022 ChandigarhUniversity. designed by <span>MSKP</span></p>
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
