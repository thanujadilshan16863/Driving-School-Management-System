<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <title>Profile Dropdown</title>
  </head>
  <body>
    <header>
      <!-- header -->
      <h2 class="logo">Vajira Driving School</h2>
      <nav class="navigation">
             <a href="#services">Services</a>
             <a href="#packages">Packages</a>
          <a href="#contact">Contact Us</a>
      </nav>
      <div class="profile-dropdown">
        <div onclick="toggle()" class="profile-dropdown-btn">
          <div class="profile-img">
            <i class="fa-solid fa-circle"></i>
          </div>

          <span
            >Victoria
            <i class="fa-solid fa-angle-down"></i>
          </span>
        </div>

        <ul class="profile-dropdown-list">
          <li class="profile-dropdown-list-item">
            <a href="profile/index.html">
              <i class="fa-regular fa-user"></i>
              Edit Profile
            </a>
          </li>

          <li class="profile-dropdown-list-item">
            <a href="#">
              <i class="fa-solid fa-sliders"></i>
              Settings
            </a>
          </li>


          <li class="profile-dropdown-list-item">
            <a href="#">
              <i class="fa-solid fa-arrow-right-from-bracket"></i>
              Log out
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
    <script src="/assets/profile.js"></script>
    <img src="background.png" alt="">
  </body>
</html>
