
    <?php

if (is_array($sanpham)) { // is_array giúp kiểm tra biến có phải là 1 mảng hay là không
    extract($sanpham); // extract dùng để nhập các biến từ một mảng vào trong bảng biểu tượng hiện tại
}

        $loca_img = "../public/image/" . $sanpham['img'];
    if (is_file($loca_img)) { //is_file dùng để kiểm tra xem biến đó có phải một file hay là không
        $hinh = "<img src='" . $loca_img . "' height='100'>";
    } else {
        $hinh = "Không có hình ảnh hiển thị";
    }

    ?>
    <!--  -->
    <a href="index.php?act=listsp" style="margin-left: 20px;"><button class="btn btn-success">Danh sách</button></a>
    <div style="padding-top: 20px; margin: 0 50px;">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1" class="pb-2 h6 text-primary">Danh mục sản phẩm</label>
                <select class="form-select" aria-label="Default select example" name="iddm">
                          <option selected>Mời bạn chọn danh mục</option>
                          <?php
                            foreach ($listCates as $danhmuc) {
                                extract($danhmuc);
                                if($iddm==$id)
                                echo '<option value="' . $id . '" selected>' . $name . '</option> ';
                                else  echo '<option value="' . $id . '">' . $name . '</option> ';
                            }
                            ?>

                      </select>
            </div>

            <div class="form-group pt-4">
                <label for="exampleInputEmail1" class="pb-2 h6 text-primary">Tên Sản Phẩm</label>
                <input type="text" name="tensp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên danh mục" required value="<?= $sanpham['name'] ?>">
            </div>

            <div class="form-group pt-4">
                <label for="exampleInputEmail1" class="pb-2 h6 text-primary">Giá Sản Phẩm</label>
                <input type="number" name="pricesp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên danh mục" required value="<?= $sanpham['price'] ?>">
            </div>

            <div class="form-group pt-4">
                <label for="exampleInputEmail1" class="pb-2 h6 text-primary">Ảnh Sản Phẩm</label>
                <input class="form-control" name="imgsp" type="file" id="formFile">
                <div class="pt-3">
                <?= $hinh?>
                <!-- <?=  $sanpham['img'] ?> -->
                </div>
                
            </div>

            <div class="form-group pt-4">
                <label for="exampleInputEmail1" class="pb-2 h6 text-primary">Mô tả Sản Phẩm</label>
                <textarea class="form-control" name="motasp" id="exampleFormControlTextarea1" rows="3" placeholder="Mô tả sản phẩm" required><?= $sanpham['mota'] ?></textarea>
            </div>

            <div style="padding-top: 20px;">
                <input type="hidden" name="id" value="<?=$sanpham['id']?>">
                <button type="submit" name="capnhat" class="btn btn-primary">Cập nhật sản phẩm</button>
                <button type="submit" name="capnhat" class="btn btn-primary">Nhập lại</button>
            </div>

            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao
            ?>
        </form>
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

