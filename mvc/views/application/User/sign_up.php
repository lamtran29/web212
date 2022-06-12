<?php 

if (isset($_SESSION["email"]) && $_SESSION["role"] == "admin") {
    echo '<script type = "text/javascript">
            window.location.href = "http://localhost/web212/category/index"</script>';
}

if (isset($_SESSION["email"]) && $_SESSION["role"] == "customer") {
    echo '<script type = "text/javascript">
    window.location.href = "http://localhost/web212/"</script>';
}

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $name =  $_POST['name'];
    $phone =  $_POST['phone'];

    $key = "";
    for ($i = 0; $i < strlen($email); $i++){
        if($email[$i] ==  "@"){
            break;
        }
        else{
            $key .= (string)(ord($email[$i])-48);
        }
    }

    $id = (integer)$key % 100000000;
    $user = "INSERT INTO user (user_id,user_name, email, phone, password, role) VALUES (N'$id',N'$name', N'$email',N'$phone', N'$password', 1 )";

    if(($data["userModal"]->con)->query($user)){
        echo "<script type='text/javascript'>alert('Tạo tài khoản thành công');
        window.location.href = 'http://localhost/web212/user/sign_in';
        </script>";
    }
    else{
        echo "<script type='text/javascript'>alert('tao tai khoan that bai');
        window.location.href = 'http://localhost/web212/user/sign_in';
        </script>";
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
<div class="signup-form">
        <form name="signup" class="form-style" method="POST" action="">
            <div class="form-logo">
                <a href="http://localhost/web212/user/sign_in">
                    <img src="../../../web212/public/assets/img/header-freshgro.png" alt="logo">
                </a>
            </div>
            
            <label for="name"><b>Họ và tên</b></label> <br>
            <input type="text" name="name" placeholder="Nhập họ và tên" id="name" class="form-control" required > <br>

            <label for="email"><b>Email</b></label> <br>
            <input type="email" name="email" placeholder="Nhập Email" id="email" class="form-control" required><br>
            
            <label for="phone"><b>Số điện thoại</b></label> <br>
            <input type="text" name="phone" placeholder="Nhập số điện thoại" id="phone" class="form-control" required> <br>

            <label for="psw"><b>Mật khẩu</b></label> <br>
            <input type="password" name="password" placeholder="Nhập mật khẩu" id="password" class="form-control" required> <br>
            
            <!-- <button class="btn login-btn" style="margin-bottom: 28px;"  onclick="signUp(); return false;">Đăng ký tài khoản</button> -->
            <input type="submit" name="submit" value="Đăng ký tài khoản" class="btn login-btn btn-bg" style="margin-bottom: 28px;">
        </form>
    </div> 


<!-- <div class="container center">

    <div class="row">

        <div class="col-md-12" id="register">

            <div class="card col-md-8" style="margin: 30px auto;">
                <div class="card-body">
                    <h2 class="card-title">Sign Up</h2>
                    <hr>
                    <form action="" method="POST">

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" name="email" placeholder="Email" id="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" name="password" placeholder="Password" id="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" placeholder="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="text" name="phone" placeholder="phone" id="phone" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" name="submit" value="Sign Up">
                        </div>

                    </form>

                </div>
            </div>

        </div>

    </div>

</div> -->

