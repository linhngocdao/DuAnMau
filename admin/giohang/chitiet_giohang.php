<div class="row">
    <div class="col-12">
        <div class="card my-4">

            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">

                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">

                        <thead>
                            <tr>
                                <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tên sản phẩm</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Ảnh sản phẩm</th>
                                <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Giá</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Số lượng</th>

                                <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tổng tiền</th>



                            </tr>
                        </thead>
                        <tbody>
                            <?php


                            foreach ($DetailCart as $key => $value) {
                                echo '
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">' . $value['name'] . '</h6>
                            
                          </div>
                        </div>
                      </td>
                      <td>
                      <p class="text-xs font-weight-bold mb-0"><img width="80px" src="' . $ROOT . '../public/image/' . $value['img'] . '" /></p>
                   
                    </td>
                    <td>
                    <p class="text-xs font-weight-bold mb-0">' . number_format($value['price']) . ' VNĐ</p>
                 
                  </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">' . $value['qty'] . '</p>
                     
                      </td>
                <td>
                <p class="text-xs font-weight-bold mb-0">' . number_format($value['price'] * $value['qty']) . ' VNĐ</p>
             
              </td>
                     
                    
                   
                    
                    </tr>
                
                    ';
                            }
                            ?>



                        </tbody>

                        <tfoot>
                            <tr>
                                <td>Tổng tiền</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><?= number_format($infocart[0]['tonggia']) ?> VNĐ</td>
                            </tr>
                            <tr>
                                <th>THÔNG TIN NGƯỜI NHẬN:</th>
                            </tr>
                            <tr>
                                <th>Địa chỉ: <?=$infocart[0]['diachi']?>  </th>
                                <th>Số điện thoại: <?=$infocart[0]['sodienthoai']?> </th>
                                <th>Họ tên: <?=$infocart[0]['hovaten']?> </th>
                                <th>Ghi chú: <?=$infocart[0]['ghichu']?> </th>
                            </tr>
                            <tr>

                             <td>
                                    <h3>Đổi trạng thái đơn hàng</h3>
                                    <form method="POST">
                                        <select name="status" id="">
                                            <option value="Đang xử lý">Đang xử lý</option>
                                            <option value="Đang gửi">Đang gửi</option>
                                            <option value="Gửi hàng thành công">Gửi hàng thành công</option>
                                        </select> <br> <br>
                                        <button name="btn_status" style="background-color: white;" type="submit">Xác nhận</button>
                                    </form>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>