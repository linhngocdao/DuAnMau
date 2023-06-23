<!-- <a href="index.php?act=adddm" style="margin-left: 20px;"><button class="btn btn-success">Thêm danh mục</button></a> -->
<h3>Danh sách giỏ hàng</h3>
<div style="padding-top: 20px; margin: 0 30px 0 30px;">
    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
            <tr>
                <th>id</th>
                <th>Chi tiết giỏ hàng</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
             $listCart = showCart();
            foreach ($listCart as $tk) {
                // print_r($tk); exit;
                extract($tk);
                $xoacart = "index.php?act=remove_cart&id=" . $id;
           echo '
           <tr>
           <td>
               <div class="d-flex align-items-center">
               CODE: '.$tk['id'].'
               </div>
           </td>
           <td>
               <div class="d-flex align-items-center">
                   <a href="?act=chitiet_giohang&id='.$tk["id"].'">Bấm vào chi tiết giỏ hàng</a>
               </div>
           </td>
           <td>
           <div class="d-flex align-items-center">
           '.$tk['trangthai'].'
           </div>
       </td>
            
           <td>
               <a href="'.$xoacart.'"><button class="btn btn-danger">
                       Xóa
                   </button></a>
           </td>
       </tr>';
              
            }
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