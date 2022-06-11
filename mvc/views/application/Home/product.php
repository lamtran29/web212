
<div class="page-wrapper">
    <?php 
      require_once "./mvc/views/".$data["header"].".php";
    ?>

<main class="page-main">
      <?php 
        while ($row = mysqli_fetch_assoc($data["product"])){
      ?>

      <div class="section-first-screen">
          <div class="first-screen__bg hide-in-sd" style="background-color: rgba(86, 178, 128, 15%); height: 300px;"></div>
          <div class="first-screen__content hide-in-sd" style="height: 300px;">
              <div class="uk-container" style="padding: 32px 0">
                <div class="first-screen__box page-info">
                  <h2 class="first-screen-page">Sản phẩm</h2>
                  <div class="first-screen__breadcrumb">
                      <ul class="uk-breadcrumb">
                          <li><a href="http://localhost/web212/home/index">Trang chủ</a></li>
                          <li> <a href="http://localhost/web212/home/catalog">Sản phẩm</a></li>
                          <li> <span><?php echo $row["product_name"] ?></span></li>
                      </ul>
                  </div>
                </div>
              </div>
          </div>
      </div>

      <div class="page-content">
        <div class="uk-margin-large-top uk-container">
          <div class="product-full-card">
            <div class="uk-grid uk-grid-large uk-child-width-1-2@m uk-flex-middle" data-uk-grid>
              <div>
                <div class="product-full-card__gallery">
                  <div class="product-full-card__gallery-box">
                    <li class="uk-flex uk-flex-center uk-flex-middle"><img src="../../../web212/public/assets/img/<?php echo $row["avatar"] ?>" id="product-picture" alt="skin1"></li>
                  </div>
                </div>
              </div>
              <div>
                <div class="product-full-card__content">
                  <div class="product-full-card__not-active">
                    <div class="product-full-card__title"><?php echo $row["product_name"] ?></div>
                    <!-- <div class="product-full-card__desc"><?php echo $row["intro"] ?></div> -->
                    <!-- <div class="product-full-card__select">
                    </div> -->
                  </div>
                </div>
                <div class="product-full-card__info">
                  <div class="product-full-card__price"> 
                    <span class="value" id="price-value" style="font-size:30px">
                      <?php echo $row["price"] ?>đ
                    </span>
                  </div>

                  <span style="font-size:18px"><b>Danh mục sản phẩm:</b> 
                    <?php
                      switch ($row['category_id']) {
                        case 1:
                          echo "Trái cây";
                          break;
                        case 2:
                          echo "Thịt";
                          break;
                        case 3:
                          echo "Rau củ quả";
                          break;
                        case 4:
                          echo "Thủy hải sản";
                          break;
                      }
                    ?>
                  </span>
			            <p id = "product-tag" style="display:none">
                    <?php
                    echo $row['product_id']
                    ?>
                  </p>
                  <br >
                  <span style="font-size:18px"><b>Tình trạng:</b> Còn hàng</span>
                  
                  <br ><br >

                  <div class="product-full-card__btns">
                    <span style="font-size:18px;"><b>Số lượng:</b>
                    <span class="counter" style="margin-left: 24px; height: 40px">
                      <span class="minus">-</span>
                      <input type="text" value="1" id="counter-value" />
                      <span class="plus">+</span>
                    </span>
                    </span>
                  </div>
                  <br >
                  <div class="product-full-card__btns">
                    <a class="uk-button" href="#!" onclick="AddToCart()" style="height: 57px;">
                      Thêm vào giỏ hàng
                    <span data-uk-icon="cart"></span>
                    </a>
                  </div>
                </div>
                <!-- <div class="product-full-card__category">
                  <span ><b>Danh mục sản phẩm:</b> 
                    <?php
                      switch ($row['category_id']) {
                        case 1:
                          echo "Trái cây";
                          break;
                        case 2:
                          echo "Thịt";
                          break;
                        case 3:
                          echo "Rau củ quả";
                          break;
                        case 4:
                          echo "Thủy hải sản";
                          break;
                      }
                    ?>
                  </span>
			            <p id = "product-tag" style="display:none">
                    <?php
                    echo $row['product_id']
                    ?>
                  </p>
                  <br >
                  <span><b>Tình trạng:</b> Còn hàng</span>
                  
                </div> -->
                <div class="product-full-card__share"><span style="font-size: 18px"><b>Chia sẻ:</b></span>
                  <ul>
                    <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a href="#!"><i class="fab fa-pinterest-p"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="product-full-card__tabs">
              <div class="detail-description bg-green-op">
                <h2>Mô tả sản phẩm</h2>
                <?php echo $row["intro"] ?>  
              </div>

              <div class="detail-description"> 
                  <h2>Đánh giá sản phẩm</h2>
                  <ul class="uk-comment-list">
                    <li>
                        <article class="uk-comment">
                            <header class="uk-comment-header">
                                <div class="uk-grid-small uk-grid-divider" data-uk-grid>
                                    <div class="uk-width-auto@s"><img class="uk-comment-avatar" src="../../../web212/public/assets/img/pages/home/feedback_1.png" alt></div>
                                    <div class="uk-width-expand@s">
                                        <div class="uk-flex uk-flex-middle uk-margin-small-bottom">
                                            <h4 class="uk-comment-title uk-margin-remove">Nguyễn Tiến Thịnh</h4><span class="uk-text-meta uk-margin-small-left">August 20, 2021</span>
                                        </div>
                                        <div class="uk-comment-body">
                                        <p>Chất lượng rất tuyệt vời</p>
                                        </div>
                                    </div>
                                </div>
                            </header>
                        </article>
                    </li>
                    <li>
                        <article class="uk-comment">
                            <header class="uk-comment-header">
                                <div class="uk-grid-small uk-grid-divider" data-uk-grid>
                                    <div class="uk-width-auto@s"><img class="uk-comment-avatar" src="../../../web212/public/assets/img/pages/home/feedback_2.png" alt></div>
                                    <div class="uk-width-expand@s">
                                        <div class="uk-flex uk-flex-middle uk-margin-small-bottom">
                                            <h4 class="uk-comment-title uk-margin-remove">Lê Trần Hoàng Thanh</h4><span class="uk-text-meta uk-margin-small-left">August 20, 2020</span>
                                        </div>
                                        <div class="uk-comment-body">
                                        <p>Tối rất thích</p>
                                        </div>
                                    </div>
                                </div>
                            </header>
                        </article>
                    </li>
                  </ul>
                  <div class="block-form uk-margin-medium-top">
                    <div class="section-title">
                      <div class="uk-h2">Leave a Reply</div>
                    </div>
                    <div class="section-content">
                      <p>Your email address will not be published. Required fields are marked *</p>
                      <form action="#!">
                        <div class="uk-grid uk-grid-small uk-child-width-1-2@s" data-uk-grid>
                          <div><input class="uk-input uk-form-large" type="text" placeholder="Your Name *"></div>
                          <div><input class="uk-input uk-form-large" type="text" placeholder="Email *"></div>
                          <div class="uk-width-1-1"><textarea class="uk-textarea uk-form-large" placeholder="Reviews *"></textarea></div>
                          <div><button class="uk-button uk-button-large" type="submit">Post Review</button></div>
                        </div>
                      </form>
                    </div>
                  </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      
      <?php 
              }
      ?>
    </main>
    <?php 
      require_once "./mvc/views/".$data["footer"].".php";
    ?>
  </div>

<script type="text/javascript">

let selectedItem = {
    img_src: "",
    name: "",
    tag: "",                            //
    price: 0,
    quantity: 0
}



function AddToCart(){
    let productNumber = localStorage.getItem('productNumber');
    productNumber = parseInt(productNumber);
  
    selectedItem.name = document.getElementsByClassName('product-full-card__title')[0].innerHTML;
    selectedItem.price = parseFloat((document.getElementById('price-value').innerHTML));
    selectedItem.quantity = parseInt(document.getElementById('counter-value').value);
    // selectedItem.tag = foodTag.get(selectedItem.name);
    selectedItem.tag = JSON.parse(document.getElementById('product-tag').innerHTML);
    
    img = document.getElementById("product-picture");                                                   // img to data url
    var imgCanvas = document.createElement("canvas"),
        imgContext = imgCanvas.getContext("2d");
    imgCanvas.width = img.width;
    imgCanvas.height = img.height;
    imgContext.drawImage(img, 0, 0, img.width, img.height);
    var imgAsDataURL = imgCanvas.toDataURL("");

    selectedItem.img_src = imgAsDataURL;                                                                // store image to selectedItem

    let productItem = localStorage.getItem('productItem');


    productItem = JSON.parse(productItem);
    if (productItem != null){
        if (productItem[selectedItem.tag] === undefined){
            productItem = {
                ...productItem,
                [selectedItem.tag] : selectedItem
            }
            localStorage.setItem('productNumber', productNumber + 1);
        }
        else {
            productItem[selectedItem.tag].quantity += selectedItem.quantity;
        }
    }
    else {
        productItem = {
            [selectedItem.tag] : selectedItem
        };
        localStorage.setItem('productNumber', 1);
    }

    localStorage.setItem('productItem', JSON.stringify(productItem));

    alert("Đã thêm vào giỏ hàng");
}


/*=================CART PAGE ================*/
function MinusBtn(tag){
    let productItem = localStorage.getItem('productItem');
    productItem = JSON.parse(productItem);
    productItem[tag].quantity--;
    localStorage.setItem('productItem', JSON.stringify(productItem));
    if (productItem[tag].quantity === 0){
        CloseBtn(tag);
    }
    else DisplayCart();
}

function PlusBtn(tag){
    let productItem = localStorage.getItem('productItem');
    productItem = JSON.parse(productItem);
    productItem[tag].quantity++;
    localStorage.setItem('productItem', JSON.stringify(productItem));
    DisplayCart();
}

function CloseBtn(tag){
    let product_name = document.getElementsByClassName('product__' + tag)[0];
    product_name.remove();

    let productItem = localStorage.getItem('productItem');
    productItem = JSON.parse(productItem);

    delete productItem[tag];                                                // delete item

    localStorage.setItem('productItem', JSON.stringify(productItem));

    let productNumber = localStorage.getItem('productNumber');              // update total number of product
    productNumber = parseInt(productNumber);
    localStorage.setItem('productNumber', productNumber - 1);
    if (productNumber-1 === 0){
        console.log('x');
        ChangeUI();
    }
    else DisplayCart();
}

function DisplayCart(){
    let productItem = localStorage.getItem('productItem');
    productItem = JSON.parse(productItem);
    let container = document.getElementsByClassName('page-cart__list')[0];
    let total = 0;

    Object.values(productItem).map(item => {
        let myProduct = document.getElementsByClassName('product__' + item.tag)[0];
        if (myProduct === undefined){
            container.innerHTML += ''
                + '<div class="product product__' + item.tag + '">'
                + '<h5 class="product__title">' + '<img class="product__img" src="' + item.img_src + '">' + item.name + '</h5>'
                + '<h5 class="product__price">' + item.price + '</h5>'
                + '<h5 class="product__quantity">' + '<span class="counter" style = "font-style: normal;"><span class="minus" onclick="MinusBtn(\'' + item.tag + '\')">-</span><input type="text" value="' + item.quantity + '" /><span onclick="PlusBtn(\'' + item.tag + '\')" class="plus">+</span></span>' + '</h5>'
                + '<h5 class="product__total">'+ item.price * item.quantity + '<a onclick="CloseBtn(\'' + item.tag + '\')" class = "product__close"> <img src="https://img.icons8.com/ios-glyphs/30/ffffff/macos-close.png"/> </a>' + '</h5>'
                + '</div>';
        }
        else {
            let childrens = document.getElementsByClassName('product__' + item.tag)[0].childNodes;
            childrens[2].innerHTML = '<span class="counter" style = "font-style: normal;"><span class="minus" onclick="MinusBtn(\'' + item.tag + '\')">-</span><input type="text" value="' + item.quantity + '" /><span onclick="PlusBtn(\'' + item.tag + '\')" class="plus">+</span></span>';
            childrens[3].innerHTML = item.price * item.quantity + '<a onclick="CloseBtn(\'' + item.tag + '\')" class = "product__close"> <img src="https://img.icons8.com/ios-glyphs/30/ffffff/macos-close.png"/> </a>';
        }

        total += parseFloat(item.price * item.quantity);
    });

    var totalEle = document.getElementsByClassName('page-cart__title')[0];
    totalEle.innerHTML = 'Total:  ' + total;
}

function ChangeUI(){
    let productNumber = localStorage.getItem('productNumber');
    productNumber = parseInt(productNumber);

    if (productNumber > 0){
        var btn = document.getElementById('page-cart__control-btn');
        btn.href = '<%= payment_index_path %>';
        btn.innerHTML = 'PAYMENT';
        document.getElementsByClassName('page-cart__img')[0].style.display = 'none';
        var total = document.getElementsByClassName('page-cart__title')[0];
        total.style.textAlign = 'right';
        total.style.marginRight = '50px';
        document.getElementsByClassName('page-cart__list')[0].style.display = 'block';
        DisplayCart();
    }
    else {
        var btn = document.getElementById('page-cart__control-btn');
        btn.href = '<%= pages_path %>';
        btn.innerHTML = 'RETURN TO SHOP';
        document.getElementsByClassName('page-cart__img')[0].style.display = 'block';
        var total = document.getElementsByClassName('page-cart__title')[0];
        total.innerHTML = 'Your cart is currently empty.';
        total.style.textAlign = 'center';
        total.style.marginRight = '0px';
        document.getElementsByClassName('page-cart__list')[0].style.display = 'none';
        var slotName = document.getElementsByClassName('slotname');
        slotName[0].style.display = 'none';
        slotName[1].style.display = 'none';
    }
}

ChangeUI();
</script>