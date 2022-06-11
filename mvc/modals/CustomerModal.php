<?php 
    class CustomerModal extends Database{
        public function getAllCustomer(){
            $qr = "SELECT * FROM customer";
            return mysqli_query($this->con, $qr);
        }


    }

?>