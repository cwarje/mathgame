<?php include("include/header.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Coin Counter</title>
</head>
<body>
    <?php
    if(!empty($_SESSION['error'])){
        echo '<p class="error">' . $_SESSION['error'] . "</p>";
        unset ($_SESSION['error']);
    }
    ?>
    <h3>Please enter your coin count:</h3>
    <form action="coincount.php" method="post">
        <div class="form-group">
            <div class="container-fluid">
                <table class="table table-condensed table-striped table-hover">
                <tr>
                    <td>
                        <div class="col-sm-6">Your Name:</div>
                        <div class="col-sm-6"><input class="form-control" name="name" placeholder="First Name" size="30" type="text"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-sm-6">Pennies (1 &cent;):</div>
                        <div class="col-sm-6"><input class="form-control" name="pennies" placeholder="Enter pennies" size="30" type="text"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-sm-6">Nickels (5 &cent;):</div>
                        <div class="col-sm-6"><input class="form-control" name="nickels" placeholder="Enter nickles" size="30" type="text"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-sm-6">Dimes (10 &cent;):</div>
                        <div class="col-sm-6"><input class="form-control" name="dimes" placeholder="Enter dimes" size="30" type="text"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-sm-6">Quarters (25 &cent;):</div>
                        <div class="col-sm-6"><input class="form-control" name="quarters" placeholder="Enter quarters" size="30" type="text"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-sm-6">1 Dollar Coins:</div>
                        <div class="col-sm-6"><input class="form-control" name="dollar" placeholder="Enter loonies" size="30" type="text"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-sm-6">2 Dollar Coins:</div>
                        <div class="col-sm-6"><input class="form-control" name="twodollar" placeholder="Enter toonies" size="30" type="text"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-sm-6"><input class="btn btn-primary" name="submit" type="submit" value="Calculate Coins"></div>
                        <div class="col-sm-6"><input class="btn btn-danger" name="reset" type="reset" value="Clear form"></div>
                    </td>
                </tr>
                </table>
            </div>
        </div>
    </form>
    <?php include("include/footer.php"); ?>
</body>
</html>