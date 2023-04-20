<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="views/customer/recourses/css/style.css">
  <title>Trek</title>
  <script src="https://kit.fontawesome.com/55b71602da.js" crossorigin="anonymous"></script>
</head>
<body>
   
 <div class="menu-btn">
  <i class="fas fa-bars fa-2x"></i>
</div>

<div class="container">
  <!-- Nav -->
  <?php 
  require "views/customer/navBar.php";
  ?>

  <!-- Showcase -->
  <header class="showcase">
    
   
    <a href="#" class="btn">
      Shop Now <i class="fas fa-chevron-right"></i>
    </a>
  </header>

  <!-- Home cards 1 -->
  <section class="home-cards1">
    <div>
      <img src="https://hips.hearstapps.com/hmg-prod/images/madoneslr6disc-19-24123-a-alt6-1530838779.jpg" alt="">
      <h3>Dual Sport</h3>
      <p>
        Durable, strong but also very flexible and light.The perfect hybrid bike for every road
      </p>
      <a href="#">Learn More <i class="fas fa-chevron-right"></i></a>
    </div>
    <div>
      <img src="https://www.sefiles.net/images/library/zoom/trek-dual-sport-3-gen-5-419759-15.png" alt="" />
      <h3>Domane</h3>
      <p>
        Comfortable whether it's gravel roads, gravel trails through the woods, or hundreds of miles of coastal roads
      </p>
      <a href="#">Learn More <i class="fas fa-chevron-right"></i></a>
    </div>
    <div>
      <img src="http://trekvietnam.vn/wp-content/uploads/2021/01/Project_One_Icon_Checkerboard_Holographic_2.jpeg" alt="" />
      <h3>Émonda</h3>
      <p>
        You want the fastest, lightest road bike & the best wind cutting performance. Émonda is for you
      </p>
      <a href="#">Learn More <i class="fas fa-chevron-right"></i></a>
    </div>
    <div>
      <img src="http://trekvietnam.vn/wp-content/uploads/2020/11/Slash_Family-project-one.jpeg" alt="" />
      <h3>Slash</h3>
      <p>
        Equipped with leading technologies such as OCLV Mountain Carbon, Knock Block anti-collision head tube
      </p>
      <a href="#">Learn More <i class="fas fa-chevron-right"></i></a>
    </div>
  </section>

  <!-- Xbox -->
  <section class="xbox">
    <div class="content">
      <h2>Your very own dream bike</h2>
      <p>Xbox Game Pass Ultimate Xbox Live Gold and over 100 high-quality
        console and PC games. Play together with friends and discover your
        next favorite game.</p>
        <a href="#" class="btn">
          Join Now <i class="fas fa-chevron-right"></i>
        </a>
    </div>
  </section>

  <!-- Home cards 2 -->
    <section class="home-cards">
      <div>
        <img src="http://trekvietnam.vn/wp-content/uploads/2020/09/Grip-Tape-Cat-Top-Banner-Tape.jpg" alt="" />
        <h3>Bicycle racing</h3>
        <p>
          Unleash the power of your team.
        </p>
        <a href="#">Shop Now <i class="fas fa-chevron-right"></i></a>
      </div>
      <div>
        <img src="http://trekvietnam.vn/wp-content/uploads/2020/08/TK20_Procaliber_Lifestyle_20_Bot_Banner.jpg" alt="" />
        <h3>Unlock the power of learning</h3>
        <p>
          Get students future-ready with Windows 10 devices. Starting at $219.
        </p>
        <a href="#">Shop Now <i class="fas fa-chevron-right"></i></a>
      </div>
      <div>
        <img src="http://trekvietnam.vn/wp-content/uploads/2018/08/FX_Series_2020_Outdoor_1900x1000_1.jpg" alt="" />
        <h3>Windows 10 Enterprise</h3>
        <p>
          Download the free 90-day evaluation for IT professionals.
        </p>
        <a href="#">Download Now <i class="fas fa-chevron-right"></i></a>
      </div>
      <div>
        <img src="http://trekvietnam.vn/wp-content/uploads/2019/11/73304567_10157878714113296_8796414736733306880_o.jpg" alt="" />
        <h3>Explore Kubernetes</h3>
        <p>
          Learn how Kubernetes works and get started with cloud native app
          development today.
        </p>
        <a href="#">Get Started <i class="fas fa-chevron-right"></i></a>
      </div>
    </section>
    
    <!-- Carbon -->
    <section class="carbon dark">
      <div class="content">
        <h2></h2>
        <p></p>
          <a href="#" class="btn">
            Learn More <i class="fas fa-chevron-right"></i>
          </a>
      </div>
    </section>

    <!-- Follow -->
    <section class="follow">
      <p>Follow Trek</p>
      <a href="https://facebook.com">
        <img src="https://i.ibb.co/LrVMXNR/social-fb.png" alt="Facebook">
      </a>
      <a href="https://twitter.com">
        <img src="https://i.ibb.co/vJvbLwm/social-twitter.png" alt="Twitter">
      </a>
      <a href="https://linkedin.com">
        <img src="https://i.ibb.co/b30HMhR/social-linkedin.png" alt="Linkedin">
      </a>
    </section>
  </div>
  
    <!-- Footer -->
    <?php
    include "views/customer/footer.php";
    ?>
</body>
</html>