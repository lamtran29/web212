
    <header class="page-header">
      <div class="page-header__bottom">
        <div class="uk-container">
          <div class="uk-navbar-container bg-green" data-uk-navbar="">
            <div class="uk-navbar-left">
              <span class="hotline">Hotline đặt hàng:  <b>0123456789</b></span>
            </div>

            <div class="uk-navbar-center"></div>

            <div class="uk-navbar-right">
              <div class="other-links">
                <ul class="other-links-list">
                  <li>
                    <?php
                      // $logged = 
                      if (isset($_SESSION['name'])){
                        echo "Xin chào, " . $_SESSION['name'];
                      }
                      else echo "<a style='color: white; font-weight: bold' href='http://localhost/web212/User/sign_in'>Đăng nhập</a>";
                      
                      echo "<span style='margin: 0 12px'> | </span>";
                      ?>
                  </li>
                  <li><a href="#modal-full" data-uk-toggle><span class="text-white" data-uk-icon="search"></span></a></li>
                  <li><a href="http://localhost/web212/home/cart"><span class="text-white" data-uk-icon="cart"></span></a></li>
                  <?php
                    if (isset($_SESSION['id'])){
                      echo "<li><a href='http://localhost/web212/User/sign_in'><span class='text-white' data-uk-icon='user'></span></a></li>
                        <li><a href='http://localhost/web212/User/log_out'><span class='text-white' data-uk-icon='sign-out'></span></a></li>";
                    }
                  ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="page-header__top">
        <div class="uk-container">
          <nav class="uk-navbar-container uk-navbar-transparent" data-uk-navbar="">
            
          <div class="uk-navbar-left">
            <button class="uk-button" type="button" data-target="#offcanvas" data-uk-toggle data-uk-icon="menu"></button>
              <a href="http://localhost/web212/home/index"> 
                    <img class="logo__img logo__img--full" src="../../../web212/public/assets/img/header-freshgro.png" alt="logo">
              </a>
            </div>

            <div class="uk-navbar-center">
              <a href="http://localhost/web212/home/index"> 
                <img class="logo__img logo__img-small" src="../../../web212/public/assets/img/header-freshgro.png" alt="logo">
              </a>
            </div>

            <div class="uk-navbar-right">
              <ul class="uk-navbar-nav" >
                <li><a href="http://localhost/web212/home/index"><span class="nav-btn" >TRANG CHỦ</span></a></li>
                <li><a href="http://localhost/web212/home/catalog"><span class="nav-btn">SẢN PHẨM</span></a></li>
                <li><a href="http://localhost/web212/news/index"><span class="nav-btn">TIN TỨC</span></a></li>
                <li><a href="http://localhost/web212/home/contact"><span class="nav-btn">LIÊN HỆ</span></a></li>
              </ul>
            </div>
          </nav>
          
        </div>
      </div>
      <div style="background-color: #56B280; height: 1px; width: 100%; margin: 0"></div>

      <div id="offcanvas" data-uk-offcanvas="overlay: true">
        <div class="uk-offcanvas-bar"><button class="uk-offcanvas-close" type="button" data-uk-close=""></button>
          <div class="uk-margin-top">
            <ul class="uk-nav">
              <li><a href="http://localhost/web212/home/index">Trang chủ</a></li>
              <li><a href="http://localhost/web212/home/catalog">Sản phẩm</a></li>
              <li><a href="http://localhost/web212/News/index">Tin tức</a></li>
              <li><a href="http://localhost/web212/home/contact">Liên hệ</a></li>
            </ul>
          </div>
          <hr class="uk-margin">
          <ul class="uk-nav uk-nav-parent-icon" data-uk-nav>
            <li class="">
              <a href="http://localhost/web212/home/catalog">Trái cây</a>
            </li>

            <li class="">
              <a href="http://localhost/web212/home/catalog">Thịt</a>
            </li>

            <li class="">
              <a href="http://localhost/web212/home/catalog">Rau củ quả</a>
            </li>

            <li class="">
              <a href="http://localhost/web212/home/catalog">Thủy hải sản</a>
            </li>
          </ul>
          <hr class="uk-margin">
          <div class="uk-margin-bottom">
            <div class="block-with-phone"><img src="../../../web212/public/assets/img/icons/delivery.svg" alt="delivery" data-uk-svg>
              <div> <span>Hotline đặt hàng: <b>0123456789</b></span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="uk-flex-top" id="callback" data-uk-modal="">
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical"><button class="uk-modal-close-default" type="button" data-uk-close=""></button>
          <p></p>
        </div>
      </div>
      <div class="uk-modal-full uk-modal" id="modal-full" data-uk-modal>
        <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle" data-uk-height-viewport><button class="uk-modal-close-full" type="button" data-uk-close></button>
          <form class="uk-search uk-search-large"><input class="uk-search-input uk-text-center" type="search" placeholder="Search..." autofocus></form>
        </div>
      </div>
    </header>