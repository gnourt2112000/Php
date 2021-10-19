<html>

<head>
    <title>Guess a number</title>
</head>

<body>
    <?php
    if (array_key_exists("number", $_GET) && array_key_exists("randomnumber",$_GET)) {
        $number = $_GET["number"];
        $randomnumber = $_GET["randomnumber"];
        // print("$randomnumber<br>");
    } else {
        $randomnumber = mt_rand(1, 10);
        // print("$randomnumber<br>");
    }
    ?>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="GET">
        Guess a Number Between 1 and 10:
        <input type="text" name="number" value="<?php if (array_key_exists("number", $_GET)) {
        $number = $_GET["number"];
    echo $_GET["number"];} ?>" /> <br>
        <input type="text" name="randomnumber" value="<?php echo $randomnumber ?>" style="display: none;">
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
    <?php
    if (array_key_exists("number", $_GET)) {
        print("Result: <br>");
        $number = $_GET["number"];
        if ($number == $randomnumber) {
            print("You get the correct number <br>");
        } else if ($number > $randomnumber) {
            print("Your number is bigger than random number <br>");
        } else {
            print("Your number is less than random number <br>");
        }
    }
    ?>
</body>

</html>