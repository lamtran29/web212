<?php 
    class User extends Controller{

        function sign_up(){
            $userModal = $this->modal("UserModal");
            $layout = $this->view("layouts/log", ["log_page"=>"application/User/sign_up","userModal" => $userModal]);
        }

        function sign_in(){
            $userModal = $this->modal("UserModal");
            $layout = $this->view("layouts/log", ["log_page"=>"application/User/sign_in", "userModal" => $userModal]);

        }

        function log_out(){
            $userModal = $this->modal("UserModal");
            $layout = $this->view("layouts/log", ["log_page"=>"application/User/log_out", "userModal" => $userModal]);
        }

        function profile(){

        }

        //function comment() ?
    }

?>
