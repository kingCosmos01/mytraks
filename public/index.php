<?php require_once '../app.php'; ?>
<?php require_once 'bootstrap.php'; ?>
<?php

    session_start();

    if(!isset($_SESSION['user']))
    {
        header('Location: http://localhost/mytraks/public/views/login.php');
    }
    if(isset($_GET['logout']))
    {
        unset($_SESSION['user']);
        session_destroy();
        unset($_GET['logout']);

        header('Location: http://localhost/mytraks/public/views/login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/main.css">
    <link rel="stylesheet" href="../public/css/modals.css">
    <title>MyTraks - Food Nutrition Tracking System </title>
</head>
<body>
    <?php if ( isset($_GET['param']) && isset($_GET['m']) ) : ?>
        <?php 
            $param = $_GET['param'];
            $message = $_GET['m'];
            if($param == 'success') { ?>
            <div class="alert success" id="alert">
                <?php echo $message; ?>
            </div>
        <?php } ?>
    <?php endif; ?>
    <div class="overlay" id="overlay"></div>
    <div class="navContainer" id="navContainer">
        <div class="wrapper">
            <div class="head">
                <h2>HEALTH CONDITIONS</h2>
                <div class="closeBtn" id="closeBtn">&times;</div>
            </div>
           
            <div class="content">
                <ul>
                    <li><a href="http://localhost/mytraks/app.php?id=diabetics">FOR DIABETICS</a></li>
                    <li><a href="http://localhost/mytraks/app.php?id=hepatitis">FOR HEPATITIS</a></li>
                    <li><a href="http://localhost/mytraks/app.php?id=pregnant">FOR PREGNANT WOMEN</a></li>
                </ul>
            </div>
            <img src="../public/images/4.png" alt="">
        </div>
    </div>

    <div class="container">
        <div class="wrapper">
            <div class="head">
                <h2>MyTraks</h2> <img src="../public/images/6.png" alt="">
            </div>
            <div class="user" id="user">
                <a onclick="activateUserModlaBox()" style="cursor:pointer">Hi, <?php echo $_SESSION['user']; ?></a>
            </div>
            <div class="modalBox" id="modalBox">            
                <ul class="center">
                    <li><a href="">Settings</a></li>
                    <li><a href="?logout=1">Logout</a></li>
                    <li><a href="">Cart</a></li>
                </ul>
            </div>
            <div class="navTrigger" id="navTrigger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="head">
            <h2>HEALTH RECOMMENDATIONS</h2>
        </div>
        <div class="container">
            <div class="card">
                <a href="http://localhost/mytraks/app.php?id=diabetics">FOR DIABETICS</a>
                <img src="../public/images/8.jpg" alt="">
                <div class="overlay"></div>
            </div>
            <div class="card">
                <a href="http://localhost/mytraks/app.php?id=hepatitis">FOR HEPATITIS</a>
                <img src="../public/images/3.jpg" alt="">
                <div class="overlay"></div>
            </div>
            <div class="card">
                <a href="http://localhost/mytraks/app.php?id=pregnant">FOR PREGNANT WOMEN</a>
                <img src="../public/images/5.jpg" alt="">
                <div class="overlay"></div>
            </div>
        </div>
        <?php include '../public/inc/footer.php'; ?>
    </div>
    
    

    <script src="../public/js/main.js"></script>
</body>
</html>