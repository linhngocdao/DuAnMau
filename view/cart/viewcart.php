
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                <h3 style="font-weight: 600; color:green;">Đơn hàng</h3>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Số Thứ tự</th>
                                <th scope="col">Sản phẩm</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Tổng tiền</th>
                                <th scope="col">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if(isset($_SESSION['mycart'])){
                                $tong = 0;
                                $stt =1;
                            foreach ($_SESSION['mycart'] as $cart) {
                                $tong += $cart['qty'] * $cart['price'];
                           
                                echo '
                                <tr>
                                <form method="get">
                                <td>'.$stt++.'</td>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                        <img class="img-fluid w-100" style="width:100px; height:50px" src="' . $ROOT . '../public/image/' . $cart['img'] . '" alt="" />
                                        </div>
                                        <div class="media-body">
                                            <p>' . $cart['name'] . '</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>' . currency_format($cart['price']) . '</h5>
                                </td>
                                <td>
                                    <div class="product_count">
                                            <p>' . $cart['qty'] . '</p>
                                    </div>
                                </td>
                                <td>
                                    <h5>' . currency_format($cart['qty'] * $cart['price']) . '</h5>
                                </td>
                                <td>
                                <a href="index.php?act=delete&id=' . $cart['id'] . '" class="btn btn-danger">Xóa</a>
                                </td>
                                 
                                </form>
                            </tr>
                                ';
                            }
                        }else{
                                echo "Không có đơn hàng";
                            }
                            ?>
                        </tbody>
                        <tfoot>
                             <?php
                             
                             ?>
                             <tr>
                                 <td >Tổng tiền</td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td style="color: red; font-weight: 800;font-size:15px;"><?=isset($tong)? number_format($tong) : ""?> VNĐ </td>
                             </tr>
                         </tfoot>
                    </table>
                </div>
                            <h3 style="color:green;">Thông tin khách hàng</h3>
                <form method="post">
                    <div class="form-group" >
                        <label>Họ và tên</label>
                        <input type="text" class="form-control" name="hovaten" placeholder="Mời bạn nhập họ tên" required>
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type="text" class="form-control" name="sodienthoai" placeholder="Mời bạn nhập số điện thoại" required>
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input type="text" class="form-control" name="diachi" placeholder="Mời bạn nhập địa chỉ" required>
                    </div>
   
                    <div class="form-group">
                        <label>Ghi chú</label>
                        <textarea class="form-control" name="ghichu" rows="3" placeholder="Mời bạn nhập ghi chú" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="dathang">Đặt hàng</button>
                </form>
            </div>
        </div>
    </section>
