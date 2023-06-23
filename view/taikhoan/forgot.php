<div class="container">
    <div class="omb_login">
        <div class="row omb_row-sm-offset-3">
            <div class="col-xs-12 col-sm-6">
                <form class="omb_loginForm" action="index.php?act=forgot" autocomplete="off" method="POST">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" name="taikhoan" placeholder="xin mời nhập tên tài khoản">
                    </div>
                    <span class="help-block">
                    <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao
            ?>
                    </span>
                 
                    <button class="btn btn-lg btn-primary btn-block" name="forgot_pass" type="submit">Lấy lại tài khoản</button>
                </form>
                <p class="kq">
                    <?php
                    if (isset($kq) && ($kq != '')) {
                        echo $kq;
                    }
                    ?>
                </p>
            </div>
        </div>
    </div>
</div>