<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Math Game</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="style/mathgame.css" rel="stylesheet" media="screen">
    <script src="bootstrap/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <meta charset="utf-8" />
</head>
<body>
    <head class="content">
        <h2 id="theTitle">Log in to play the math game!</h2>
        <br />
    </head>
    <form action="index.php" method="post">
        <div class="form-group">
            <div class="container-fluid">
                
                <div class="col-sm-6" align="right">Email:</div>
                <div class="col-sm-6"><input class="form-control" name="email" placeholder="Email" size="30" type="text"></div>

                <div class="col-sm-6" align="right">Password:</div>
                <div class="col-sm-6"><input class="form-control" name="password" placeholder="Password" size="30" type="text"></div>
            
                <div class="col-sm-12" align="center"><input class="btn btn-primary" name="submit" type="submit" value="Login"></div>
            </div>
            <?php
                if(!empty($_SESSION['error'])){
                echo '<p align="center" class="error">' . $_SESSION['error'] . "</p>";
                }
            ?>
        </div>
    </form>
    <?php include("include/footer.php"); ?>
</body>
</html>