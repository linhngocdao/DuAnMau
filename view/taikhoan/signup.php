<div class="container">
    <div class="omb_login">
        <h3 class="omb_authTitle">Signup   or    <a href="index.php?act=signin">Signin</a></h3>
        <div class="row omb_row-sm-offset-3">
            <div class="col-xs-12 col-sm-6">
                <form class="omb_loginForm" action="" autocomplete="off" method="POST">
                <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" name="hovaten" placeholder="Họ và tên ">
                    </div>
                    <span class="help-block"></span>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" name="taikhoan" placeholder="Tài khoản">
                    </div>
                    <span class="help-block"></span>

                    <div class="input-group" style="padding-bottom: 20px;">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" name="matkhau" placeholder="Mật khẩu">
                    </div>
                    

                    <button class="btn btn-lg btn-primary btn-block" name="btn" type="submit">Đăng kí</button>
                </form>
                    <p class="kq">
                <?php 
                if (isset($kq)&&($kq!='')) {
                    echo $kq;
                }
                ?>
                </p>
            </div>
        </div>
    </div>
</div>
