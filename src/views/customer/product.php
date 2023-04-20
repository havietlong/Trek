<?php 
foreach($product as $product){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="views/customer/recourses/css/style.css">
  <link rel="stylesheet" href="views/customer/recourses/css/product.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  
  <title>Trek</title>
</head>
<body>
   
 <div class="menu-btn">
  <i class="fas fa-bars fa-2x"></i>
</div>

<div class="container">
  <!-- Nav -->
  <?php
  require "views/customer/navBar.php" 
  ?>

  <div class = "card-wrapper">
    <div class = "card">
      <!-- card left -->
      <div class = "product-imgs">
        <div class = "img-display">
          <div class = "img-showcase">
            <img src = "<?= $product['picture_product'] ?>" alt = "image">
            <img src = "<?= $product['picture_product2'] ?>" alt = " image">
            <img src = "<?= $product['picture_product3'] ?>" alt = " image">
            <img src = "<?= $product['picture_product4'] ?>" alt = " image">
          </div>
        </div>
        <div class = "img-select">
          <div class = "img-item">
            <a href = "#" data-id = "1">
              <img src = "<?= $product['picture_product'] ?>" alt = " image">
            </a>
          </div>
          <div class = "img-item">
            <a href = "#" data-id = "2">
              <img src = "<?= $product['picture_product2'] ?>" alt = " image">
            </a>
          </div>
          <div class = "img-item">
            <a href = "#" data-id = "3">
              <img src = "<?= $product['picture_product3'] ?>" alt = " image">
            </a>
          </div>
          <div class = "img-item">
            <a href = "#" data-id = "4">
              <img src = "<?= $product['picture_product4'] ?>" alt = " image">
            </a>
          </div>
        </div>
      </div>
      <!-- card right -->
      <div class = "product-content">
        <h2 class = "product-title"><?= $product['name_product'] ?></h2>
        <!-- <a href = "home.html" class = "product-link">Visit trek store</a> -->
        <!-- <div class = "product-rating">
          <i class = "fas fa-star"></i>
          <i class = "fas fa-star"></i>
          <i class = "fas fa-star"></i>
          <i class = "fas fa-star"></i>
          <i class = "fas fa-star-half-alt"></i>
          <span>4.7(21)</span>
        </div> -->

        <div class = "product-price">
          <p class = "last-price">Old Price: <span>$257.00</span></p>
          <p class = "new-price">New Price: <span>$249.00 (5%)</span></p>
        </div>

        <div class = "product-detail">
          <h2>about this item: </h2>
          <p>Khung xe Alpha Silver Aluminum với tính năng đi dây âm sườn, giúp bảo vệ cáp trong quá trình di chuyển cũng như tạo ra cái nhìn gọn gàng và cao cấp cho dòng xe này. Bên cạnh khung sườn, hệ thống phuộc hơi RockShox Judy Silver cao cấp với giảm chấn TurnKey, khả năng khoá phuộc, hệ thống thắng đĩa dầu Shimano, vành Tubeless Ready Bontrager Kovee và hệ thống truyền động SRAM SX Eagle 1x12 tốc độ, kết hợp với ổ líp dải rộng 11-50 đảm bảo cho mọi địa hình, dù dốc cao đến mấy.</p>
          <p>Với bộ bánh Tubeless-Ready, hệ thống phuộc hơi RockShox cao cấp, bộ truyền động dải rộng và các phụ tùng chất lượng chuẩn MTB. Marlin 8 là lựa chọn hoàn hảo cho những đường đua off-road marathon cũng như những cuộc đua địa hình băng đồng XC</p>
          <ul>
            <li>Color: <span>Black</span></li>
            <li>Available: <span>in stock</span></li>
            <li>Category: <span>Marlin</span></li>
            <li>Shipping Area: <span>All over the world</span></li>
            <li>Shipping Fee: <span>Free</span></li>
          </ul>
        </div>

        <div class = "purchase-info">
          <input type = "number" min = "0" value = "1">
          <button type = "button" class = "btn">
            Add to Cart <i class = "fas fa-shopping-cart"></i>
          </button>
          
        </div>

        <div class = "social-links">
          <p>Share At: </p>
          <a href = "#">
            <i class = "fab fa-facebook-f"></i>
          </a>
          <a href = "#">
            <i class = "fab fa-twitter"></i>
          </a>
          <a href = "#">
            <i class = "fab fa-instagram"></i>
          </a>
          <a href = "#">
            <i class = "fab fa-whatsapp"></i>
          </a>
          <a href = "#">
            <i class = "fab fa-pinterest"></i>
          </a>
        </div>
      </div>
    </div>
  </div>



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
    <!-- Links -->
    <section class="links">
      <div class="links-inner">
        <ul>
          <li><h3>What's New</h3></li>
          <li><a href="#">Slash</a></li>
          <li><a href="#">Domane</a></li>
          <li><a href="#">Émonda</a></li>
          <li><a href="#">Dual Sport</a></li>
        </ul>
        <ul>
          <li><h3>Product Line</h3></li>
          <li><a href="#">Mountain bike</a></li>
          <li><a href="#">Off-road racing bike</a></li>
          <li><a href="#">Children's bicycle</a></li>
          <li><a href="#">City bike</a></li>
        </ul>
        <ul>
          <li><h3>Developer</h3></li>
          <li><a href="#">Ha Viet Long</a></li>
          <li><a href="#">Nguyen Duc Anh</a></li>

        </ul>
        <ul>
          <li><h3>Company</h3></li>
          <li><a href="#">Careers</a></li>
          <li><a href="#">About Trek</a></li>
          <li><a href="#">Company news</a></li>
          <li><a href="#">Privacy at Trek</a></li>
          <li><a href="#">Inverstors</a></li>
        </ul>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
      <div class="footer-inner">
        <div><i class="fas fa-globe fa-2x"></i> English (United States)</div>
        <ul>
          <li><a href="#">Sitemap</a></li>
        <li><a href="#">Contact Trek</a></li>
        <li><a href="#">Privacy & cookies</a></li>
        <li><a href="#">Terms of use</a></li>
        <li><a href="#">Trademarks</a></li>
        <li><a href="#">Safety & eco</a></li>
        <li><a href="#">About our ads</a></li>
        <li><a href="#">&copy; Microsoft 2020</a></li>
        </ul>
      </div>
    </footer>
    <script src="https://kit.fontawesome.com/55b71602da.js" crossorigin="anonymous"></script>
    <script src="views/customer/recourses/js/product.js"></script>
</body>
</html>
<?php 
}
?>