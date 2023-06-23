<style>
</style>

<h3 class="title" style="text-align: center;">Tìm kiếm sản phẩm: <?php echo $_GET['key']; ?></h3>
<div class="row">
      <?php 
       $seach = getAll();
      //  print_r($seach);
      foreach ($search as $a => $value) {
        // print_r($seach); exit;
        echo '
        <div class="search-product col-lg-4 col-md-6">
        <div class="single-product">
          <div class="product-img">
            <img class="img-fluid w-100" src="' . $ROOT . '../public/image/' . $value['img'] . '" alt="" />
            <div class="p_icon">
              <a href="index.php?act=detailProduct">
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
      if(empty($search)){
        echo " Không tìm thấy sản phẩm";
    }
      ?>
    </div>