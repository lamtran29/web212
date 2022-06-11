<?php

    class Home extends Controller{
        function index(){
            $product = $this->modal("ProductModal");
            $layout = $this->view("layouts/application", ["page"=>"application/Home/index", "header"=>"shared/header", "footer"=>"shared/footer", "products"=>$product->getAllProduct()]);
            
        }

        function catalog(){
            //load Modal
            $product = $this->modal("ProductModal");
            $layout = $this->view("layouts/application", ["page"=>"application/Home/catalog", "header"=>"shared/header", "footer"=>"shared/footer", "products"=>$product->getAllProduct()]);
            echo $layout;
        }

        function product($id){
            //load modal with ID
            $product = $this->modal("ProductModal");
            $layout = $this->view("layouts/application", ["page"=>"application/Home/product", "header"=>"shared/header", "footer"=>"shared/footer", "product"=>$product->getProductWithID($id)]);
            echo $layout;
        }

        function contact(){
            $layout = $this->view("layouts/application", ["page"=>"application/Home/contact", "header"=>"shared/header", "footer"=>"shared/footer"]);
            echo $layout;
        }

        function cart(){
            $layout = $this->view("layouts/application", ["page"=>"application/Home/cart", "header"=>"shared/header", "footer"=>"shared/footer"]);
            echo $layout;
        }

        function payment($price){
            $order = $this->modal("OrderModal");
            $layout = $this->view("layouts/application", ["page"=>"application/Home/payment", "header"=>"shared/header", "footer"=>"shared/footer", "price" =>$price, "orderModal"=>$order]);
            echo $layout;
        }

        function test($oid, $uid, $datetime, $price, $name, $email, $phone, $address){
            $order = $this->modal("OrderModal");
            $layout = $this->view("layouts/application", ["page"=>"application/Home/test", "header"=>"shared/header", "footer"=>"shared/footer","oid"=>$oid, "uid"=>$uid,"date"=>$datetime, "price"=>$price, "name"=>$name, "email"=>$email, "phone"=>$phone, "address"=>$address,"orderModal"=>$order]);
            echo $layout;
        }
    }
?>