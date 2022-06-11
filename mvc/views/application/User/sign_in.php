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
        if (isset($_SESSION["email"])) {        
            if ($row['role'] == "admin")
            {
                echo '<script type = "text/javascript">
                window.location.href = "http://localhost/web212/Category/index"</script>';
            }
            elseif (isset($_SESSION["payment"])){
                unset($_SESSION["payment"]);
                echo '<script type = "text/javascript">
                window.location.href = "http://localhost/web212/Home/payment/"</script>';
            }
            else {
                echo '<script type = "text/javascript">
                window.location.href = "http://localhost/web212/"</script>';
            }
        }
    } else {
        echo '<script type = "text/javascript">
            alert("Invalid email or Password"); 
            window.location.href = "http://localhost/web212/User/sign_in"</script>';
    }
}
?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-md-12" id="register">

            <div class="card col-md-8" style="margin: 30px auto;">
                <div class="card-body">

                    <h2 class="card-title">Login</h2>
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
                            <input type="submit" name="submit" value="Login">
                        </div>

                    </form>

                    Chưa có tài khoản? <a href="http://localhost/web212/User/sign_up">Đăng ký</a>
                </div>
            </div>


        </div>

    </div>

</div>