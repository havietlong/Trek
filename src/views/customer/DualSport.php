<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="views/customer/recourses/css/style.css">
  <link rel="stylesheet" href="views/customer/recourses/css/danhmuc.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
  <title>Trek</title>
  <script src="https://kit.fontawesome.com/55b71602da.js" crossorigin="anonymous"></script>
</head>
<style>
  body {
    margin: 0;
    padding: 0;
    overflow-x: hidden;
  }

  .container {
    max-width: 100%;
    margin: 0 auto;
  }

  img {
    max-width: 100%;
    height: auto;
    display: block;
  }

  /* .tieude {
    display: flex;
    flex-direction: row;
  } */

  .productcard {
  position: relative;
  width: 600px;
  height: 180px;
  margin-bottom: 15px;
  /* margin-right: 30px; */
  transform: skew(-20deg);
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  flex-basis: 50%;

}

.productImage:hover {
  animation: reveal 0.5s forwards; 
  cursor: pointer;
}

@keyframes reveal{
  from {
    opacity: 100%;
  }
  to {
    opacity: 0%;
  }
}

.productImage {
  position: relative;
  width: 100%;
  height: 100%;
  background-color: white;
}

.productImage img {
  width: 100%;
  height: 100%;
  object-fit: contain;
  transform: skew(20deg);
}

.productname {
  position: absolute;
  bottom: -10px;
  left: -10px;
  background-color: white;/* Set the desired background color and opacity */
  border: 4px solid red;
  padding: 10px;
  font-size: 25px; /* Set the desired font size */
  /* font-weight: bold; Set the desired font weight */
  font-family: 'Fjalla One', sans-serif;
}

.tieude{
  display: flex;
  flex-wrap: wrap;

}

</style>

<body >

  <div class="menu-btn">
    <i class="fas fa-bars fa-2x"></i>
  </div>

  <div class="container">
    <!-- Nav -->
    <nav class="main-nav">
      <a href="home.html">
        <img src="https://logowik.com/content/uploads/images/trek-bicycle-corporation2920.jpg" alt="Microsoft" class="logo">
      </a>
      <ul class="main-menu">
        <li><a href="DualSport.html">Dual Sport</a></li>
        <li><a href="Domane.html">Domane</a></li>
        <li><a href="Émonda.html">Émonda</a></li>
        <li><a href="Slash.html">Slash</a></li>
        <li><a href="520.html">520</a></li>
        <li><a href="820.html">820</a></li>
      </ul>

      <ul class="right-menu">
        <li>
          <a href="#">
            <i class="fas fa-search"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-shopping-cart"></i>
          </a>
        </li>
      </ul>
    </nav>
  </div>
  <div>
    <img src="http://trekvietnam.vn/wp-content/uploads/2021/05/DS-Series-Top-Banner-MY21.jpg" alt="Trulli" width="1900" height="1000">
    <span style="position:absolute; top:800px; left:120px; font-size:70px; color:white;">DUAL SPORT</span>
  </div>
  <br>
  <br>
  <br>


  <div class="tieude">
    <p>Trek Dual Sport là dòng xe đạp thể thao thành phố dành cho tất cả những ai yêu thích khám phá. Dù chỉ là những
      con ngách nhỏ nơi con phố bạn sống, khu ngoại ô hay thậm chí là cả những cung đường mòn chưa ai biết đến. Thay vì
      hạn chế với những phụ tùng chỉ dành riêng cho thành phố hay đường mòn. Dual Sport hoà trộn tất cả trong một. Với
      khung sườn cấu tạo từ hợp kim độc quyền Trek Alpha Gold Aluminum, đi kèm với giảm xóc trước, vỏ xe bản rộng
      700x38C và hệ thống thắng đĩa hiệu quả trong mọi điều kiện, Dual Sport là dòng xe đạp thể thao phù hợp cho rất
      nhiều nhu cầu. Bền bỉ, mạnh mẽ nhưng cũng hết sức linh hoạt, nhẹ nhàng.</p>
  </div>
  <br>
  <br>
  <br>

  <div class="danhmuc">
    <div class="content_danhmuc">
      <b style="font-size: 20px;">Dòng xe đạp hybrid hoàn hảo cho mọi cung đường</b>
      <br>
      <br>

      <a> Nhanh nhẹn như một chiếc xe đua. Bền bỉ & linh hoạt một một chiếc xe leo núi. Dual Sport còn mang theo toàn bộ
        sự tiện lợi của xe đạp thành phố bằng việc hỗ trợ đầy đủ các ngàm gắn baga, vè xe và chân chống tích hợp.</a>
    </div>
    <div class="images">
      <img src="http://trekvietnam.vn/wp-content/uploads/2018/06/Trek-DS-Austin_NMahon401.jpg" width="600" height="400" alt="Your Image">
    </div>
    <div style="clear: both;"></div> <!-- dùng để xóa float -->
    <br>
    <br>
    <div class="content_danhmuc1">
      <b style="font-size: 20px;">Chức năng cùng vẻ ngoài thời thượng</b>
      <p>Khung của dòng xe đạp Trek Dual Sport mới mang vẻ ngoài hiện đại, thể thao
        <br>
        <br>
        <b style="font-size: 20px;">Đa năng - Đa dụng</b>
      <p>Xe đạp thành phố. Xe đạp địa hình. Đó là tuỳ bạn.</p>
      <p> Cho dù bạn đi đâu, dã ngoại thay đổi không khí hay luyện tập hàng ngày</p>


    </div>
    <div class="images1">
      <iframe width="600" height="400" src="https://www.youtube.com/embed/BK27EflLeP8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div style="clear: both;"></div> <!-- dùng để xóa float -->
  </div>
  <br>
  <br>
  <div class="tieude">
      <?php
      $i=1; 
      $i2=1;
      $i3=1;
      $i4=1;
      foreach($product as $product){ ?>
      
      <div class="productcard" style="background-image: url(<?= $product['picture_product2'] ?>);" id="product-<?= $i++ ?>">
      <a href="index.php?role=customer&action=productPage&id_product=<?= $product['id_product'] ?>">  
      <div class="productImage" id="productimage_<?= $i2++ ?>">
          <img id="img-<?= $i4++ ?>" src="<?= $product['picture_product'] ?>" >
        </div>
        <div class="productname" id="productname_<?= $i3++ ?>"><?= $product['name_product'] ?></div>
        </a>
      </div>
      
      <?php } ?>
  </div>
  <br>

  <div>
    <img src="http://trekvietnam.vn/wp-content/uploads/2021/05/DS-Series-Bot-Banner-MY21-2.jpg" width="1800" height="500">
    <span style="position:absolute; bottom:300px; right:120px; font-size:70px; color:white;"></span>
    <span style="position:absolute; bottom:300px; right:120px; font-size:70px; color:white;"></span>

  </div>



  <section class="links">
    <div class="links-inner">
      <ul>
        <li>
          <h3>What's New</h3>
        </li>
        <li><a href="#">Slash</a></li>
        <li><a href="#">Domane</a></li>
        <li><a href="#">Émonda</a></li>
        <li><a href="#">Dual Sport</a></li>
      </ul>
      <ul>
        <li>
          <h3>Product Line</h3>
        </li>
        <li><a href="#">Mountain bike</a></li>
        <li><a href="#">Off-road racing bike</a></li>
        <li><a href="#">Children's bicycle</a></li>
        <li><a href="#">City bike</a></li>
      </ul>
      <ul>
        <li>
          <h3>Developer</h3>
        </li>
        <li><a href="#">Ha Viet Long</a></li>
        <li><a href="#">Nguyen Duc Anh</a></li>

      </ul>
      <ul>
        <li>
          <h3>Company</h3>
        </li>
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

</body>

</html>