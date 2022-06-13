
<div class="page-wrapper">
    <?php 
      require_once "./mvc/views/".$data["header"].".php";
    ?>
    <main class="page-main">
      <div class="section-first-screen">
        <div class="first-screen__slideshow">
          <div data-uk-slideshow="min-height: 400; max-height: 785; autoplay: true">
            <div class="uk-position-relative" tabindex="-1">
              <ul class="uk-slideshow-items">
                <li>
                  <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left"><img src="https://www.bigbasketco.com/wp-content/uploads/good-l-corp-what-americas-best-grocery-stores-have-in-common.jpg" alt="slider-1" data-uk-cover></div>
                </li>
                <li>
                  <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left"><img src="https://cdn.vox-cdn.com/thumbor/mucReJQOd2xpS_bL-4YmLwqizcU=/0x0:5568x3712/1200x800/filters:focal(2339x1411:3229x2301)/cdn.vox-cdn.com/uploads/chorus_image/image/69555166/GettyImages_1312472686t.0.jpg" alt="slider-2" data-uk-cover></div>
                </li>
                <li>
                  <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left"><img src="https://media.timeout.com/images/105041644/image.jpg" alt="slider-3" data-uk-cover></div>
                </li>
              </ul>
            </div>
            
            <div class="first-screen__content">
                <div class="uk-container">
                    <div class="first-screen__box" style="padding-top:90px">
                        <h2 class="first-screen__title">Chào mừng đến với FRESHGRO</h2>
                    </div>
                </div>
            </div>
            
            <div class="slideshow-dotnav uk-position-bottom-center">
              <ul class="uk-slideshow-nav uk-dotnav uk-flex-center"></ul>
            </div>
            
          </div>
        </div>
      </div>

     
      <!-- ====================================================================== -->      
      <div class="category" style="margin-bottom: 100px;">
        <div class="sectionheader">
            <h2 class="sectiontitle">DANH MỤC SẢN PHẨM</h2>
            <p class="sectiondescription">
                Từ các loại trái cây, rau củ tươi xanh đến các loại thịt, thủy hải sản
            </p>
        </div>
        <div class="uk-container">
          <ul class="js-filter uk-grid uk-grid-small uk-child-width-1-2@s uk-child-width-1-4@l" data-uk-grid>    
            <!-- <div class="category-cards row"> -->
                
                <li class="category-card" style="text-align: center;">
                    <a href="http://localhost/web212/home/catalog">
                        <div class="category-img">
                            <img src="../../../web212/public/assets/img/pages/home/fruit.png" alt="">
                        </div>
                        <h5 class="name"><b>Trái cây</b></h5>
                    </a>
                </li>
                <li class="category-card" style="text-align: center;">
                    <a href="http://localhost/web212/home/catalog">
                        <div class="category-img">
                            <img src="../../../web212/public/assets/img/pages/home/meat.png" alt="">
                        </div>
                        <h5 class="name"><b>Các loại thịt</b></h5>
                    </a>
                </li>
                
                <li class="category-card" style="text-align: center;">
                    <a href="http://localhost/web212/home/catalog">
                        <div class="category-img">
                            <img src="../../../web212/public/assets/img/pages/home/vegetables.png" alt="">
                        </div>
                        <h5 class="name"><b>Rau củ quả</b></h5>
                    </a>
                </li>
                <li class="category-card" style="text-align: center;">
                    <a href="http://localhost/web212/home/catalog">
                        <div class="category-img">
                            <img src="../../../web212/public/assets/img/pages/home/seafood.png" alt="">
                        </div>
                        <h5 class="name"><b>Hải sản</b></h5>
                    </a>
                </li>
                
            <!-- </div> -->
          </ul>
        </div>
    </div>
    <!-- ====================================================================== -->      
    <div class="section-product">
      <div class="sectionheader">
            <h2 class="sectiontitle">NHỮNG SẢN PHẨM MỚI NHẤT</h2>
            <p class="sectiondescription">
                Từ các loại trái cây, rau củ tươi xanh đến các loại thịt, thủy hải sản
            </p>
        </div>
      <div class="uk-container">
        <ul class="js-filter uk-grid uk-grid-small uk-child-width-1-2@s uk-child-width-1-4@l" data-uk-grid>
            <?php 
            $i = 0;
            $fruit = array();
            while($row = mysqli_fetch_array($data["products"])){
              if ($i == 4) break;
              if ($row['category_id'] == 1) {
                array_push($fruit, $row);
              }
              else {
          ?>  
                <li data-tags="<?php echo $row["category_id"] ?>">
                  <div class="product-item" style="border: 2px solid #cce8d9;">
                    <div class="product-item__box">
                      <div class="product-item__intro">
                        <a href="http://localhost/web212/home/product/<?php echo $row["product_id"] ?>" style="text-decoration: none;">
                          <div class="product-item__not-active">
                            <div class="product-item__media">
                              <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><img class="product-zoom" style="height: 100%; width:100%; object-fit: cover;" src="../../../web212/public/assets/img<?php echo $row["avatar"] ?>?t=123" alt="Skin 1" /></div>
                            </div>
                            <div class="product-item__title"><?php echo $row["product_name"] ?></div>
                          </div>
                          <div class="product-item__info">
                            <div class="product-item__price"><b><span class="value"><?php echo $row["price"] ?>đ</span></b></div>
                          </div>
                        </a>
  
                      </div>
                    </div>
                  </div>
                </li>
                <?php   
                $i += 1;  
              }}
        ?>
        </ul>
      </div>
    </div>


    
    <!-- ====================================================================== -->      
      <div class="section-about">
        <a id="about_us"></a>
          <div class="uk-section uk-container">
            <div class="uk-grid uk-child-width-1-2@m uk-flex-middle" data-uk-grid>
              <div class="uk-text-center"><img src="https://www.eatthis.com/wp-content/uploads/sites/4/2019/05/woman-shopping-in-produce-section.jpg?quality=82&strip=1" alt="about us"></div>
              <div>
                <div class="section-title">
                  <h1>Về FreshGro</h1>
                </div>
                <div class="section-content">
                  <p>FreshGro là một dự án web nhằm cung cấp các sản phẩm nông sản như rau củ, trái cây
                  tươi từ các vùng miền ở Việt Nam. Dự án nằm trong khuôn khổ bài tập lớn môn Lập trình web học kì 212.
                  </p>
                  <p> Nhóm gồm có 4 thành viên: Trần Phạm Thái Hòa, Nguyễn Trung Phong, Trần Nguyên Lâm, Phan Thanh Hoan.</p>
                  <div class="uk-margin-medium-top"><a class="uk-button" href="http://localhost/web212/Home/catalog"><span>Xem các sản phẩm</span></a></div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <!-- ====================================================================== -->      
      <div class="section-features" >
          <div class="uk-section uk-container">
          <div class="sectionheader">
            <h2 class="sectiontitle">FRESHGRO CUNG CẤP NHỮNG GÌ</h2>
            <p class="sectiondescription">
                Từ các loại trái cây, rau củ tươi xanh đến các loại thịt, thủy hải sản
            </p>
        </div>
                    <div class="uk-grid uk-child-width-1-3@s" data-uk-grid>
                        <div>
                            <div class="feature-item">
                                <i class="bi bi-truck"></i>
                                <div class="feature-item__title">Giao dịch nhanh chóng</div>
                                <div class="feature-item__desc">Mua hàng trên website hoặc đặt hàng chỉ bằng 1 cuộc điện thoại</div>
                            </div>
                        </div>
                        <div>
                            <div class="feature-item">
                                <i class="bi bi-brightness-high"></i>
                                <div class="feature-item__title">Nông sản sạch, an toàn</div>
                                <div class="feature-item__desc">Nông sản đạt được các chứng nhận bởi VietGAP, Global GAP về độ an toàn</div>
                            </div>
                        </div>
                        <div>
                            <div class="feature-item">
                                <i class="bi bi-award"></i>
                                <div class="feature-item__title">Đa dạng</div>
                                <div class="feature-item__desc">Đa dạng có loại hàng thực phẩm, dễ lựu chọn từ trái cây, rau củ đến thịt cá</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ====================================================================== -->      
        <div class="section-about" style="background-color: #F7F8FA">
          <div class="uk-section uk-container">
            <div class="uk-grid uk-child-width-1-2@m uk-flex-middle" data-uk-grid>
              <div>
                <div class="section-title">
                  <h1 style="font-weight: bold;">"GIẢI CỨU" DƯA HẤU ĐỎ KON TUM</h1>
                </div>

                <div class="section-content">
                  <p style="color: #56B280"><b>Mua nông sản ủng hộ bà con nông dân</b></p>
                  <ul style="list-style-type: none;">
                    <li>
                        <i class="bi bi-check-circle"></i>
                        Dưa được lựa chọn một cách kỹ lưỡng
                    </li>
                    <li>
                        <i class="bi bi-check-circle"></i>
                        Đảm bảo các yếu tố vi sinh
                    </li>
                    <li>
                        <i class="bi bi-check-circle"></i>
                        Giá cả phải chăng
                    </li>
                    <li>
                        <i class="bi bi-check-circle"></i>
                        Chất lượng được đảm bảo
                    </li>
                  </ul>
                  <div class="uk-margin-medium-top"><a class="uk-button" href="http://localhost/web212/News/blog/1"><span>Xem tin tức</span></a></div>
                </div>

              </div>

              <div class="uk-text-center"><img src="https://c4.wallpaperflare.com/wallpaper/975/936/987/red-green-a-bunch-a-lot-wallpaper-preview.jpg" alt="about us">
              </div>
            </div>
            
            <br><br>
            
            <h3><b>Sản phẩm liên quan</b></h3>
            <div class="uk-container">
              <ul class="js-filter uk-grid uk-grid-small uk-child-width-1-2@s uk-child-width-1-4@l" data-uk-grid>
                <?php 
                  $i = 0;
                  foreach($fruit as $row){
                    if ($i == 4) break;
                    $i += 1;  
                ?>  
                <li data-tags="<?php echo $row["category_id"] ?>">
                  <div class="product-item" style="border: 2px solid #cce8d9;">
                    <div class="product-item__box">
                      <div class="product-item__intro">
                        <a href="http://localhost/web212/home/product/<?php echo $row["product_id"] ?>" style="text-decoration: none;">
                          <div class="product-item__not-active">
                            <div class="product-item__media">
                              <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><img class="product-zoom" style="height: 100%; width:100%; object-fit: cover;" src="../../../web212/public/assets/img<?php echo $row["avatar"] ?>?t=123" alt="Skin 1" /></div>
                            </div>
                            <div class="product-item__title"><?php echo $row["product_name"] ?></div>
                          </div>
                          <div class="product-item__info">
                            <div class="product-item__price"><b><span class="value"><?php echo $row["price"] ?>đ</span></b></div>
                          </div>
                        </a>
  
                      </div>
                    </div>
                  </div>
                </li>
                <?php   
                    }
                ?>
              </ul>
            </div>
          </div>
        </div>
      <!-- ========================================================= -->
      <div class="section-feedback">
                <div class="uk-container">
                    <div style="text-align: center; margin-top: 32px;">
                        <br>
                        <h2 class="sectiontitle">ĐÁNH GIÁ CỦA KHÁCH HÀNG</h2><br><br><br>
                    </div>
                    <div class="uk-grid uk-child-width-1-3@s" data-uk-grid style="text-align: center;">
                        <div>
                            <img src="../../../web212/public/assets/img/pages/home/fp1.png" alt="">
                            <p style="color: #56B280">
                              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </p>
                            <h5 style="margin-bottom: 0%; margin-top: 10px;">Anh Nguyễn Văn A</h5>
                            <em style="color: #56B280">30 tuổi, đến từ TP.HCM</em>
                            <div style="margin-top: 10px;">"Nông sản sạch online yên tâm về chất lượng. Có nhiều chương trình khuyến mãi, giá tốt."</div>
                        </div>
                        <div>
                            <img src="../../../web212/public/assets/img/pages/home/fp2.png" alt="">
                            <p style="color: #56B280">
                              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </p><h5 style="margin-bottom: 0%; margin-top: 10px;">Chị Nguyễn Thị B</h5>
                            <em style="color: #56B280">25 tuổi, đến từ Hà Nội</em>
                            </figure>
                            <div style="margin-top: 10px;">"Chất lượng sản phẩm tốt, giá cả phải chăng, đặt hàng nhạnh gọn lẹ."</div>
                        </div>
                        <div>
                            <img src="../../../web212/public/assets/img/pages/home/fp2.png" alt="">
                            <p style="color: #56B280">
                              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </p>
                            <h5 style="margin-bottom: 0%; margin-top: 10px;">Chị Nguyễn Thị C</h5>
                            <em style="color: #56B280">20 tuổi, đến từ Cần Thơ</em>
                            </figure>
                            <div style="margin-top: 10px;">"Đặt hàng trên website rất tiện lợi, giao hàng rất nhanh chóng"</div>
                        </div>
                    </div>
                    <br> <br><br> <br>
                </div>
            </div>


    </main>
    <?php 
      require_once "./mvc/views/".$data["footer"].".php";
    ?>
  </div>
