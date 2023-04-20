<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>CodePen - Bootstrap Admin Dashboard demo</title>
  <link rel="stylesheet" href="views/staff/recourses/css/styleb.css" />
</head>
<style>
  .container {
    display: flex;
    align-items: center;
    margin-top: 20px;
    position: relative;
    left: -15px;
  }

  .image-preview {
    width: 100px;
    height: 100px;
    background-color: #e0e0e0;
    margin-bottom: 20px;
    position: relative;
    overflow: hidden;
    margin-right: 2px;
  }

  .image-preview img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .image-preview input[type="file"] {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    cursor: pointer;
  }

  .image-preview::before {
    content: "Click to upload image";
    display: flex;
    justify-content: center;
    align-items: center;
    color: #ffffff;
    font-size: 15px;
    font-weight: bold;
    background-color: rgba(0, 0, 0, 0.5);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
  }

  .image-preview:hover::before {
    opacity: 1;
  }
</style>

<body>
  <!-- partial:index.partial.html -->

  <head>
    <!-- <script src="//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js"></script> -->
    <!-- <script src="//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js"></script> -->
    <!-- <script src="//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js"></script> -->
    <meta charset="UTF-8" />
    <meta name="robots" content="noindex" />
    <link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
    <link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
    <link rel="canonical" href="https://codepen.io/jaca90/pen/vZJZMx?depth=everything&order=popularity&page=10&q=statistics&show_forks=false" />

    <link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
    <link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
  </head>

  <body class="sidebar-is-reduced">
    <header class="l-header">
      <div class="l-header__inner clearfix">
        <div class="c-header-icon js-hamburger">
          <div class="hamburger-toggle">
            <span class="bar-top"></span><span class="bar-mid"></span><span class="bar-bot"></span>
          </div>
        </div>
        <div class="c-header-icon has-dropdown">
          <span class="c-badge c-badge--header-icon animated shake">87</span><i class="fa fa-bell"></i>
          <div class="c-dropdown c-dropdown--notifications">
            <div class="c-dropdown__header"></div>
            <div class="c-dropdown__content"></div>
          </div>
        </div>
        <div class="c-search">
          <input class="c-search__input u-input" placeholder="Search..." type="text" />
        </div>
        <div class="header-icons-group">
          <div class="c-header-icon basket">
            <span class="c-badge c-badge--header-icon animated shake">12</span><i class="fa fa-shopping-basket"></i>
          </div>
          <div class="c-header-icon logout">
            <a href="index.php?role=staff&action=logOut"> <i class="fa fa-power-off"></i></a>
          </div>
        </div>
      </div>
    </header>
    <div class="l-sidebar">
      <div class="logo">
        <div class="logo__txt">D</div>
      </div>
      <div class="l-sidebar__content">
        <nav class="c-menu js-menu">
          <ul class="u-list">
            <li class="c-menu__item is-active">
              <div class="c-menu__item__inner">
                <i class="fa fa-plane"></i>
                <div class="c-menu-item__title"><span>Flights</span></div>
              </div>
            </li>
            <li class="c-menu__item has-submenu">
              <div class="c-menu__item__inner">
                <i class="fa fa-puzzle-piece"></i>
                <div class="c-menu-item__title"><span>Modules</span></div>
                <div class="c-menu-item__expand js-expand-submenu">
                  <i class="fa fa-angle-down"></i>
                </div>
              </div>
              <ul class="c-menu__submenu u-list">
                <li>Payments</li>
                <li>Maps</li>
                <li>Notifications</li>
              </ul>
            </li>
            <li class="c-menu__item has-submenu">
              <div class="c-menu__item__inner">
                <i class="fa fa-bar-chart"></i>
                <div class="c-menu-item__title"><span>Statistics</span></div>
              </div>
            </li>
            <li class="c-menu__item has-submenu">
              <div class="c-menu__item__inner">
                <i class="fa fa-gift"></i>
                <div class="c-menu-item__title"><span>Gifts</span></div>
              </div>
            </li>
            <li class="c-menu__item has-submenu">
              <div class="c-menu__item__inner">
                <i class="fa fa-cogs"></i>
                <div class="c-menu-item__title"><span>Settings</span></div>
              </div>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </body>
  <main class="l-main">
    <div class="content-wrapper content-wrapper--with-bg">
      <h1 class="page-title">Dashboard</h1>
      <a href="index.php?role=staff&action=createProduct">
        <p>new product</p>
      </a>
      <div class="page-content">
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <!-- <th>Author</th> -->
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            $i2 = 1;
            $i3 = 1;
            $i4 = 1;
            $i5 = 1;
            $i6 = 1;
            $i7 = 1;
            foreach ($product as $product) {
            ?>
              <tr data-target="#row<?= $product['id_product'] ?>">
                <td><?= $product['id_product'] ?></td>
                <td><?= $product['name_product'] ?></td>
                <td><?php if ($product['quantity_product'] > 0) {
                      echo "In stock";
                    } ?></td>
              </tr>
              <tr id="row<?= $product['id_product'] ?>" class="collapse">
                <td colspan="3">
                  <div class="row-content">
                    <form action="index.php?role=staff&action=updateProduct&row=<?= $i5++ ?>" method="post" enctype="multipart/form-data">
                      <div class="content_row">

                        <div class="right">

                          Name <input name="name_product" value="<?= $product['name_product'] ?>" /> Date <input disabled value="<?= $product['time_product'] ?>" /> Author <input />
                          <input hidden name="id_product" value="<?= $product['id_product'] ?>" />
                          Post
                          <div class="posts">
                          <Select name="id_description" >
                            <?php 
                            $connect = mysqli_connect('localhost', 'root', '', 'trek');
                            $sql = "SELECT * FROM description";
                            $result = $connect->query($sql);
                            while ($row = $result->fetch_assoc()) { ?>          
                              <option value="<?php echo $row['id_description']; ?>"><?php echo $row['name_description']; ?></option>
                            <?php } ?>
                            </Select>
                            <a class="btn" href="index.php?role=staff&action=editPost&id_product=<?= $product['id_product'] ?>">...</a>
                          </div>

                          <div class="options">
                            <a href="index.php?role=staff&action=deleteProduct&id_product=<?= $product['id_product'] ?>">Delete</a>
                            <button type="submit">Update</button>
                          </div>
                        </div>
                        <div class="middle">
                          Type
                          <Select name="id_type" style="height: 3vh;">
                            <option value="1">Dual Sport</option>
                            <option value="2">Domane</option>
                            <option value="3">Émonda</option>
                            <option value="4">Slash</option>
                            <option value="5">520</option>
                            <option value="6">820</option>
                          </Select>
                          Quantity
                          <input name="quantity_product" value="<?= $product['quantity_product'] ?>">
                          <div class="container">
                            <div class="image-preview<?= $i++ ?> image-preview">
                              <input type="file" accept="image/*" name="image<?= $i4++ ?>" onchange="previewImage(<?= $i3++ ?>, event)">
                              <img id="preview<?= $i2++ ?>" src="<?= $product['picture_product'] ?>">
                              <input type="hidden" name="image<?= $i7++ ?>" id="data-image-<?= $i6++ ?>" value="<?= $product['picture_product'] ?>">
                            </div>

                            <div class="image-preview<?= $i++ ?> image-preview">
                              <input type="file" accept="image/*" name="image<?= $i4++ ?>" onchange="previewImage(<?= $i3++ ?>, event)">
                              <img id="preview<?= $i2++ ?>" src="<?= $product['picture_product2'] ?>">
                              <input type="hidden" name="image<?= $i7++ ?>" id="data-image-<?= $i6++ ?>">
                            </div>

                            <div class="image-preview<?= $i++ ?> image-preview">
                              <input type="file" accept="image/*" name="image<?= $i4++ ?>" onchange="previewImage(<?= $i3++ ?>, event)">
                              <img id="preview<?= $i2++ ?>" src="<?= $product['picture_product3'] ?>">
                              <input type="hidden" name="image<?= $i7++ ?>" id="data-image-<?= $i6++ ?>">
                            </div>

                            <div class="image-preview<?= $i++ ?> image-preview">
                              <input type="file" accept="image/*" name="image<?= $i4++ ?>" onchange="previewImage(<?= $i3++ ?>, event)">
                              <img id="preview<?= $i2++ ?>" src="<?= $product['picture_product4'] ?>">
                              <input type="hidden" name="image<?= $i7++ ?>" id="data-image-<?= $i6++ ?>">
                            </div>
                          </div>
                        </div>
                    </form>
                  </div>
      </div>
      </td>
      </tr>
    <?php } ?>
    </tbody>
    </table>
    </div>
    </div>
  </main>
  <!-- <script src="//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://use.fontawesome.com/2188c74ac9.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- partial -->
  <script src="views/staff/recourses/js/scripta.js"></script>
  <script>
    function previewImage(number, event) {
      const preview = document.querySelector(`#preview${number}`);
      const file = event.target.files[0];
      const reader = new FileReader();
      const imageDataInput = document.querySelector(`#data-image-${number}`);

      reader.addEventListener('load', function() {
        preview.src = this.result;
        // Set the imageData as the value of the input element with the ID "data-image-X"
        imageDataInput.value = this.result;
      });

      if (file) {
        reader.readAsDataURL(file);
      }
    }
  </script>

</body>

</html>