
    <section class="cat_product_area section_gap">
      <div class="container">
        <div class="row flex-row-reverse">
          <div class="col-lg-9">
            <div class="product_top_bar">
              <div class="left_dorp">
                <select class="sorting">
                  <option value="1">Lọc theo giá</option>
                  <option value="2">Từ thấp lên cao</option>
                  <option value="4">Từ cao xuống thấp</option>
                </select>
              </div>
            </div>
            
            <div class="latest_product_inner">
              <div class="row">
      

              <?php
      $productHot = getAll();
      
      foreach ($productHot as $key => $cac) {
        $linksp = "index.php?act=detailProduct&id=" . $cac['id'];
        echo '
            <div class="col-lg-4 col-md-6">
            <div class="single-product">
              <div class="product-img">
                <img class="img-fluid w-100" src="' . $ROOT . '../public/image/' . $cac['img'] . '" alt="" />
                <div class="p_icon">
                  <a href="'.$linksp.'">
                    <i class="ti-eye"></i>
                  </a>
                </div>
              </div>
              <div class="product-btm">
                <a href="#" class="d-block">
                  <b class="pritext text-capitalize ">' . $cac['name'] . '</b>
                </a>
                <div class="mt-3">
                  <span class="mr-4">' . currency_format($cac['price']) . '</span> <br>
                  <p class="font-italic">lượt xem ' . $cac['view'] . '</p>
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