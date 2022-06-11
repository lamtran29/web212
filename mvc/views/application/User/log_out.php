<?php 
    session_start();
    if(session_destroy()){
        header("Location: http://localhost/web212/User/sign_in");
    }
?>