
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

        <div class="category-cards row">
            <div class="category-card col">
                <a href="http://localhost/web212/home/catalog">
                    <div class="category-img">
                        <img src="../../../web212/public/assets/img/pages/home/vegetables.png" alt="">
                    </div>
                    <h5 class="name"><b>Rau củ quả</b></h5>
                </a>
            </div>
            
            <div class="category-card col">
                <a href="http://localhost/web212/home/catalog">
                    <div class="category-img">
                        <img src="../../../web212/public/assets/img/pages/home/fruit.png" alt="">
                    </div>
                    <h5 class="name"><b>Trái cây</b></h5>
                </a>
            </div>
            
            <div class="category-card col">
                <a href="http://localhost/web212/home/catalog">
                    <div class="category-img">
                        <img src="../../../web212/public/assets/img/pages/home/meat.png" alt="">
                    </div>
                    <h5 class="name"><b>Các loại thịt</b></h5>
                </a>
            </div>
            
            <div class="category-card col">
                <a href="http://localhost/web212/home/catalog">
                    <div class="category-img">
                        <img src="../../../web212/public/assets/img/pages/home/seafood.png" alt="">
                    </div>
                    <h5 class="name"><b>Hải sản</b></h5>
                </a>
            </div>
            
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
        <ul class="js-filter uk-grid uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l" data-uk-grid>
            <?php 
            $i = 0;
            while($row = mysqli_fetch_array($data["products"])){
            if ($i == 4) break;
          ?>  
                <li data-tags="<?php echo $row["category_id"] ?>">
                  <div class="product-item">
                    <div class="product-item__box">
                      <div class="product-item__intro">
                        <a href="http://localhost/web212/home/product/<?php echo $row["product_id"] ?>" style="text-decoration: none;">
                          <div class="product-item__not-active">
                            <div class="product-item__media">
                              <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><img class="product-zoom" src="../../../web212/public/assets/img<?php echo $row["avatar"] ?>" alt="Skin 1" /></div>
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
            }
        ?>
        </ul>
      </div>
    </div>


    
    <!-- ====================================================================== -->      
      <div class="section-about">
        <a id="about_us"></a>
          <div class="uk-section uk-container">
            <div class="uk-grid uk-child-width-1-2@m uk-flex-middle" data-uk-grid>
              <div class="uk-text-center"><img src="../../../web212/public/assets/img/pages/home/about.jpg" alt="about us"></div>
                <div>
                  <div class="section-title wave">
                    <h1>Về chúng tôi</h1>
                  </div>
                  <div class="section-content">
                    <p>Chúng tôi được sinh ra để mang lại cho bạn một làn da, một mái tóc luôn khỏe mạnh, trẻ trung và tràn đầy sức sống từ những nguồn nguyên liệu đơn giản và gần gũi mà bạn ăn hằng ngày. Chúng tôi luôn giữ một nhiệm vụ trong tâm trí: áp dụng các lợi ích của thực phẩm quanh ta kết hợp với sự hiểu biết khoa học để tạo ra các sản phẩm mỹ phẩm an toàn và hiệu quả cho tất cả mọi người. </p>
                    <p>Hành trình gian nan tìm đến vẻ đẹp thật sự không phải là nhiệm vụ của riêng bạn, chúng tôi sẽ cùng bạn đi trên hành trình đó. Luôn luôn là như vậy, mãi mãi là như vậy.</p>
                    <div class="uk-margin-medium-top"><a class="uk-button" href="http://localhost/web212/Home/catalog"><span>Mua ngay</span></a></div>
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
                                <div class="feature-item__title">Nguồn gốc rõ ràng</div>
                                <div class="feature-item__desc">Cocoon cam kết 100% nguyên liệu có nguồn gốc rõ ràng và an toàn cho làn da.</div>
                            </div>
                        </div>
                        <div>
                            <div class="feature-item">
                                <i class="bi bi-brightness-high"></i>
                                <div class="feature-item__title">Thuần chay</div>
                                <div class="feature-item__desc">Các sản phẩm của COCOON là 100% thuần chay, được đăng ký bởi tổ chức The Vegan Society.</div>
                            </div>
                        </div>
                        <div>
                            <div class="feature-item">
                                <i class="bi bi-award"></i>
                                <div class="feature-item__title">Không thử nghiệm trên động vật</div>
                                <div class="feature-item__desc">Các công thức mỹ phẩm của Cocoon được nghiên cứu và thử nghiệm bằng các bài kiểm tra trong phòng thí nghiệm hoặc trên các tình nguyện viên.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

      <!-- ========================================================= -->
            <div class="section-feedback" style="background-color:#222222;">
                <div class="uk-container">
                    <div style="text-align: center;">
                        <br>
                        <h1 style="color: whitesmoke">Khách hàng nói gì về chúng tôi</h1><br><br><br>
                    </div>
                    <div class="uk-grid uk-child-width-1-2@s" data-uk-grid>
                        <div class="uk-width-1-2">
                            <img src="../../../web212/public/assets/img/pages/home/feedback_1.png" alt="">
                            <h5 style="color: white; margin-bottom: 0%; margin-top: 10px;">Anh Đinh Gia Quang</h5>
                            <em style="color: #cc9b56">30 tuổi, đến từ TpHCM</em>
                            <div style="color: white; margin-top: 10px;">"Sản phẩm của Cocoon không chỉ lành tính mà còn có giá cả phải chăng và phù hợp với làn da của người Việt."</div>
                        </div>
                        <div class="uk-width-1-2">
                            <img src="../../../web212/public/assets/img/pages/home/feedback_2.png" alt="">
                            <h5 style="color: white; margin-bottom: 0%; margin-top: 10px;">Chị Cao Thị Thanh Mai</h5>
                            <em style="color: #cc9b56">20 tuổi, đến từ Thái Bình</em>
                            </figure>
                            <div style="color: white; margin-top: 10px;">"Tôi rất thích việc thương hiệu sử dụng những nguyên liệu thân thuộc hàng ngày để tạo ra mỹ phẩm. Các sản phẩm có mùi rất thơm."</div>
                        </div>
                    </div>
                    <br> <br><br> <br>
                </div>
            </div>


            <div class="section-about">
                <div class="uk-margin-large-top uk-container uk-container-small">
                    <article class="article-full">

                        <div class="article-full__image">
                            <a href=""><img src="../../../web212/public/assets/img/pages/home/introbanner.jpg" alt="img-article"></a>
                        </div>

                        <div class="article-full__content">
                            <h1>COCOON - Mỹ phẩm thuần chay - cho nét đẹp thuần Việt</h1>
                            <p>Cocoon nghĩa là “cái kén”, cái kén như là “ngôi nhà” để ủ ấp, nuôi dưỡng con sâu nhỏ để đến một ngày sẽ hóa thành nàng bướm xinh đẹp và lộng lẫy. Từ ý nghĩa như thế, Cocoon chính là “ngôi nhà” để chăm sóc làn da, mái tóc của người Việt Nam, giúp cho họ trở nên xinh đẹp, hoàn thiện hơn và tỏa sáng theo cách của chính họ. Cocoon ra đời với một lý do đơn giản là làm đẹp cho người Việt từ chính những nguồn nguyên liệu gần gũi, quen thuộc. Tạo hóa cũng rất ưu ái cho thiên nhiên Việt Nam chúng ta một thế giới thực vật vô cùng phong phú từ cây trái đến thảo dược. Bên trong chúng ẩn chứa những dưỡng chất quý giá không chỉ ăn rất ngon mà còn rất tốt khi đưa lên làn da và mái tóc. Chính vì thế, chẳng có lý do gì để chúng tôi từ chối một nguồn nguyên liệu sẵn có và tuyệt vời đến vậy. </p>            
                            <p>Mỹ phẩm cũng giống như thực phẩm đều là những “món ăn bổ dưỡng” mang đến vẻ đẹp cho con người. Với sự tiến bộ của xã hội, con người có xu hướng tìm kiếm các loại thức ăn từ thực vật để bảo vệ sức khỏe. Song hành với tư duy này, mỹ phẩm thuần chay cũng bắt đầu trở thành xu hướng yêu thích của nhiều người theo lối sống xanh. Đó chính là lý do thôi thúc Cocoon nghiên cứu và không ngừng cho ra đời những sản phẩm mỹ phẩm 100% thuần chay giữ trọn dưỡng chất của thực vật Việt Nam, an toàn, lành tính, không sử dụng thành phần từ động vật và nói không với thử nghiệm trên động vật.</p>
          
                            <h2>Triết lý </h2>
                            <p>Chúng tôi là những người yêu thiên nhiên, luôn say đắm trong việc khám phá các nguyên liệu quen thuộc trong đời sống hằng ngày của người Việt Nam từ rau củ, trái cây, để làm sao để đứa chúng vào trong các sản phẩm mỹ phẩm mà các chất dinh dưỡng của chúng được giữ lại một cách nguyên vẹn và hoàn hảo. Những thực phẩm này rất giàu vitamin, chất chống oxi hóa và các khoáng chất để tăng cường sức khỏe của làn da. Vậy còn gì tuyệt vời hơn là đưa chúng lên làn da của bạn một cách trọn vẹn nhất có thể.</p>            
                            <p>Qua quá trình nghiên cứu và thử nghiệm, những công thức được hình thành và trở nên hoàn hảo. Chúng đã phát huy tác dụng và đáp ứng được mong mỏi của người Việt: an toàn và hiệu quả. </p>
                            <p>Đối với chúng tôi, những gì đưa lên da phải an toàn, hiệu quả và không có nguồn gốc từ động vật</p>
                            
                            <h2>Sứ mệnh </h2>
                            <p>Chúng tôi được sinh ra để mang lại cho bạn một làn da, một mái tóc luôn khỏe mạnh, trẻ trung và tràn đầy sức sống từ những nguồn nguyên liệu đơn giản và gần gũi mà bạn ăn hằng ngày. Chúng tôi luôn giữ một nhiệm vụ trong tâm trí: áp dụng các lợi ích của thực phẩm quanh ta kết hợp với sự hiểu biết khoa học để tạo ra các sản phẩm mỹ phẩm an toàn và hiệu quả cho tất cả mọi người. </p>
                            <p>Hành trình gian nan tìm đến vẻ đẹp thật sự không phải là nhiệm vụ của riêng bạn, chúng tôi sẽ cùng bạn đi trên hành trình đó. Luôn luôn là như vậy, mãi mãi là như vậy.</p>

                            <h2>Cam kết</h2>
                            <p>100% nguyên liệu có nguồn gốc rõ ràng và an toàn cho làn da: đây là lời hứa và cam kết tuyệt đối của chúng tôi. Tất cả thành phần nguyên liệu trong các sản phẩm của chúng tôi đều có chứng từ chứng minh nguồn gốc xuất xứ từ các nhà cung cấp nguyên liệu trong và ngoài nước. Tất cả các sản phẩm mỹ phẩm trước khi được đưa ra thị trường đều được nghiên cứu từ 12 đến 24 tháng, được thử nghiệm để vượt qua các bài kiểm tra về vi sinh, pH, độ ổn định theo thời gian, theo nhiệt độ, độ kích ứng (theo tiêu chuẩn của trung tâm DRC Nhật Bản có chi nhánh tại Thái Lan) và phải đáp ứng đầy đủ các quy định và việc lưu thông trên thị trường theo quy định của Bộ Y tế Việt Nam. Tất nhiên, các sản phẩm của chúng tôi được điều chế sẽ không có các thành phần như paraben, formaldehyde, phthalates, hydroquinone, triclosan,.... Trên thực tế, chúng tôi cấm hàng trăm thành phần nguy hại và thường xuyên cập nhật danh sách này theo tiêu chuẩn của bộ y tế Việt Nam. Chúng tôi luôn luôn làm điều này vì chúng tôi tôn trọng luật pháp và làn da của bạn.</p>
                            <p>100% thuần chay: chúng tôi không sử dụng các nguyên liệu có nguồn gốc từ động vật thường thấy trong mỹ phẩm như : mật ong, sáp ong, mỡ lông cừu, nhau thai cừu, dịch ốc sên, dầu gan cá mập, tơ tằm,.. Thay vào đó chúng tôi vận dụng và phát huy tối đa kha năng của các hoạt chất, chiết xuất từ thực vật mà không cần đến sự hỗ trợ của các nguyên liệu có nguồn gốc từ động vật.</p>
                            <p>100% không bao giờ thử nghiệm trên động vật: các công thức mỹ phẩm của Cocoon được nghiên cứu và được thử nghiệm bằng các bài kiểm tra trong phòng thí nghiệm (in-Vitro test) hoặc trên các tình nguyện viên (in-Vivo test). Đồng thời các nhà cung cấp nguyên liệu cũng song hành và cam kết rằng họ cũng không thử nghiệm trên động vật trong quá trình nghiên cứu và sản xuất ra nguyên liệu đó. Chúng tôi không thực hiện các bài thử nghiệm lên động vật như: thỏ, chuột, lòng đỏ trứng gà đã thụ tinh,... vì tính nhân đạo và lời hứa bất di bất dịch với khách hàng và cộng đồng.</p>

                            <div class="section-first-screen border-top" style="padding-bottom:30px">

                                <div class="first-screen__slideshow">
                                    <div data-uk-slideshow="min-height: 400; max-height: 785; autoplay: true">
                                        <div class="uk-position-relative" tabhome="-1">
                                            <ul class="uk-slideshow-items">
                                            <li>
                                              <div class="uk-position-cover uk-transform-origin-center-left">
                                                <p></p>
                                                <img src="../../../web212/public/assets/img/pages/home/ingredient1.jpg" alt="ingredient-1" data-uk-cover>
                                              </div>
                                            </li>
                                            <li>
                                              <div class="uk-position-coveruk-transform-origin-center-left"><img src="../../../web212/public/assets/img/pages/home/ingredient2.jpg" alt="ingredient-2" data-uk-cover></div>
                                            </li>
                                            <li>
                                              <div class="uk-position-coveruk-transform-origin-center-left"><img src="../../../web212/public/assets/img/pages/home/ingredient3.jpg" alt="ingredient-3" data-uk-cover></div>
                                            </li>
                                            <li>
                                              <div class="uk-position-coveruk-transform-origin-center-left"><img src="../../../web212/public/assets/img/pages/home/ingredient4.jpg" alt="ingredient-4" data-uk-cover></div>
                                            </li>
                                            <li>
                                              <div class="uk-position-coveruk-transform-origin-center-left"><img src="../../../web212/public/assets/img/pages/home/ingredient5.jpg" alt="ingredient-5" data-uk-cover></div>
                                            </li>
                                            </ul>
                                        </div>

                                        <div class="slideshow-dotnav uk-position-bottom-center">
                                            <ul class="uk-slideshow-nav uk-dotnav uk-flex-center"></ul>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                </div>
            </div>

      <!-- <div class="section-about">
        <div class="article-full__content">
          <h2>COCOON - Mỹ phẩm thuần chay - cho nét đẹp thuần Việt</h2> 

          <img src="../../../web212/public/assets/img/pages/home/introbanner.jpg" alt="introbanner">

          <h1>Ý nghĩa thương hiệu </h1>
          <p>Cocoon nghĩa là “cái kén”, cái kén như là “ngôi nhà” để ủ ấp, nuôi dưỡng con sâu nhỏ để đến một ngày sẽ hóa thành nàng bướm xinh đẹp và lộng lẫy. Từ ý nghĩa như thế, Cocoon chính là “ngôi nhà” để chăm sóc làn da, mái tóc của người Việt Nam, giúp cho họ trở nên xinh đẹp, hoàn thiện hơn và tỏa sáng theo cách của chính họ. Cocoon ra đời với một lý do đơn giản là làm đẹp cho người Việt từ chính những nguồn nguyên liệu gần gũi, quen thuộc. Tạo hóa cũng rất ưu ái cho thiên nhiên Việt Nam chúng ta một thế giới thực vật vô cùng phong phú từ cây trái đến thảo dược. Bên trong chúng ẩn chứa những dưỡng chất quý giá không chỉ ăn rất ngon mà còn rất tốt khi đưa lên làn da và mái tóc. Chính vì thế, chẳng có lý do gì để chúng tôi từ chối một nguồn nguyên liệu sẵn có và tuyệt vời đến vậy. </p>            
          <p>Mỹ phẩm cũng giống như thực phẩm đều là những “món ăn bổ dưỡng” mang đến vẻ đẹp cho con người. Với sự tiến bộ của xã hội, con người có xu hướng tìm kiếm các loại thức ăn từ thực vật để bảo vệ sức khỏe. Song hành với tư duy này, mỹ phẩm thuần chay cũng bắt đầu trở thành xu hướng yêu thích của nhiều người theo lối sống xanh. Đó chính là lý do thôi thúc Cocoon nghiên cứu và không ngừng cho ra đời những sản phẩm mỹ phẩm 100% thuần chay giữ trọn dưỡng chất của thực vật Việt Nam, an toàn, lành tính, không sử dụng thành phần từ động vật và nói không với thử nghiệm trên động vật.</p>
          
          <h1>Triết lý </h1>
          <p>Chúng tôi là những người yêu thiên nhiên, luôn say đắm trong việc khám phá các nguyên liệu quen thuộc trong đời sống hằng ngày của người Việt Nam từ rau củ, trái cây, để làm sao để đứa chúng vào trong các sản phẩm mỹ phẩm mà các chất dinh dưỡng của chúng được giữ lại một cách nguyên vẹn và hoàn hảo. Những thực phẩm này rất giàu vitamin, chất chống oxi hóa và các khoáng chất để tăng cường sức khỏe của làn da. Vậy còn gì tuyệt vời hơn là đưa chúng lên làn da của bạn một cách trọn vẹn nhất có thể.</p>            
          <p>Qua quá trình nghiên cứu và thử nghiệm, những công thức được hình thành và trở nên hoàn hảo. Chúng đã phát huy tác dụng và đáp ứng được mong mỏi của người Việt: an toàn và hiệu quả. </p>
          <p>Đối với chúng tôi, những gì đưa lên da phải an toàn, hiệu quả và không có nguồn gốc từ động vật</p>
          
          <h1>Sứ mệnh </h1>
          <p>Chúng tôi được sinh ra để mang lại cho bạn một làn da, một mái tóc luôn khỏe mạnh, trẻ trung và tràn đầy sức sống từ những nguồn nguyên liệu đơn giản và gần gũi mà bạn ăn hằng ngày. Chúng tôi luôn giữ một nhiệm vụ trong tâm trí: áp dụng các lợi ích của thực phẩm quanh ta kết hợp với sự hiểu biết khoa học để tạo ra các sản phẩm mỹ phẩm an toàn và hiệu quả cho tất cả mọi người. </p>
          <p>Hành trình gian nan tìm đến vẻ đẹp thật sự không phải là nhiệm vụ của riêng bạn, chúng tôi sẽ cùng bạn đi trên hành trình đó. Luôn luôn là như vậy, mãi mãi là như vậy.</p>

          <h1>Cam kết</h1>
          <p>100% nguyên liệu có nguồn gốc rõ ràng và an toàn cho làn da: đây là lời hứa và cam kết tuyệt đối của chúng tôi. Tất cả thành phần nguyên liệu trong các sản phẩm của chúng tôi đều có chứng từ chứng minh nguồn gốc xuất xứ từ các nhà cung cấp nguyên liệu trong và ngoài nước. Tất cả các sản phẩm mỹ phẩm trước khi được đưa ra thị trường đều được nghiên cứu từ 12 đến 24 tháng, được thử nghiệm để vượt qua các bài kiểm tra về vi sinh, pH, độ ổn định theo thời gian, theo nhiệt độ, độ kích ứng (theo tiêu chuẩn của trung tâm DRC Nhật Bản có chi nhánh tại Thái Lan) và phải đáp ứng đầy đủ các quy định và việc lưu thông trên thị trường theo quy định của Bộ Y tế Việt Nam. Tất nhiên, các sản phẩm của chúng tôi được điều chế sẽ không có các thành phần như paraben, formaldehyde, phthalates, hydroquinone, triclosan,.... Trên thực tế, chúng tôi cấm hàng trăm thành phần nguy hại và thường xuyên cập nhật danh sách này theo tiêu chuẩn của bộ y tế Việt Nam. Chúng tôi luôn luôn làm điều này vì chúng tôi tôn trọng luật pháp và làn da của bạn.</p>
          <p>100% thuần chay: chúng tôi không sử dụng các nguyên liệu có nguồn gốc từ động vật thường thấy trong mỹ phẩm như : mật ong, sáp ong, mỡ lông cừu, nhau thai cừu, dịch ốc sên, dầu gan cá mập, tơ tằm,.. Thay vào đó chúng tôi vận dụng và phát huy tối đa kha năng của các hoạt chất, chiết xuất từ thực vật mà không cần đến sự hỗ trợ của các nguyên liệu có nguồn gốc từ động vật.</p>
          <p>100% không bao giờ thử nghiệm trên động vật: các công thức mỹ phẩm của Cocoon được nghiên cứu và được thử nghiệm bằng các bài kiểm tra trong phòng thí nghiệm (in-Vitro test) hoặc trên các tình nguyện viên (in-Vivo test). Đồng thời các nhà cung cấp nguyên liệu cũng song hành và cam kết rằng họ cũng không thử nghiệm trên động vật trong quá trình nghiên cứu và sản xuất ra nguyên liệu đó. Chúng tôi không thực hiện các bài thử nghiệm lên động vật như: thỏ, chuột, lòng đỏ trứng gà đã thụ tinh,... vì tính nhân đạo và lời hứa bất di bất dịch với khách hàng và cộng đồng.</p>
          
          <h1>Cam kết luôn đi đôi với hành động</h1> 
          <p>COCOON rất vinh dự là thương hiệu mỹ phẩm Việt Nam đầu tiên được thông qua trong chương trình Leaping Bunny cam kết không thử nghiệm trên động vật cũng như không có sự tàn ác đối với động vật của tổ chức Cruelty Free International và được chứng nhận không thử nghiệm trên động vật từ tổ chức bảo vệ quyền lợi động vật PETA.</p>
          <p>Chúng tôi không thực hiện các thử nghiệm trên động vật và cũng không yêu cầu các công ty, tổ chức hoặc cá nhân nào khác thực hiện các thử nghiệm trên động vật dưới thương hiệu của chúng tôi. COCOON tự hào khi tham gia vào hai chương trình toàn cầu Leaping Bunny của Cruelty Free International và Beauty Without Bunnies của PETA. Đây là hai chương trình bảo vệ và cam kết không có sự tàn ác đối với động vật uy tín nhất trên thế giới. Trong đó, Leaping Bunny được xem là “tiêu chuẩn vàng” toàn cầu cho các sản phẩm mỹ phẩm, chăm sóc cá nhân và gia dụng. Tính đến nay, trên toàn thế giới đã có hơn 1.000 thương hiệu được chấp thuận trong chương trình này.</p>
          <p>Tất cả các sản phẩm mỹ phẩm mang thương hiệu COCOON đều được phê duyệt theo chương trình Leaping Bunny và PETA và được gắn biểu tượng “con thỏ” trên bao bì để giúp người tiêu dùng dễ dàng nhận biết. Chúng tôi tuân thủ các chính sách và chủ động giám sát các nhà cung cấp để đảm bảo rằng sản phẩm của chúng tôi tiếp tục tuân thủ các tiêu chí của Leaping Bunny và PETA.</p>
          <p>Ngoài ra, các sản phẩm của COCOON là 100% thuần chay, được đăng ký bởi tổ chức The Vegan Society - một tổ chức từ thiện giáo dục lâu đời trên thế giới, cung cấp thông tin và hướng dẫn về các khía cạnh khác nhau của cuộc sống thuần chay. Với biểu tượng “hoa hướng dương”, The Vegan Society cũng là một trong những chứng nhận uy tín xác thực cho các sản phẩm không có thành phần từ động vật và không thử nghiệm trên động vật.</p>
          <h2>Cocoon tự hào là thương hiệu mỹ phẩm 100% sản xuất tại Việt Nam</h2>

          <h1>Giá trị thương hiệu</h1> 

          <p>The COCOON ORIGINAL VIETNAM believes that beauty products should be cruelty free. We are proud to be Leaping Bunny approved. A global programme, Leaping Bunny requires cruelty free standards over and above legal requirements.</p>
          <p>All of our own brand cosmetic and personal care products are approved under the Cruelty Free International Leaping Bunny programme, the internationally recognisable gold standard for cruelty free products. We adhere to a fixed cut-off date policy and proactively mgg onitor our suppliers to ensure that our products continue to adhere to the Leaping Bunny criteria. Our supplier monitoring system is also independently audited.</p>
          <p>For more information about Cruelty Free International, Leaping Bunny and Leaping Bunny criteria, please visit www.crueltyfreeinternational.org</p>

          <div class="section-first-screen border-top" style="padding-bottom:30px">
            <h1>Nguyên liệu của Cocoon</h1>
            <div class="first-screen__slideshow">
              <div data-uk-slideshow="min-height: 400; max-height: 785; autoplay: true">
                <div class="uk-position-relative" tabindex="-1">
                  <ul class="uk-slideshow-items">
                    <li>
                      <div class="uk-position-cover uk-transform-origin-center-left">
                        <p></p>
                        <img src="../../../web212/public/assets/img/pages/home/ingredient1.jpg" alt="ingredient-1" data-uk-cover>
                      </div>
                    </li>
                    <li>
                      <div class="uk-position-coveruk-transform-origin-center-left"><img src="../../../web212/public/assets/img/pages/home/ingredient2.jpg" alt="ingredient-2" data-uk-cover></div>
                    </li>
                    <li>
                      <div class="uk-position-coveruk-transform-origin-center-left"><img src="../../../web212/public/assets/img/pages/home/ingredient3.jpg" alt="ingredient-3" data-uk-cover></div>
                    </li>
                    <li>
                      <div class="uk-position-coveruk-transform-origin-center-left"><img src="../../../web212/public/assets/img/pages/home/ingredient4.jpg" alt="ingredient-4" data-uk-cover></div>
                    </li>
                    <li>
                      <div class="uk-position-coveruk-transform-origin-center-left"><img src="../../../web212/public/assets/img/pages/home/ingredient5.jpg" alt="ingredient-5" data-uk-cover></div>
                    </li>
                  </ul>
                </div>
                    
                <div class="slideshow-dotnav uk-position-bottom-center">
                  <ul class="uk-slideshow-nav uk-dotnav uk-flex-center"></ul>
                </div>
              </div>
            </div>
          </div> 
        </div>
      </div> -->
    </main>
    <?php 
      require_once "./mvc/views/".$data["footer"].".php";
    ?>
  </div>

