<style>
  .s_product_img {
    width: 400px;
  }

  .cm_main {
    padding-top: 100px;
  }

  .cm_main h3 {
    margin-left: 70px;
    font-weight: 600;
    font-size: 20px;
  }

  .fm_cm {
    margin: 0 70px
  }

  .cm_main button {
    padding: 6px 16px;
  }
  .cm_f p,b{margin-left: 50px; color: black;}
  .cm_f{display: flex}
  .time_cm{padding-top: 24px; margin-left: 100px;}
  .text_cm{font-weight: 600 !important; font-size: 16px !important; color: red; margin-left: 70px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important;}
  .product_same h3{margin-left: 70px; font-weight: 600;padding-top: 50px;}
  .product_same{margin: 0 50px;}
  .des_pro_detail{width: 600px;}
</style>
<!--================Single Product Area =================-->
<div class="product_image_area">
  <div class="container">
    <?php
    echo '
      <div></div>
      <div class="row s_product_inner">
      <div class="img_pro col-lg-6">
         <div class="s_product_img"> 
          <div>
         <img class="img_detail img-fluid w-100" src="' . $ROOT . '../public/image/' . $one_sp['img'] . '" alt="" />
          </div>
         </div> 
      </div>
      <div class="col-lg-5 offset-lg-1">
        <div class="s_product_text">
          <h3>' . $one_sp['name'] . '</h3>
          <h2>' .  currency_format($one_sp['price']) . '</h2>
          <ul class="list">
            <li>
              <a class="active" href="#">
                <span>Lượt xem :</span> ' . $one_sp['view'] . '</h3>
                </a>
            </li>
          </ul>
          <p class="des_pro_detail">Chi tiết sản phẩm: ' . $one_sp['mota'] . '</p>
          <div class="card_area">
            <a class="main_btn" href="#">Add to Cart</a>
            <a class="icon_btn" href="#">
              <i class="lnr lnr lnr-heart"></i>
            </a>
          </div>
        </div>
      </div>
    </div>  ';
    ?>


  </div>
</div>
<!--================End Single Product Area =================-->
<section class="cm_main">
  
<h3 class="text_cm">Xin mời bạn đăng nhập để được bình luận</h3> 
  <h3>Bình luận</h3>

  <form class="fm_cm form-group py-5">
    <textarea class="form-control" placeholder="Xin mời nhập" id="exampleFormControlTextarea1" rows="5"></textarea>
    <div class="pt-5">
      <button class="btn btn-primary">Gửi</button>
    </div>
  </form>

  <div class="cm_f">
    <div>
    <b>- Tên tài khoản: Đào Ngọc Linh</b>
    <p>Sản phẩm rất tốt</p>
    </div>
    <div class="time_cm">
      17:08 PM 11/12/2023
    </div>
  </div>
</section>


<section class="product_same">
  <h3>Sản phẩm cùng loại</h3>
  <div class="row">
    <div class="col-lg-4 col-md-6">
      <div class="single-product">
        <div class="product-img">
          <img class="img-fluid w-100" src="https://tngfashion.vn/image/catalog/2021/menu_nu1.jpg" alt="" />
          <div class="p_icon">
            <a href="#">
              <i class="ti-eye"></i>
            </a>
            <a href="#">
              <i class="ti-shopping-cart"></i>
            </a>
          </div>
        </div>
        <div class="product-btm">
          <a href="#" class="d-block">
            <h4>giày nam</h4>
          </a>
          <div class="mt-3">
            <span class="mr-4">250.000 vnđ</span>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6">
      <div class="single-product">
        <div class="product-img">
          <img class="img-fluid w-100" src="https://tngfashion.vn/image/catalog/2021/menu_nu1.jpg" alt="" />
          <div class="p_icon">
            <a href="#">
              <i class="ti-eye"></i>
            </a>
            <a href="#">
              <i class="ti-shopping-cart"></i>
            </a>
          </div>
        </div>
        <div class="product-btm">
          <a href="#" class="d-block">
            <h4>giày nam</h4>
          </a>
          <div class="mt-3">
            <span class="mr-4">250.000 vnđ</span>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6">
      <div class="single-product">
        <div class="product-img">
          <img class="img-fluid w-100" src="https://tngfashion.vn/image/catalog/2021/menu_nu1.jpg" alt="" />
          <div class="p_icon">
            <a href="#">
              <i class="ti-eye"></i>
            </a>
            <a href="#">
              <i class="ti-shopping-cart"></i>
            </a>
          </div>
        </div>
        <div class="product-btm">
          <a href="#" class="d-block">
            <h4>giày nam</h4>
          </a>
          <div class="mt-3">
            <span class="mr-4">250.000 vnđ</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>