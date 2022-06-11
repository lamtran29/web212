
<div class="page-wrapper">
    <?php 
      require_once "./mvc/views/".$data["header"].".php";
    ?>
<main class="page-main">
    <div class="section-first-screen">
        <div class="first-screen__bg hide-in-sd" style="background-color: rgba(86, 178, 128, 15%); height: 300px;"></div>
        <div class="first-screen__content hide-in-sd" style="height: 300px;">
            <div class="uk-container" style="padding: 32px 0">
            <div class="first-screen__box page-info">
                <h2 class="first-screen-page">Liên hệ</h2>
                <div class="first-screen__breadcrumb">
                    <ul class="uk-breadcrumb">
                        <li><a href="http://localhost/web212/home/index">Trang chủ</a></li>
                        <li> <a href="http://localhost/web212/home/contact">Liên hệ</a></li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
            <div class="section-contacts-form">
                <div class="uk-section uk-container">
                    <div class="uk-grid" data-uk-grid>
                        <div class="uk-width-1-3@m">
                            <div class="section-title">
                                <h2 class="uk-h3"><b>Thông tin liên hệ</b></h2>
                            </div>
                            <div class="section-content">
                                <div class="contact">
                                    <i class="bi bi-telephone"></i>
                                    <b>Số điện thoại:</b>
                                    <br>
                                    0123456789
                                </div>
                                <hr class="uk-margin">
                                <div class="contact">
                                    <i class="bi bi-envelope"></i>
                                    <b>Email:</b>
                                    <br>
                                    freshgro@gmail.com
                                </div>
                                <hr class="uk-margin">
                                <div class="contact">
                                    <i class="bi bi-geo-alt"></i>
                                    <b>Địa chỉ:</b>
                                    <br>
                                    Đường abc, Phường xyx, Quận efg, TP. HCM
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-2-3@m">
                            <div class="section-title">
                                <h2 class="uk-h3"><b>Liên hệ nhanh với chúng tôi</b></h2>
                            </div>
                            <div class="section-content">
                                <form action="#!">
                                    <div class="uk-grid uk-grid-medium uk-child-width-1-2@s" data-uk-grid>
                                        <div><input class="uk-input" type="text" placeholder="Your Name"></div>
                                        <div><input class="uk-input" type="text" placeholder="Email"></div>
                                        <div><input class="uk-input" type="text" placeholder="Phone"></div>
                                        <div><input class="uk-input" type="text" placeholder="Subject"></div>
                                        <div class="uk-width-1-1"><textarea class="uk-textarea" name="message" placeholder="Message"></textarea></div>
                                        <div><input class="uk-button" type="submit" value="Send message"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-map"> <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15673.343070416093!2d106.63211957096952!3d10.862046249563123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1637211851170!5m2!1svi!2s" width="600" height="450" style="border:0;"
                    allowfullscreen="" loading="lazy"></iframe></div>
        </main>
    <?php 
      require_once "./mvc/views/".$data["footer"].".php";
    ?>
  </div>

