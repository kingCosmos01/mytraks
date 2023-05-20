<?php 
    session_start();

    if(isset($_SESSION['user']))
    {
        header("Location: http://localhost/mytraks/public/");
    }

    if(isset($_POST['login_account'])) {

        $fullname = htmlentities($_POST['username']);
        $password = htmlentities($_POST['password']);

        require '../../app/Database.php';
        require '../../app/Login.php';

        $RegisterManager = new Login($fullname, $password);
        $RegisterManager->LoginUser();

        $RegisterManager->redirect('http://localhost/mytraks/public/', ['success', 'Login Successful!']);
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyTraks - Login to Account</title>
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
    
    <div class="register-container">
        <div class="head">
            <img src="../images/4.png" alt="">
        </div>
        <h2>Login Account</h2>
        <hr>

        <?php if ( isset($_GET['param']) && isset($_GET['m']) ) : ?>
            <?php 
                $param = $_GET['param'];
                $message = $_GET['m'];
                if($param == 'err') { ?>
                <div class="alert" id="alert">
                    <?php echo $message; ?>
                </div>
            <?php } ?>
        <?php endif; ?>

        <form action="" method="post">
            <div class="input-group">
                <label>Username</label><br>
                <input type="text" name="username" autocomplete="off" placeholder="Enter Username" required>
            </div>

            <div class="input-group">
                <label>Password</label><br>
                <input type="password" name="password" autocomplete="off" placeholder="Enter Password" required>
            </div>

            <div class="cta">
                <button type="submit" class="reg-button" name="login_account">Login</button>
                <p><a href="./register.php">Register Here </a>If you Don't Have an Account</p>
            </div>
        </form>
    </div>

    <?php include_once '../inc/footer.php'; ?>
</body>
</html>