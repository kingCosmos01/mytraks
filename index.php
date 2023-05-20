<?php 
    session_start();

    if(isset($_SESSION['user']))
    {
        header("Location: http://localhost/mytraks/public/");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyTraks</title>
    <link rel="stylesheet" href="public/css/home.css">
</head>
<body>

    <div class="navbar">
        <div class="wrapper">
            <div class="left">
                <h2>
                    <a href="http://localhost/mytraks/">
                        MyTraks
                        <img src="public/images/6.png" alt="">
                    </a>
                </h2>
            </div>
            <div class="cta">
                <ul class="cta-items">
                    <li><a href="#about">About</a></li>
                    <?php if(!isset($_SESSION['user'])) : ?>
                        <li><a href="http://localhost/mytraks/app.php?id=register">Create Account</a></li>
                        <li><a href="http://localhost/mytraks/app.php?id=login">Login</a></li>
                    <?php endif; ?>
                    <li><a href="http://localhost/mytraks/app.php?id=shop">Shop</a></li>
                </ul>

            </div>
            <div class="navTrigger" id="navTrigger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <div class="contents">
        <div class="carousel">
            <img src="public/images/9.jpg" alt="">
        </div>
        <div class="about" id="about">
            <div class="header">
                <h2>About MyTraks</h2>
                <div class="arrow">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <hr class="rule">
            <div class="container_">
                <div class="card">
                    <h3>Diabetic Nutrition</h3>
                    <p>
                        We provied Nutrional Health Care support and Tracking System for people living with Diabetes, including nutritional recipes for treating and maintaining Diabetes.
                    </p>
                    <a href="http://localhost/mytraks/public/"><button>Read More</button></a>
                    <span class="number">1</span>
                </div>
                <div class="card">
                    <h3>Hepatitis Nutrion</h3>
                    <p>
                    We provied Nutrional Health Care support and Tracking System for people living with Hepatitis, including nutritional recipes for treating and maintaining Hepatitis.
                    </p>
                    <a href="http://localhost/mytraks/public/"><button>Read More</button></a>
                    <span class="number">2</span>
                </div>
                <div class="card">
                    <h3>Nutrition for Preganncy</h3>
                    <p>
                    We provied Nutrional Health Care support and Tracking System for people with Pregnancy, including nutritional recipes for maintaining a Healthy Pregnancy.
                    </p>
                    <a href="http://localhost/mytraks/public/"><button>Read More</button></a>
                    <span class="number">3</span>
                </div>

            </div>
        </div>
    </div>


    <?php include_once 'public/inc/footer.php'; ?>


    <script src="public/js/main.js"></script>
</body>
</html>