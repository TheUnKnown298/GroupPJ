<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>ShopCon Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body style="background-image: url('./images/bck.jpg');">
    <div class="header">
        <h2>Register</h2>
    </div>

    <form method="post" action="register.php">

        <?php include('errors.php'); ?>
        <?php
                                 $conn = mysqli_connect("localhost","root","","nhahang") or die ('Không thể kết nối tới database');
                                 $sql = "SELECT * FROM user";
                                 $result = mysqli_query($conn, $sql);
                                 if (!$result){
                                    die ('Câu truy vấn bị sai');
                                 }
                                 ?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $username; ?>">
            <span class="focus-input100"></span>
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>">
            <span class="focus-input100"></span>
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1" value="<?php echo $pass;?>">
            <span class="focus-input100"></span>
        </div>
        <div class="input-group">
            <label>Confirm password</label>
            <input class= "input100" type="password" name="password_2">
            <span class="focus-input100"></span>
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="reg_user">Register</button>
        </div>
        <p>
            Already a member? <a href="login.php">Sign in</a>
        </p>
    </form>
</body>

</html>