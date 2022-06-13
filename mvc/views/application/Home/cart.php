
<?php
  if(!isset($_SESSION["id"])){
    $_SESSION["cart"] = "cart";
    echo '<script type = "text/javascript">
    window.location.href = "http://localhost/web212/user/sign_in"</script>';
  }
?>
<style>

    /* =========================CART PROCESS=====================*/

    * {
        font-family: 'Montserrat';
    }
    .page-cart__list {
        width: 100%;
        display: none;
    }

    .product__header {
        display: flex;
        -webkit-transition: 0.5s;
        -o-transition: 0.5s;
        padding: 0 20px;
        color: #eeeeee;
        font-family: "Open Sans";
        font-size: 18px;
        font-style: normal;
        font-weight: 400;
        letter-spacing: normal;
        text-transform: none;
        transition: 0.5s;

        -ms-flex-pack: distribute;
        justify-content: space-around;
        width: 100%;
        border-bottom: 4px solid lightgray;
        padding-bottom: 5px;
    }

    .product__title, .product__price, .product__quantity, .product__total, .product__img{
        text-align: center;
        justify-content: center;
        align-items: center;
        margin: 0 0;
        display: flex;
        width: 25%;
        font-family: "Montserrat";

    }

    .product__img {
        margin-top: 10px;
        margin-bottom: 10px;
        margin-right: 10px;
    }

    .product__quantity {
        font-style: normal;
    }

    .product {
        height: max-content;
        width: 100%;
        display: flex;
        -webkit-transition: 0.5s;
        -o-transition: 0.5s;
        padding: 0 20px;
        color: #eeeeee;
        font-family: "Open Sans";
        font-size: 18px;
        font-style: normal;
        font-weight: 400;
        letter-spacing: normal;
        text-transform: none;
        transition: 0.5s;

        -ms-flex-pack: distribute;
        justify-content: space-around;
        width: 100%;
        border-bottom: 1px solid lightgray;
    }

    .product__close {
        margin-right: -90px;
        margin-left: 70px;
    }
</style>

<div class="page-wrapper">
    <?php
    require_once "./mvc/views/" . $data["header"] . ".php";
    ?>
    <main class="page-main">

    <div class="section-first-screen">
        <div class="first-screen__bg hide-in-sd" style="background-color: rgba(86, 178, 128, 15%); height: 300px;"></div>
        <div class="first-screen__content hide-in-sd" style="height: 300px;">
            <div class="uk-container" style="padding: 32px 0">
            <div class="first-screen__box page-info">
                <h2 class="first-screen-page">Giỏ hàng</h2>
                <div class="first-screen__breadcrumb">
                    <ul class="uk-breadcrumb">
                        <li><a href="http://localhost/web212/home/index">Trang chủ</a></li>
                        <li> <a href="http://localhost/web212/home/cart">Giỏ hàng</a></li>
                    </ul>
                </div>
                </div>
            </div>
        </div>


        <div class="page-content">
            <div class="uk-margin-large-top uk-container uk-container-small">
                <div class="page-cart__list" style="margin-bottom: 24px;">
                    <div class="product__header" style="font-weight: bold;">
                        <h3 class="product__title"><b>Tên sản phẩm</b></h3>
                        <h3 class="product__price"><b>Đơn giá</b></h3>
                        <h3 class="product__quantity"><b>Số lượng</b></h3>
                        <h3 class="product__total"><b>Số tiền</b></h3>
                    </div>
                </div>
                <img class="page-cart__img" src="../../../web212/public/assets/img/pages/cart/img-empty-cart.png" alt="">
                <div class="page-cart__title">
                    Giỏ hàng của bạn đang trống !
                </div>
            <br>
            <hr>
            <br>
            <div class="page-cart__box">
                <div class="uk-grid uk-grid-medium uk-width-1-1 uk-flex-left slotname" data-uk-grid style="margin-left: 2%; margin-bottom: 100px;">
                    <h2><b>Thông tin nhận hàng</b></h2>
                    <div>
                        <form>
                            <input class="uk-input " id="name" type="text" placeholder="Tên người nhận hàng" value="" style="margin-top: 26px;" required>
                            <input class="uk-input" id="email" type="email" placeholder="Email" value="" style="margin-top: 5px;">
                            <input class="uk-input" id="phone" type="number" placeholder="Số điện thoại nhận hàng" value="" style="margin-top: 5px;">
                            <input class="uk-input" id="address" type="text" placeholder="Địa chỉ nhận hàng" value="" style="margin-top: 5px;"><br>
                        </form>
                    </div>
                    <div style="text-align: left; font-size: 20px">
                        <h2 style="margin: 0;"><b>Phương thức thanh toán</b></h2> <br> 

                        <input type="radio" id="cod" name="payment" value="cod" required>
                        <label for="cod">Thanh toán khi nhận hàng</label><br>
                        <input type="radio" id="momo" name="payment" value="momo" required disabled>
                        <label for="momo">Thanh toán bằng MOMO</label><br>
                        <input type="radio" id="card" name="payment" value="card" required disabled>
                        <label for="card">Thanh toán bằng thẻ tín dụng</label>
                </div>
                </div>
                
                


                <div>
                    <a id="page-cart__control-btn" class="uk-button" href="#" onclick="getInfo()">Trở về mua sắm</a>
                </div>
            </div>

        </div>
    </div>
</main>

    <?php
    require_once "./mvc/views/" . $data["footer"] . ".php";
    ?>
</div>


<script type="text/javascript">
let totalPrice;
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
        selectedItem.price = parseFloat((document.getElementById('price-value').innerHTML).substring(1));
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
        let subtotal = 0;

        Object.values(productItem).map(item => {
            let myProduct = document.getElementsByClassName('product__' + item.tag)[0];
            if (myProduct === undefined){
                container.innerHTML += ''
                    + '<div class="product product__' + item.tag + '">'
                    + '<h5 class="product__title" style="justify-content: left;">' + '<img class="product__img" src="' + item.img_src + '">' + item.name + '</h5>'
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

            subtotal += parseFloat(item.price * item.quantity);
        });

        var totalEle = document.getElementsByClassName('page-cart__title')[0];
        var total = subtotal + 15000;
        totalPrice = total;
        totalEle.innerHTML = 'Tạm tính:  ' + '<span style="margin-left: 24px">' + subtotal + 'đ</span><br>Phí vận chuyển: <span style="margin-left: 36px">15000đ</span> <br> Tổng cộng: <span style="color: #56B280; margin-left: 36px">' + total + '</span>';
    }

    function getInfo(){
      
        var btn = document.getElementById('page-cart__control-btn');
        const text = btn.innerHTML;
        
        if (text=="Đặt hàng"){
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var phone = document.getElementById('phone').value;
            var address = document.getElementById('address').value;
            var radios = document.getElementsByTagName('input');
            var checkRadio = false;
            for (let i = 0; i < radios.length; i++) {
                if (radios[i].checked) checkRadio = true;
            }

            if ((name == "" || email =="" || phone =="" || address=="" || !checkRadio)){
                alert("Vui lòng nhập đầy đủ thông tin nhận hàng!");
            }
            else{
                if (confirm("Bạn muốn đặt đơn hàng này ?")) {
                    const orderID = Math.floor(Math.random() * 100000000);
                    let userID = <?php echo $_SESSION["id"];?>;
                    var today = new Date();
                    today.setHours( today.getHours()+(today.getTimezoneOffset()/-60) );
                    const datetime = today.toJSON().slice(0, 19).replace('T', ' '); 
                    btn.href = "http://localhost/web212/home/success/"+orderID+"/" +userID+"/" +datetime+"/" +totalPrice+"/" +name+"/"+email+"/" +phone+"/"+address;

                }
                
            }
        }
    }

    function ChangeUI(){
        let productNumber = localStorage.getItem('productNumber');
        productNumber = parseInt(productNumber);

        if (productNumber > 0){
            var btn = document.getElementById('page-cart__control-btn');
            var total = document.getElementsByClassName('page-cart__title')[0];
            // btn.href = 'http://localhost/web212/Home/payment/';
            btn.innerHTML = 'Đặt hàng';
            document.getElementsByClassName('page-cart__img')[0].style.display = 'none';
            total.style.textAlign = 'right';
            total.style.marginRight = '50px';
            document.getElementsByClassName('page-cart__list')[0].style.display = 'block';
            DisplayCart();
        }
        else {
            var btn = document.getElementById('page-cart__control-btn');
            btn.href = 'http://localhost/web212/Home/catalog';
            btn.innerHTML = 'Trờ về mua sắm';
            document.getElementsByClassName('page-cart__img')[0].style.display = 'block';
            var total = document.getElementsByClassName('page-cart__title')[0];
            total.innerHTML = 'Giỏ hàng của bạn đang trống !';
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
