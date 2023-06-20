<?php

?>
<div class="container">
    <div class="omb_login">
        <h3 class="omb_authTitle">Signin or <a href="index.php?act=signup">Sign up</a></h3>

        <div class="row omb_row-sm-offset-3">
            <div class="col-xs-12 col-sm-6">
                <form class="omb_loginForm" action="" autocomplete="off" method="POST">
                    <div class="input-group" style="padding-bottom: 10px;">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" name="taikhoan" placeholder="Tài khoản">
                    </div>

                    <div class="input-group" style="padding-bottom: 20px;">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" name="matkhau" placeholder="Mật khẩu ">
                    </div>
                    <!-- <span class="help-block"><h1><?=$thongbao?></h1></span> -->
                    <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao
            ?>

                    <button class="btn btn-lg btn-primary btn-block" name="btn" type="submit">Đăng nhập</button>
                </form>
            </div>
        </div>
        <div class="row omb_row-sm-offset-3">
            <div class="col-xs-12 col-sm-3">
                <label class="checkbox">
                    <input type="checkbox" value="remember-me">Remember Me
                </label>
            </div>
            <div class="col-xs-12 col-sm-3">
                <p class="omb_forgotPwd">
                    <a href="#">Forgot password?</a>
                </p>
            </div>
        </div>
    </div>
</div>
