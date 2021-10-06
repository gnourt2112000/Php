<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $pick = $_POST['pick'];
        $pick1 = $_POST['pick1'];
        $input = $_POST['input'];
        $output = 0;
        if(is_numeric($input)){
            if($pick == "radian"){
                if($pick1 == "radian"){
                    $output = $input;
                }else{
                    $output = $input*(180/3.14);
                }
            }else{
                if($pick1 == "degree"){
                    $output = $input;
                }else{
                    $output = $input*(3.14/180);
                }
            }
            echo "Kết quả: $output";
        }else{
            echo "Không đúng định dạng";
        }
    ?>
</body>
</html>