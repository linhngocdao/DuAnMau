

          <!-- Thêm sản phẩm -->
          <a href="index.php?act=listsp" style="margin-left: 20px;"><button class="btn btn-success">Danh
                  sách</button></a>
          <div style="padding-top: 20px; margin: 0 100px;">
              <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                      <label for="exampleInputEmail1" class="pb-2 h6 text-primary">Danh mục sản phẩm</label>
                      <select class="form-select" aria-label="Default select example" name="iddm">
                          <option selected>Mời bạn chọn danh mục</option>
                          <?php
                            foreach ($listCates as $danhmuc) {
                                extract($danhmuc);
                                echo '<option value="' . $id . '">' . $name . '</option> ';
                            }
                            ?>

                      </select>
                  </div>

                  <div class="form-group pt-4">
                      <label for="exampleInputEmail1" class="pb-2 h6 text-primary">Tên Sản Phẩm</label>
                      <input type="text" name="tensp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên danh mục" required>
                  </div>

                  <div class="form-group pt-4">
                      <label for="exampleInputEmail1" class="pb-2 h6 text-primary">Giá Sản Phẩm</label>
                      <input type="number" name="pricesp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên danh mục" required>
                  </div>

                  <div class="form-group pt-4">
                      <label for="exampleInputEmail1" class="pb-2 h6 text-primary">Ảnh Sản Phẩm</label>
                      <input class="form-control" name="imgsp" type="file" id="formFile" required>
                  </div>

                  <div class="form-group pt-4">
                      <label for="exampleInputEmail1" class="pb-2 h6 text-primary">Mô tả Sản Phẩm</label>
                      <textarea class="form-control" name="motasp" id="exampleFormControlTextarea1" rows="3" placeholder="Mô tả sản phẩm" required></textarea>
                  </div>

                  <div style="padding-top: 20px;">
                      <button type="submit" name="themmoi" class="btn btn-primary">Thêm Sản phẩm</button>
                      <button type="reset" class="btn btn-info">Nhập lại</button>
                  </div>

                  <?php
                    if (isset($thongbao) && ($thongbao != "")) echo $thongbao
                    ?>
              </form>
          </div>
          <!-- Kết thúc form add sản phẩm -->
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