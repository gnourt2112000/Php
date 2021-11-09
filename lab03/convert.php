<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="display: table;margin: auto;">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
        <label>Input Number want convert</label>
        <br>
        <input type="number" name="number">
        <br>
        <input type="radio" name="radian">
        <label>Radian</label>
        <br>
        <input type="radio" name="degree">
        <label>Degree</label>
        <br>
        <input type="submit"/>
        <br>
        <?php
            $number = $_POST['number'];
            if(isset($_POST['radian'])){
                $degree = $number*180/pi();
                print ("Degree is $degree");
            }
            if(isset($_POST['degree'])){
                $radian = $number*pi()/180;
                print ("Radian is $radian");
            }
            
        ?>

    </from>
</body>
</html>