<?php 
    if(isset($data["cid"])){
        $id = $data["cid"];
        $sql = "DELETE FROM customer WHERE customer_id = $id";
        if(($data["CustomerModal"]->con)->query($sql)){
            echo "<script type='text/javascript'>alert('xoa customer thanh cong');
            window.location.href = 'http://localhost/web212/customer/index';
            </script>";
        }
        else{
            echo "<script type='text/javascript'>alert('xoa customer that bai');
            window.location.href = 'http://localhost/web212/customer/index';
            </script>";
        }
    }
?>