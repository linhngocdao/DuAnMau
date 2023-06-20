
    <?php extract($item); ?>
    <!--  -->
    <a href="index.php?act=listdm" style="margin-left: 20px;"><button class="btn btn-success">Danh sách</button></a>
    <div style="padding-top: 20px; margin: 0 50px;">
        <form action="index.php?act=updatedm" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1" class="pb-2 h6 text-primary">Mã danh mục</label>
                <input type="number" name="maloai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" disabled placeholder="Mã danh mục">
            </div>

            <div class="form-group pt-4">
                <label for="exampleInputEmail1" class="pb-2 h6 text-primary">Tên danh mục</label>
                <input type="text" name="tenloai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên danh mục" value="<?= $name ?>" required>
            </div>
            <div style="padding-top: 20px;">
                <input type="hidden" name="id" value="<?= $id ?>">
                <button type="submit" name="themmoi" class="btn btn-primary">Cập nhật danh mục</button>
                <button type="reset" class="btn btn-info">Nhập lại</button>
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

<?php

if (is_array($dm)) {
    extract($dm);
}

?>