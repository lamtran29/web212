<?php

    class home extends Controller{
        function index(){
            $product = $this->modal("ProductModal");
            $layout = $this->view("layouts/application", ["page"=>"application/home/index", "header"=>"shared/header", "footer"=>"shared/footer", "products"=>$product->getAllProduct()]);
            
        }

        function catalog(){
            //load Modal
            $product = $this->modal("ProductModal");
            $layout = $this->view("layouts/application", ["page"=>"application/home/catalog", "header"=>"shared/header", "footer"=>"shared/footer", "products"=>$product->getAllProduct()]);
            echo $layout;
        }

        function product($id){
            //load modal with ID
            $product = $this->modal("ProductModal");
            $layout = $this->view("layouts/application", ["page"=>"application/home/product", "header"=>"shared/header", "footer"=>"shared/footer", "product"=>$product->getProductWithID($id)]);
            echo $layout;
        }

        function contact(){
            $layout = $this->view("layouts/application", ["page"=>"application/home/contact", "header"=>"shared/header", "footer"=>"shared/footer"]);
            echo $layout;
        }

        function cart(){
            $layout = $this->view("layouts/application", ["page"=>"application/home/cart", "header"=>"shared/header", "footer"=>"shared/footer"]);
            echo $layout;
        }

        function payment($price){
            $order = $this->modal("OrderModal");
            $layout = $this->view("layouts/application", ["page"=>"application/home/payment", "header"=>"shared/header", "footer"=>"shared/footer", "price" =>$price, "orderModal"=>$order]);
            echo $layout;
        }

        function success($oid, $uid, $datetime, $price, $name, $email, $phone, $address){
            $order = $this->modal("OrderModal");
            $layout = $this->view("layouts/application", ["page"=>"application/home/success", "header"=>"shared/header", "footer"=>"shared/footer","oid"=>$oid, "uid"=>$uid,"date"=>$datetime, "price"=>$price, "name"=>$name, "email"=>$email, "phone"=>$phone, "address"=>$address,"orderModal"=>$order]);
            echo $layout;
        }
    }
?>