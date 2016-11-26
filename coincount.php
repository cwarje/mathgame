<?php 
    $pennies = 0;
    $nickels = 0;
    $dimes = 0;
    $quarters = 0;
    $dollar = 0;
    $twodollar = 0;
?>
<?php extract($_POST); ?>

<?php include("include/header.php"); ?>

<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <title>Coin Results</title> 
    <meta charset="utf-8"> 
</head> 
<body> 
<div class="form-group">
    <div class="container-fluid">
        <div id="outputTable">
            <table class="table table-condensed table-striped table-hover">
            <?php 
               if (empty($name)){
                   $_SESSION['error'] = "Please enter a name.";
                   header("Location: index.php");
                   exit();
               }
               else if (!is_numeric($pennies) && !empty($pennies)) {

                   $_SESSION['error'] = "Please enter a number for pennies.";
                   header("Location: index.php");
                   exit();

               }
               else if(!is_numeric($nickels) && !empty($nickels)) {

                   $_SESSION['error'] = "Please enter a number for nickels.";
                   header("Location: index.php");
                   exit();
               }
               else if(!is_numeric($dimes) && !empty($dimes)) {

                   $_SESSION['error'] = "Please enter a number for dimes.";
                   header("Location: index.php");
                   exit();
               }
               else if(!is_numeric($quarters) && !empty($quarters)) {

                   $_SESSION['error'] = "Please enter a number for quarters.";
                   header("Location: index.php");
                   exit();

               }
               else if(!is_numeric($dollar) && !empty($dollar)) {

                   $_SESSION['error'] = "Please enter a number for loonies.";
                   header("Location: index.php");
                   exit();
               }
               else if(!is_numeric($twodollar) && !empty($twodollar)) {

                   $_SESSION['error'] = "Please enter a number for toonies.";
                   header("Location: index.php");
                   exit();
               }
            ?> 
            <?php 
                $totalCents = $pennies + $nickels*5 + $dimes*10 + $quarters*25 + $dollar*100 + $twodollar*200;
                $totalDollars = $totalCents / 100;
            ?>
            <tr>
                <td>
                    <div class="col-sm-3 col-xs-6">Name: </div>
                    <div class= "col-sm-3 col-xs-6"><?php echo $name; ?></div>
                    <div class="col-sm-3 col-xs-6">Pennies: </div>
                    <div class="col-sm-3 col-xs-6"><?php echo $pennies + 0; ?></div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-sm-3 col-xs-6">Nickels: </div>
                    <div class= "col-sm-3 col-xs-6"><?php echo $nickels + 0; ?></div>
                    <div class="col-sm-3 col-xs-6">Dimes: </div>
                    <div class="col-sm-3 col-xs-6"><?php echo $dimes + 0; ?></div>
                </td>
            </tr>
            <tr>
                 <td>
                    <div class="col-sm-3 col-xs-6">Quarters: </div>
                    <div class= "col-sm-3 col-xs-6"><?php echo $quarters + 0; ?></div>
                    <div class="col-sm-3 col-xs-6">Loonies: </div>
                    <div class="col-sm-3 col-xs-6"><?php echo $dollar + 0; ?></div>
                </td>
            </tr>
            <tr>
                 <td>
                    <div class="col-sm-3 col-xs-6">Toonies: </div>
                    <div class= "col-sm-3 col-xs-6"><?php echo $twodollar + 0; ?></div>
                    <div class="col-sm-3 col-xs-6"> </div>
                    <div class="col-sm-3 col-xs-6"><?php echo ' '; ?></div>
                </td>
            </tr>
            </table>
            <p class = "therefore"><?php echo $name ?>, you therefore have:</p>
            <table class="table table-condensed table-striped table-hover">
                <tr>
                    <td>
                        <div class="col-sm-3 col-xs-6">Total Cents: </div>
                        <div class= "col-sm-3 col-xs-6"><?php echo $totalCents + 0; ?></div>
                        <div class="col-sm-3 col-xs-6">Total Dollars: </div>
                        <div class="col-sm-3 col-xs-6"><?php echo $totalDollars + 0; ?></div>
                    </td>
                </tr>
                </table>
                <a href="/" title="Back to the Home page"><b class="btn btn-primary">Home</b></a>
            </div>
        </div>
    </div>
</body> 
</html>
<?php
include("include/footer.php"); 
session_unset();
session_destroy();
?>
