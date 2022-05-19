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

        <!--------------------Complain form---------------->
        <section id="complain">
            <div class="banner2">Complaints</div>
            <div class="Misscelaneous">Please tell us what it is,and we'll address the issue</div>
            <form class="complain-form">
                <label for="name">Enter Your Name</label>
                <input type="text" id="name" class="form-input1">
                <label for="UID">Enter Your UID</label>
                <input type="text" id="UID" class="form-input1">
                <label for="email">Enter Your Email</label>
                <input type="email" id="email" class="form-input1">
                <label for="Hostel-Name">Enter Your Hostel</label>
                <select name="Select" id="Hostel-Name" class="form-input1">
                    <option value="Select">--Select--</option>
                    <option value="NC">Nek Chand Hostel</option>
                    <option value="Zakir">Zakir Hostel</option>
                    <option value="LC">Le Corbusier Hostel</option>
                    <option value="Gobind">Gobind Abode Hostel</option>
                    <option value="Tagore">Tagore Hostel</option>
                    <option value="Sukhna">Sukhna Hostel</option>
                    <option value="Shivalik">Shivalik Hostel</option>
                    <option value="Sachdeva">Sachdeva Hostel</option>
                    <option value="City">City Hostel</option>
                </select>
                <label for="complain-type">Type of Complain</label>
                <select name="Select" id="complain-type" class="form-input1">
                    <option value="Select">--Select--</option>
                    <option value="Wifi-Connectivity">Wifi Connectivity</option>
                    <option value="Mess-Food">Mess Food</option>
                    <option value="drinking-water">Drinking Water</option>
                    <option value="water-supply">Water Supply</option>
                    <option value="Electricity">Electricity</option>
                    <option value="ac-cooler">AC/Cooler</option>
                    <option value="Cleaning">Cleaning</option>  
                    <option value="appliance">Electrical appliance</option>
                    <option value="Repairing">Repairing</option>   
                    <option value="other">Other</option>            
                </select>
                <label for="Explain">Tell us about the issue</label>
                <textarea name="" id="Explain" class="form-input1" cols="30" rows="4"></textarea>
                <div class="form-input1 cont-submit">
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
