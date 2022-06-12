<?php
if (isset($_SESSION["email"]) && $_SESSION["role"] == "admin") {
    echo '<script type = "text/javascript">
            window.location.href = "http://localhost/web212/category/index"</script>';
}

if (isset($_SESSION["email"]) && $_SESSION["role"] == "customer") {
         echo '<script type = "text/javascript">
        window.location.href = "http://localhost/web212/"</script>';
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $select = mysqli_query($data["userModal"]->con, "SELECT * FROM user WHERE email = '$email' AND password = '$password'");
    $row = mysqli_fetch_array($select);
    if (is_array($row)) {
        $_SESSION["email"] = $row['email'];
        $_SESSION["password"] = $row['password'];
        $_SESSION["role"] = $row['role'];
        $_SESSION["id"] = $row['user_id'];
        $_SESSION["name"] = $row['user_name'];

        if (isset($_SESSION["email"])) {        
            if ($row['role'] == "admin")
            {
                echo '<script type = "text/javascript">
                window.location.href = "http://localhost/web212/category/index"</script>';
            }
            // elseif (isset($_SESSION["payment"])){
            //     unset($_SESSION["payment"]);
            //     echo '<script type = "text/javascript">
            //     window.location.href = "http://localhost/web212/Home/payment/"</script>';
            // }
            else {
                echo '<script type = "text/javascript">
                window.location.href = "http://localhost/web212/"</script>';
            }
        }
    } else {
        echo '<script type = "text/javascript">
            alert("Email hoặc mặt khẩu không đúng"); 
            window.location.href = "http://localhost/web212/User/sign_in"</script>';
    }
}
?>
<style>

    /* Login Form */
.modal-backdrop {
    display:none;
}
.signup-form {
    margin-bottom: 40px;
}

.signup-form, 
.login-form {
margin: 40px auto;
width: 500px;
box-shadow: 0px 4px 24px rgb(139 167 178 / 16%);
padding: 36px;
}

.signup-form label,
.login-form label {
color: black;
float: left;
}
.form-logo {
/* padding: 0 200px; */
height: 50px;
width: 270px;
margin: 84px auto;
}

.form-logo img {
width: 100%;
}

.form-style {
margin: -96px auto 24px;
}



.form-style .login-btn {
    background-color: #56B280;
    color: white;
width: 100%;
}


.form-style input {
width: 100%;
height: 45px;
margin-bottom: 8px;
}

.form-style button {
margin-top: 12px;
}


.forgot {
margin-top: 12px;
text-align: right;
}

.forgotPass {
background:none;
border: none;
text-decoration: underline;
color: #56B280;
}



.google-btn {
    background-color: white;
    width: 100%;
    color: black;
    box-shadow: 0px 0px 2px rgb(0 0 0 / 25%);
    height: 45px;
    padding: 4px 32px;
}

.google-btn img {
    padding-bottom: 1px;
    width: 9%;
}

.google-btn span {
    line-height: 37px;
}

.google-btn .img-container {
    width: 50px;
    margin: 0;
}

.forgotPass {
    margin-top: 12px;
}

.forgotPass:hover {
    color: #56B280;
}

</style>
<!-- Page Content -->
<div class="login-form">
        <form method="post" name="login" class="form-style">
            <div class="form-logo">
                <a href="http://localhost/web212/home/index">
                    <img src="../../../web212/public/assets/img/header-freshgro.png" alt="logo">
                </a>
                
            </div>
            <label for="email"><b>Email</b></label> <br>
            <input type="text" name="email" placeholder="Nhập Email" id="email" class="form-control"> <br>

            <label for="password"><b>Mật khẩu</b></label> <br>
            <input type="password" name="password" placeholder="Nhập mật khẩu" id="password" class="form-control"> <br>

            <input type="submit" name="submit" value="Đăng nhập" class="btn login-btn btn-bg">

            <div class="forgot">
                <a href="http://localhost/web212/user/sign_up" class="forgotPass" style="float: left;">
                    Đăng ký
                </a>

                <button class="forgotPass" onclick="alert('Mật khẩu mới đã được gửi vào email của bạn!');">
                    Quên mật khẩu
                </button>
            </div>
        </form>
    </div>  
