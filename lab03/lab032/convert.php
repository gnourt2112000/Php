<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Convert</title>
</head>
<body>
    <h2>Converter</h2>
    <form action="answer.php" METHOD="POST">
         Đơn vị
        <input type="radio" name="pick" value="radian" checked="true">Radian
        <input type="radio" name="pick" value="degree">Degree
        <br>
        <input type="text" name="input">
        <br>
        <input type="radio" name="pick1" value="radian" checked="true">To Radian
        <input type="radio" name="pick1" value="degree">To Degree
        <br>
        <input type="submit" value="Submit">
        <input type="reset" value="Restart">
    </form>
</body>
</html>