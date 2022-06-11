<div class="card">
    <div class="card-body">
        <?php
        if (isset($_POST['submit'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $quantity = $_POST['quantity'];
            $price = $_POST['price'];
            $category_id = $_POST['category_id'];
            $intro = $_POST['intro'];
            $huongdansudung = $_POST['huongdansudung'];
            $avatar = "/products/$id.png";
            
                if ($quantity <= 0 || $price <=0){
                    echo "<script type='text/javascript'>alert('cap nhat product that bai');
                    window.location.href = 'http://localhost/web212/product/index';
                    </script>";
                }

            if (!isset($data["id"])) {
                if (($data["productModal"]->con)->query("INSERT INTO product (product_id,product_name,quantity,price,avatar,category_id, intro, huongdansudung) VALUES (N'$id', N'$name',N'$quantity',N'$price', N'$avatar', N'$category_id',N'$intro',N'$huongdansudung')")) {
                    echo "<script type='text/javascript'>alert('them product thanh cong');
                            window.location.href = 'http://localhost/web212/product/index';
                            </script>";
                } else {
                    echo "<script type='text/javascript'>alert('them product that bai');
                            window.location.href = 'http://localhost/web212/product/index';
                            </script>";
                }
            } else {
                if (($data["productModal"]->con)->query("UPDATE product SET product_name = N'$name', quantity =N'$quantity', price = N'$price', avatar = N'$avatar', category_id = N'$category_id', intro = N'$intro', huongdansudung = N'$huongdansudung'   WHERE product_id = N'$id'")) {
                    echo "<script type='text/javascript'>alert('cap nhat product thanh cong');
                            window.location.href = 'http://localhost/web212/product/index';
                            </script>";
                } else {
                    echo "<script type='text/javascript'>alert('cap nhat product that bai');
                            window.location.href = 'http://localhost/web212/product/index';
                            </script>";
                }
            }
        }
        ?>
        <?php
        if (isset($data["product"])) {
            while ($row = mysqli_fetch_assoc($data["product"])) {
        ?>
                <form method="POST" action="">
                    <div class="row form-group">
                        <label for="id" class="col-sm-2 col-form-label input-label">id</label>
                        <div class="col-sm-10">
                            <input type="number" name="id" class="form-control" placeholder="Please input id" value="<?php if (isset($data["id"])) echo $data["id"]; ?>" required="true">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="name" class="col-sm-2 col-form-label input-label">name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" placeholder="Please input name" value="<?php echo $row["product_name"] ?>" required="true">
                        </div>
                    </div>

                    <div class="row form-group">
                        <label for="name" class="col-sm-2 col-form-label input-label">quantity</label>
                        <div class="col-sm-10">
                            <input type="text" name="quantity" class="form-control" placeholder="Please input quantity" value="<?php echo $row["quantity"] ?>" required="true">
                        </div>
                    </div>

                    <div class="row form-group">
                        <label for="name" class="col-sm-2 col-form-label input-label">price</label>
                        <div class="col-sm-10">
                            <input type="text" name="price" class="form-control" placeholder="Please input price" value="<?php echo $row["price"] ?>" required="true">
                        </div>
                    </div>

                    <div class="row form-group">
                        <label for="name" class="col-sm-2 col-form-label input-label">category id</label>
                        <div class="col-sm-10">
                            <input type="text" name="category_id" class="form-control" placeholder="Please input category id" value="<?php echo $row["category_id"] ?>" required="true">
                        </div>
                    </div>

                    <div class="row form-group">
                        <label for="name" class="col-sm-2 col-form-label input-label">intro</label>
                        <div class="col-sm-10">
                            <input type="text" name="intro" class="form-control" placeholder="Please input intro" value="<?php echo $row["intro"] ?>" required="true">
                        </div>
                    </div>

                    <div class="row form-group">
                        <label for="name" class="col-sm-2 col-form-label input-label">Hướng dẫn sử dụng</label>
                        <div class="col-sm-10">
                            <input type="text" name="huongdansudung" class="form-control" placeholder="Please input huongdansudung" value="<?php echo $row["huongdansudung"] ?>" required="true">
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <input type="submit" value="Save changes" class="btn btn-primary" name="submit">
                    </div>
                </form>
        <?php
            }
        }
        else{
        ?>
                        <form method="POST" action="">
                    <div class="row form-group">
                        <label for="id" class="col-sm-2 col-form-label input-label">id</label>
                        <div class="col-sm-10">
                            <input type="number" name="id" class="form-control" placeholder="Please input id"  required="true">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="name" class="col-sm-2 col-form-label input-label">name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" placeholder="Please input name"  required="true">
                        </div>
                    </div>

                    <div class="row form-group">
                        <label for="name" class="col-sm-2 col-form-label input-label">quantity</label>
                        <div class="col-sm-10">
                            <input type="text" name="quantity" class="form-control" placeholder="Please input quantity"  required="true">
                        </div>
                    </div>

                    <div class="row form-group">
                        <label for="name" class="col-sm-2 col-form-label input-label">price</label>
                        <div class="col-sm-10">
                            <input type="text" name="price" class="form-control" placeholder="Please input price"  required="true">
                        </div>
                    </div>

                    <div class="row form-group">
                        <label for="name" class="col-sm-2 col-form-label input-label">category id</label>
                        <div class="col-sm-10">
                            <input type="text" name="category id" class="form-control" placeholder="Please input category id"  required="true">
                        </div>
                    </div>

                    <div class="row form-group">
                        <label for="name" class="col-sm-2 col-form-label input-label">intro</label>
                        <div class="col-sm-10">
                            <input type="text" name="intro" class="form-control" placeholder="Please input intro"  required="true">
                        </div>
                    </div>

                    <div class="row form-group">
                        <label for="name" class="col-sm-2 col-form-label input-label">Hướng dẫn sử dụng</label>
                        <div class="col-sm-10">
                            <input type="text" name="huongdansudung" class="form-control" placeholder="Please input huongdansudung" required="true">
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <input type="submit" value="Save changes" class="btn btn-primary" name="submit">
                    </div>
                </form>
        <?php 
        }
        ?>
    </div>
</div>