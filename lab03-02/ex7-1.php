<html>

<head>
    <title>Function Test</title>
</head>

<body>
    <?php
    function convert_degree($degree, $type)
    {
        if ($type == "DEGREE") {
            return deg2rad($degree);
        } else if ($type == "RADIAN") {
            return rad2deg($degree);
        }else{
            return null;
        }
    }
    ?>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="GET">
        <h2>Convert degree to radian and vice versa</h2>
        Enter a degree: <input type="text" name="degree"><br>
        Select a type: 
        <input type="radio" name="type_change" value="DEGREE"> DEGREE 
        <input type="radio" name="type_change" value="RADIAN"> RADIAN
        <br>

        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
    <?php
        if(array_key_exists("degree",$_GET) && array_key_exists("type_change",$_GET)){
            $degree = $_GET["degree"];
            $type_change = $_GET["type_change"];
            $change_value = convert_degree($degree,$type_change);
            print("Change value: $change_value");
        }
    ?>
</body>

</html>