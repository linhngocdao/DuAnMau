<!--================Home Banner Area =================-->
<section class="home_banner_area mb-40">
  <div class="banner_inner d-flex align-items-center">
    <div class="container">
      <div class="banner_content row">
        <div class="col-lg-12">
          <p class="sub text-uppercase">Bộ sưu tập thời trang nam</p>
          <h3><span>Show</span> Your <br />Personal <span>Style</span></h3>
          <h4>Đẳng cấp phái mạnh</h4>
          <a class="main_btn mt-40" href="">Sưu tập ngay</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================End Home Banner Area =================-->

<!-- Start feature Area -->
<section class="feature-area section_gap_bottom_custom">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="single-feature">
          <a href="#" class="title">
            <i class="flaticon-money"></i>
            <h3>Money back gurantee</h3>
          </a>
          <p>Shall open divide a one</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="single-feature">
          <a href="#" class="title">
            <i class="flaticon-truck"></i>
            <h3>Free Delivery</h3>
          </a>
          <p>Shall open divide a one</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="single-feature">
          <a href="#" class="title">
            <i class="flaticon-support"></i>
            <h3>Alway support</h3>
          </a>
          <p>Shall open divide a one</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="single-feature">
          <a href="#" class="title">
            <i class="flaticon-blockchain"></i>
            <h3>Secure payment</h3>
          </a>
          <p>Shall open divide a one</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End feature Area -->

<!--================ Sản phẩm mới nhất =================-->
<section class="feature_product_area section_gap_bottom_custom">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="main_title">
          <h2><span>Sản phẩm mới nhất</span></h2>
        </div>
      </div>
    </div>

    <div class="row">
      <?php 
      $productNews=  getAllProHome(3);
      // $productNews = getAllProHome();
      
      foreach ($productNews as $key => $value) {
        extract($value);
        $linksp = "index.php?act=detailProduct&id=" . $value['id'];
        echo '
        <div class="col-lg-4 col-md-6">
        <div class="single-product">
          <div class="product-img">
            <img class="img-fluid w-100" src="' . $ROOT . '../public/image/' . $value['img'] . '" alt="" />
            <div class="p_icon">
              <a href="'.$linksp.'">
                <i class="ti-eye"></i>
              </a>
              <a href="#">
                <i class="ti-shopping-cart"></i>
              </a>
            </div>
          </div>
          <div class="product-btm">
            <a href="#" class="d-block">
              <h4>' . $value['name'] . '</h4>
            </a>
            <div class="mt-3">
              <span class="mr-4">' . currency_format($value['price']) . '</span>
            </div>
          </div>
        </div>
      </div>
        ';
      }
      ?>
    </div>
  </div>
</section>
<!--================ Kết thúc sản phẩm mới nhất =================-->

<!--================ Offer Area =================-->
<section class="offer_area">
  <div class="container">
    <div class="row justify-content-center">
      <div class="offset-lg-4 col-lg-6 text-center">
        <div class="offer_content">
          <h3 class="text-uppercase mb-40">all men’s collection</h3>
          <h2 class="text-uppercase">50% off</h2>
          <a href="#" class="main_btn mb-20 mt-5">Mua ngay</a>
          <p>Ưu đã trong ngày hôm nay</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================ End Offer Area =================-->


<!--================ Tất cả sản phẩm =================-->
<section class="inspired_product_area section_gap_bottom_custom">
  <div class="container">
    <div class="row justify-content-center pt-4">
      <div class="col-lg-12">
        <div class="main_title">
          <h2><span>Sản phẩm</span></h2>
        </div>
      </div>
    </div>

    <div class="row">
      <?php
      $productHot = getAllProHome(9);
      foreach ($productHot as $key => $sp) {
      $linksp = "index.php?act=detailProduct&id=" . $sp['id'];
        
        echo '
            <div class="col-lg-4 col-md-6">
            <div class="single-product">
              <div class="product-img">
                <img class="img-fluid w-100" src="' . $ROOT . '../public/image/' . $sp['img'] . '" alt="" />
                <div class="p_icon">
                  <a href="'.$linksp.'">
                    <i class="ti-eye"></i>
                  </a>
                  <a href="#">
                    <i class="ti-shopping-cart"></i>
                  </a>
                </div>
              </div>
              <div class="product-btm">
                <a href="#" class="d-block">
                  <h4>' . $sp['name'] . '</h4>
                </a>
                <div class="mt-3">
                  <span class="mr-4">' . currency_format($sp['price']) . '</span>
                </div>
              </div>
            </div>
            </div>
       ';
      }
      ?>

    </div>
  </div>
</section>
<!--================ kết thúc tất cả sản phẩm =================-->

<!--================ Start Blog Area =================-->
<section class="blog-area section-gap">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="main_title">
          <h2><span>Tin tức</span></h2>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="single-blog">
          <div class="thumb">
            <img class="img-fluid" src="public/image/b1.jpg" alt="">
          </div>
          <div class="short_details">
            <a class="d-block" href="single-blog.html">
              <h4>Ford clever bed stops your sleeping
                partner hogging the whole</h4>
            </a>
            <a href="#" class="blog_btn">Learn More <span class="ml-2 ti-arrow-right"></span></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="single-blog">
          <div class="thumb">
            <img class="img-fluid" src="public/image/b1.jpg" alt="">
          </div>
          <div class="short_details">
            <a class="d-block" href="single-blog.html">
              <h4>Ford clever bed stops your sleeping
                partner hogging the whole</h4>
            </a>
            <a href="#" class="blog_btn">Learn More <span class="ml-2 ti-arrow-right"></span></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="single-blog">
          <div class="thumb">
            <img class="img-fluid" src="public/image/b1.jpg" alt="">
          </div>
          <div class="short_details">
            <a class="d-block" href="single-blog.html">
              <h4>Ford clever bed stops your sleeping
                partner hogging the whole</h4>
            </a>
            <a href="#" class="blog_btn">Learn More <span class="ml-2 ti-arrow-right"></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================ End Blog Area =================-->