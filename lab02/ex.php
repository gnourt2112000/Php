<html>
    <head><meta charset="UTF-8">
    <title>Receving Input</title>
    </head>
    <body>
    <?php
        $name = $_POST['name'];
        $class = $_POST['class'];
        $school = $_POST['school'];
        $birthday = $_POST['birthdaytime'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        print("<br>Tên: $name");
        print("<br>Lớp: $class");
        print("<br>Trường: $school");
        print("<br>Ngày sinh: $birthday");
        print("<br>Email: $email");
        print("<br>Số điện thoại: $phone");
        //print("<br>Habit: $habit");
        if (isset($_POST['habit'])) {
            foreach($_POST['habit'] as $value) {
                print("<br>Sở thích: $value");
            }
        }
    ?>
    </body>
</html>