<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Vajira Driving School</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <header>
        <!-- header -->
        <h2 class="logo">Vajira Driving School</h2>
        <nav class="navigation">
             <a class="active" href="#home">Home</a>
              <a href="#about">About</a>
               <a href="#trainers">Trainers</a>
               <a href="#packages">Packages</a>
            <a href="#contact">Contact Us</a>
            <button class="btnLogin-popup">Login</button>
           
            <script>
              // Get the login button element
              var loginButton = document.querySelector('.btnLogin-popup');
          
              // Add click event listener to the login button
              loginButton.addEventListener('click', function() {
                  // Load login.html page
                  window.location.href = 'login.php';
              });
          </script>
           <button class="btnLogin-popupX">Sign Up</button>
          <script>
            // Get the login button element
            var loginButton = document.querySelector('.btnLogin-popup');
        
            // Add click event listener to the login button
            loginButton.addEventListener('click', function() {
                // Load login.html page
                window.location.href = 'login.php';
            });
        
            // Get the sign-up button element
            var signupButton = document.querySelector('.btnLogin-popupX');
        
            // Add click event listener to the sign-up button
            signupButton.addEventListener('click', function() {
                // Load register.html page from the registration form folder
                window.location.href = 'Registration Form/register.php';
            });
        </script>
        </nav>
    </header>
<!-- home page -->
    <section id="home" class="hero">
        <div class="hero-text">
           
            <h1><span>Vajira</span> Driving School</h1>
            <p>"Drive With Confidence,Learn With Us"</p>
            <a href="#contact" class="ctaa"><ion-icon name="play"></ion-icon>Contact us</i></a>

            

        </div>

    </section>
<!-- section devide home page -->
    <section class="hero1" id="about">
        <div class="padding-box"></div>
        <div class="hero-content">
          <h1 class="h1x">About Us</h1>
            <h1 class="xyz">Who we are?</h1>
            <p class="para">Established in Gelioya Town, Vajira Learners Driving School has been a trusted name in
                 driving education since its inception. With a legacy of excellence, we are committed 
                 to providing top-quality training, making us the preferred choice for aspiring drivers in the Gelioya Town area.</p>
            <h1 class="xyz">What we are capable of?</h1>  
            <p class="para">Getting your Driving license is a millstone in your life. Since the moment
                 you sit on the driver position our concentrate on you to train & improve your 
                 driving skills. We have great squad of Instructors who will teach you easy tips 
                 to get though your driving practical test on the first attempt. You may be a just 
                 after 18 or a busy person with your work. That’s why we offer flexible training hours 
                 to you to get your license easily. All vehicles are comfortable & well maintained. 
                 Trainings will not happen on cloistral roads on a silent area. All the trains will do on public streets & roads to make you a road ready driver.</p>
          </div>
    </section>

    <!-- services page -->
        <section class="hero2" id="trainers">
          <div class="cardsx">
            <h1>OUR TRAINERS</h1>
            <div class="container">
                <div class="card">
                  <div class="img">
                    <img src="images\images11.jpeg">
                  </div>
                  <div class="top-text">
                    <div class="name">Trainer 01</div>
                    <p> Wikramarachchi</p>
                  </div>
                  <div class="bottom-text"><br>
                    <div class="text">Hi i am Malinda Wikramarachchi and i am training students since 2006. I have 18 years experiance in this field.</div>
                    <div class="btn">
                      <div class="star-rating">
                        <span>★★★★★</span>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="img">
                    <img src="images\profile-1.jpeg">
                  </div>
                  <div class="top-text">
                    <div class="name">Trainer 02</div>
                    <p>Liyana</p>
                  </div>
                  <div class="bottom-text"><br>
                    <div class="text">Hi i am Liyana Mal and i am training students since 2012. I have 12 years experiance in this field.</div>
                    <div class="btn">
                      <div class="star-rating">
                        <span>★★★★☆</span>
                    </div>
                    </div>
                  </div>
                </div>
          
                <div class="card">
                  <div class="img">
                    <img src="images/profile-3.jpeg">
                  </div>
                  <div class="top-text">
                    <div class="name">Trainer 03</div>
                    <p>Kamal</p>
                  </div>
                  <div class="bottom-text"><br>
                    <div class="text">Hi i am Kamal Munasinghe Mal and i am training students since 2012. I have 6 years experiance in this field.</div>
                    <div class="btn">
                      <div class="star-rating">
                        <span>★★★★☆</span>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                    <div class="img">
                      <img src="images/profile3.jpg">
                    </div>
                    <div class="top-text">
                      <div class="name">Trainer 04</div>
                      <p>Dilshan</p>
                    </div>
                    <div class="bottom-text"><br>
                      <div class="text">Hi i am Dilshan  and i am training students since 2019. I have 5 years experiance in this field.</div>
                      <div class="btn">
                        <div class="star-rating">
                          <span>★★★☆☆</span>
                      </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            
        </section>

        
        <!-- packages page -->
           <section class="hero3" id="packages">
            <div class="cards">
                <h2 class="header">
                  Our packages
                </h2>
                <div class="services">
                   <div class="content content-1">                     
                      <h2>
                         <span>Light</span>
                      </h2>
                      <p>
                         The light package is the most common package among the students and it's the recommended plan for a startup student.
                      </p>
                      <a href="#">Read More</a>
                   </div>
                   <div class="content content-2">
                      <div class="fab fa-instagram"></div>
                      <h2>
                         <span>Heavy</span>
                      </h2>
                      <p>
                         The heavy package can obtaint students those who have 5 years light vehicle driving license.
                      </p>
                      <a href="#">Read More</a>
                   </div>
                   <div class="content content-3">
                      
                      <h2>
                         <span>Flexible</span>
                      </h2>
                      <p>
                         This package is inroduced for the students those who are willing to obtain diffrent categories driving license.
                      </p>
                      <a href="#">Read More</a>
                   </div>
                </div>
             </div>
        </section>

           <!-- contact Us -->
               <section class="hero4" id="contact">
                <div class="contact-container">
                <form action="file3.php" method="POST" class="contact-left">
                    <div class="contact-left-title">
                    <h2>Get in touch</h2>
                    <hr>
                </div>
                <input type="text" name="name" placeholder="Your Name" class="contact-inputs" required>
                <input type="text" name="email" placeholder="Your email" class="contact-inputs" required>
                <input type="text" name="con" placeholder="Your Contact" class="contact-inputs" required>
                <textarea name="message" placeholder="Your Message" class="contact-inputs" required></textarea>
                <button type="submit">Submit<ion-icon name="arrow-forward"></ion-icon></button>
                </form>
                <div class="contact-right">
                    <img src="right_img.png" alt="">
                </div>
            </div>
               </section>
               <section class="hero4" id="contact">
               <section class="hero5" id="location">
                <div class="location">
                  <section class="hero4" id="contact">
                    <div class="contact-container">
                    <form action="" class="contact-left">
                        <div class="contact-left-title">
                        <h2>Location</h2>
                        <hr>
                    </div>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.557513159545!2d80.59767560939386!3d7.214577875923019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae36f062692739f%3A0x921f2ecbf946d9b9!2sGelioya%2C%20Sri%20Lanka!5e0!3m2!1sen!2ssg!4v1715753278464!5m2!1sen!2ssg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
               </section>

    

<script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <footer>
                    <div class="containerX">
                        <div class="footer-content">
                            <h3>Contact Us</h3>
                            <p>Email:Info@example.com</p>
                            <p>Phone:+121 56556 565556</p>
                            <p>Address:Your Address 123 street</p>
                        </div>
                        <div class="footer-content">
                            <h3>Quick Links</h3>
                             <ul class="list">
                                <li><a href="#home">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#trainers">Trainers</a></li>
                                <li><a href="#packages">Packages</a></li>
                                <li><a href="#contact">Contact Us</a></li>
                             </ul>
                        </div>
                        <div class="footer-content">
                            <h3>Follow Us</h3>
                            <ul class="social-icons">
                             <li><a href=""><i class="fab fa-facebook"></i></a></li>
                             <li><a href=""><i class="fab fa-twitter"></i></a></li>
                             <li><a href=""><i class="fab fa-instagram"></i></a></li>
                             <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                            </div>
                    </div>
                    <div class="bottom-bar">
                        <p>&copy; 2024 Vajira Driving School.All rights reserved</p>
                    </div>
                </footer>

                <script src="//code.tidio.co/x2uyjpbjvgdpyuu3nbktrije8lv7m65m.js" async></script>

<script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
</body>

</html>
