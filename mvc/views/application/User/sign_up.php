<?php 

if (isset($_SESSION["email"]) && $_SESSION["role"] == "admin") {
    echo '<script type = "text/javascript">
            window.location.href = "http://localhost/web212/Category/index"</script>';
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

    if(($data["userModal"]->con)->query("INSERT INTO user (user_id,user_name, email, phone, password, role) VALUES (N'$id',N'$name', N'$email',N'$phone', N'$password', 1 )")){
        echo "<script type='text/javascript'>alert('tao tai khoan thanh cong');
        window.location.href = 'http://localhost/web212/Category/index';
        </script>";
    }
    else{
        echo "<script type='text/javascript'>alert('tao tai khoan that bai');
        window.location.href = 'http://localhost/web212/Category/index';
        </script>";
    }
}
?>

<!-- Page Content -->
<div class="container center">

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

</div>