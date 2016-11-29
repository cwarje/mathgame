<?php
    session_start();
    if (!isset($_SESSION['validated'])){
        if (isset($_POST["email"]) && isset($_POST["password"])) {
            if ($_POST["email"] != "a@a.a" || $_POST["password"] != "aaa") {
                $_SESSION['error'] = "Invalid login credentials.";

                header("Location: login.php");
                die();
            } else {
                $_SESSION['validated'] = true;
                $_SESSION['totalAttempts'] = 0;
                $_SESSION['correct'] = 0;
            }
        } else {
            header("Location: login.php");
            die();
        }
    }
    $int1 = rand(0,20);
    $int2 = rand(0,20);
    $operator = rand(1,2);

    if (isset($_POST['userAnswer'])){
        if ($_POST['userAnswer'] == $_SESSION['answer']){
            $_SESSION['totalAttempts']++;
            $_SESSION['correct']++;
            $message = "<span style='color:#0F0';>Correct!</span>";
        } else if (!is_numeric($_POST['userAnswer'])){
            $message = "You must enter a number for your answer.";
        } else {
            $_SESSION['totalAttempts']++;
            $message = "<span style='color:#F00';>Wrong, " . $_SESSION['correctionInt1'] . $_SESSION['correctionOperator'] . $_SESSION['correctionInt2'] . " = " . $_SESSION['answer'] . "</span>";
        }
    } else {
        $message = "You must enter a number.";
    }
    switch ($operator) {
        case 1:
            $operator = "+";
            $_SESSION['answer'] = $int1 + $int2;
            $_SESSION['correctionInt1'] = $int1;
            $_SESSION['correctionInt2'] = $int2;
            $_SESSION['correctionOperator'] = "+";
            break;
        case 2:
            $operator = "-";
            $_SESSION['answer'] = $int1 - $int2;
            $_SESSION['correctionInt1'] = $int1;
            $_SESSION['correctionInt2'] = $int2;
            $_SESSION['correctionOperator'] = "-";
            break;
    }
?>
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
    <header class="content">
        <h2 id="theTitle">Math Game</h2>
        <br />
    </header>
    <div class="col-sm-12" align="center"><a class="btn btn-warning" href="logout.php">Logout</a></div>
    <form action="index.php" method="post">
        <div class="form-group">
            <div class="container-fluid">
                <div class="col-sm-6" align="left"><?php echo "$int1 $operator $int2" ?></div>
                <div class="col-sm-6"><input type="text" class="form-control" name="userAnswer" placeholder="Enter answer" size="30" ></div>
                <input class="form-control" name="answer" type="hidden">
                <div class="col-sm-12" align="center"><input class="btn btn-primary" name="submit" type="submit" value="Submit"></div>
            </div>
        </div>
    </form>
    <hr>
    <div class="col-sm-12" align="center">
    <?php 
    if (isset($_POST['userAnswer'])){
        echo $message . "<br />";
        echo "Score:" . $_SESSION['correct'] . " / " . $_SESSION['totalAttempts'];
    } else {
        echo "Score: 0 / 0";
    }
    ?>
    </div>
</body> 
</html>
<?php
include("include/footer.php"); 
?>
