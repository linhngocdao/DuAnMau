
  <section class="section_gap">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Phản hồi tại đây</h2>
        </div>
        <div class="col-lg-8 mb-4 mb-lg-0">
          <form class="form-contact contact_form" action="" method="POST">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100" name="content" id="content" cols="30" rows="9" placeholder="Nội dung cần phản hồi"></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" placeholder="Tên của bạn">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" placeholder="Email của bạn">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="number" id="subject" type="number" placeholder="Số điện thoại của bạn">
                </div>
              </div>
            </div>
            <div class="form-group mt-lg-3">
              <button type="submit" class="main_btn" name="main_btn">Gửi thông tin</button>
            </div>
          </form>
          <?php
                    if (isset($thongbao) && ($thongbao != '')) {
                        echo $thongbao;
                    }
                    ?>

        </div>

        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>91 Cầu Diễn, Bắc từ liêm</h3>
              <p>Sos n</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3><a href="tel:454545654">0865.058.159</a></h3>
              <p>9am đến 6pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><a href="mailto:support@colorlib.com">dnlinh.dev@gmail.com</a></h3>
              <p>Gửi cho chúng tôi truy vấn của bạn bất cứ lúc nào!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>