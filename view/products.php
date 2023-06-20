
  <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div class="banner_content d-md-flex justify-content-between align-items-center">
            <div class="mb-3 mb-md-0">
              <h2>Shop Category</h2>
              <p>Very us move be blessed multiply night</p>
            </div>
            <div class="page_link">
              <a href="index.html">Home</a>
              <a href="category.html">Shop</a>
              <a href="category.html">Women Fashion</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Category Product Area =================-->
    <section class="cat_product_area section_gap">
      <div class="container">
        <div class="row flex-row-reverse">
          <div class="col-lg-9">
            <div class="product_top_bar">
              <div class="left_dorp">
                <select class="sorting">
                  <option value="1">Default sorting</option>
                  <option value="2">Default sorting 01</option>
                  <option value="4">Default sorting 02</option>
                </select>
                <select class="show">
                  <option value="1">Show 12</option>
                  <option value="2">Show 14</option>
                  <option value="4">Show 16</option>
                </select>
              </div>
            </div>
            
            <div class="latest_product_inner">
              <div class="row">
      

              <?php
      $productHot = getAll();
      // $linksp = "index.php?act=detailProduct&id=" . $id;
      foreach ($productHot as $key => $value) {
        echo '
            <div class="col-lg-4 col-md-6">
            <div class="single-product">
              <div class="product-img">
                <img class="img-fluid w-100" src="' . $ROOT . '../public/image/' . $value['img'] . '" alt="" />
                <div class="p_icon">
                  <a href="">
                    <i class="ti-eye"></i>
                  </a>
                  <a href="#">
                    <i class="ti-shopping-cart"></i>
                  </a>
                </div>
              </div>
              <div class="product-btm">
                <a href="#" class="d-block">
                  <b class="pritext text-capitalize ">' . $value['name'] . '</b>
                </a>
                <div class="mt-3">
                  <span class="mr-4">' . currency_format($value['price']) . '</span> <br>
                  <p class="font-italic">lượt xem ' . $value['view'] . '</p>
                </div>
              </div>
            </div>
            </div>
       ';
      }
      ?>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="left_sidebar_area">
              <aside class="left_widgets p_filter_widgets">
                <div class="l_w_title">
                  <h3>Danh mục sản phẩm</h3>
                </div>
                <div class="widgets_inner">
                  <ul class="list">
                    <?php 
                        $listCates = selectCates();
                        foreach ($listCates as $key => $value) {
                            echo ' <li >
                            <a href="index.php?act=product&&iddm='.$value['id'].'">'.$value['name'].'</a>
                            </li>
                           ';
                        }
                        ?>
                  </ul>
                </div>
              </aside>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Category Product Area =================-->