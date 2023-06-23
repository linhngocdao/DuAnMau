<!-- <a href="index.php?act=adddm" style="margin-left: 20px;"><button class="btn btn-success">Thêm danh mục</button></a> -->
<h3>Danh sách tài khoản</h3>
          <div style="padding-top: 20px; margin: 0 30px 0 30px;">
              <table class="table align-middle mb-0 bg-white">
                  <thead class="bg-light">
                      <tr>
                          <th>id</th>
                          <th>Họ và tên</th>
                          <th>Email</th>
                          <th>Số điện thoại</th>
                          <th>Nội dung phản hồi</th>
                          <th>Thao tác</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                        foreach ($listphanhoi as $tk) {
                            extract($tk);
                            $xoadm = "index.php?act=xoaPH&id=" . $id;
                        ?>
                          <tr>
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
                                      <?= $email ?>
                                  </div>
                              </td>
                              <td>
                                  <div class="d-flex align-items-center">
                                      <?= $number ?>
                                  </div>
                              </td>
                              <td>
                                  <div class="d-flex align-items-center">
                                      <?= $content ?>
                                  </div>
                              </td>

                             <td>
                                  <a href="<?= $xoadm ?>"><button class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không!')">
                                          Xóa
                                      </button></a>
                                <a href="">
                                    <button class="btn btn-success">Phản hồi lại</button>
                                </a>
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