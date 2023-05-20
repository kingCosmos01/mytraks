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
    <title>Diabetic Health Recommendations</title>
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="../css/modals.css">
</head>
<body>
<div class="container">
        <div class="wrapper">
            <div class="nav">
                <a href="http://localhost/mytraks/public/">
                    <h4>Mytraks</h4>
                    <img src="../images/6.png" alt="">
                </a>
                <div class="user" id="user">
                    <a onclick="activateUserModlaBox()" style="cursor:pointer">Hi, <?php echo $_SESSION['user']; ?></a>
                </div>
                <div class="modalBox" id="modalBox">            
                    <ul class="center">
                        <li><a href="">Settings</a></li>
                        <li><a href="./?logout=1">Logout</a></li>
                        <li><a href="">Cart</a></li>
                    </ul>
                </div>
            </div>
            <div class="head">
                <h2>Nutrition for People Living with Diabetes:</h2>
            </div>
            <img src="../images/9.jpg" alt="">
            <div class="recommendations" id="recommendations"> </div>
            <div class="avoidable" id="avoidable"></div>
        </div>
    </div>

    <script src="../js/diabetisAPI.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>