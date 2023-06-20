<style>
    .des_pro{
        width: 400px;
        height: 160px;
        overflow-x: auto;
        scroll-behavior: auto;
    }
    ::-webkit-scrollbar {
  width: 10px;
}
</style>
          <a href="index.php?act=addsp" style="margin-left: 20px;"><button class="btn btn-success">Thêm Sản Phẩm</button></a>
          <div style="padding-top: 20px; margin: 0 30px 0 30px;">

              <form action="index.php?act=listsp" method="post" class="row g-3 pb-5">
                  <div class="col-auto">
                      <input type="text" class="form-control" name="key_searchPro" placeholder="Mời bạn tìm kiếm">
                  </div>
                  <div class="col-auto">
                  <select class="form-select" aria-label="Default select example" name="iddm">
                          <option value="0" selected>Tất cả</option>
                          <?php
                            foreach ($listCates as $danhmuc) {
                                extract($danhmuc);
                                echo '<option value="' . $id . '">' . $name . '</option> ';
                            }
                            ?>
                      </select>
                  </div>
                  <div class="col-auto">
                  <input type="submit" value="Tìm kiếm" name="fillter_pro" class="btn btn-primary">
                  </div>
              </form>
              <table class="table align-middle mb-0 bg-white">
                  <thead class="bg-light">
                      <tr>
                          <th></th>
                          <th>Id</th>
                          <th>Tên sản phẩm</th>
                          <th>Giá sản phẩm</th>
                          <th>Ảnh sản phẩm</th>
                          <th>Mô tả sản phẩm</th>
                          <th>Lượt xem</th>
                          <th>Hành động</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                        foreach ($listSp as $sanpham) {
                            extract($sanpham);
                            $suasp = "index.php?act=suasp&id=" . $id;
                            $xoasp = "index.php?act=xoasp&id=" . $id;
                            $loca_img = "../public/image/" . $sanpham['img'];
                            if (is_file($loca_img)) {
                                $hinh = "<img src='" . $loca_img . "' height='100'>";
                            } else {
                                $hinh = "Không có hình ảnh hiển thị";
                            }
                        ?>
                          <tr>
                              <td><input type="checkbox" name="" id=""></td>
                              <td>
                                  <div class="d-flex align-items-center">
                                      <?= $id ?>
                                  </div>
                              </td>
                              <td>
                                  <div class="d-flex align-items-center">
                                      <?= $name ?>
                                  </div>
                              </td>
                              <td>
                                  <div class="d-flex align-items-center">
                                      <?= $price ?>
                                  </div>
                              </td>
                              <td>
                                  <div class="d-flex align-items-center ">
                                      <?= $hinh ?>
                                  </div>
                              </td>
                              <td>
                                  <div class="des_pro d-flex align-items-center ">
                                      <?= $mota ?>
                                  </div>
                              </td>
                              <td>
                                  <div class="d-flex align-items-center">
                                      <?= $view ?>
                                  </div>
                              </td>
                              <td>
                                  <a href="<?= $suasp ?>"><button type="button" class="btn btn-primary">
                                          Sửa
                                      </button></a>
                                  <a href="<?= $xoasp ?>"><button class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không!')">
                                          Xóa
                                      </button></a>
                              </td>
                          </tr>
                      <?php  }

                        ?>



                  </tbody>
              </table>
          </div>

      </div>
      </div>
      <!-- /#page-content-wrapper -->
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
      <script>
          var el = document.getElementById("wrapper");
          var toggleButton = document.getElementById("menu-toggle");

          toggleButton.onclick = function() {
              el.classList.toggle("toggled");
          };
      </script>