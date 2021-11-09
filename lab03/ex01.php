<html>
<head><meta charset="UTF-8"></head>
<body style="display: table;margin: auto;">
    <label>Enter your name and select date and time for the appointment</label>
    <br>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td colspan="3"><input type="text" name="name"/></td>
            </tr>
            <tr>
                <td>Date</td>
                <td><select name="date">
                    <?php
                        for($i=1;$i<=31;$i++)
                            print ("<option>$i</option>");
                    ?>
                </select></td>
                <td><select name="month">
                <?php
                        for($i=1;$i<=12;$i++)
                            print ("<option>$i</option>");
                    ?>
                </select></td>
                <td><select name="year">
                <?php
                        for($i=2000;$i<2021;$i++)
                            print ("<option>$i</option>");
                    ?>
                </select></td>
            </tr>
            <tr>
                <td>Time</td>
                <td><select name="hour">
                <?php
                        for($i=0;$i<24;$i++)
                            print ("<option>$i</option>");
                    ?>
                </select></td>
                <td><select name="minute">
                <?php
                        for($i=0;$i<24;$i++)
                            print ("<option>$i</option>");
                    ?>
                </select></td>
                <td><select name="seconds">
                <?php
                        for($i=0;$i<24;$i++)
                            print ("<option>$i</option>");
                    ?>
                </select></td>
            </tr>
        </table>
        <input type="submit"/>
        <input type="reset"/>
        <?php
            $name = $_POST["name"];
            $date = $_POST["date"];
            $month = $_POST["month"];
            $year = $_POST["year"];
            $hour = $_POST["hour"];
            $minute = $_POST["minute"];
            $seconds = $_POST["seconds"];
            $temp = "AM";
            print ("<br>Hi $name");
            print ("<br>You have choose to have an appointment on $hour:$minute:$seconds,$date/$month/$year");
            print ("<br>More information");
            if($hour >= 12 ){
                $hour -= 12; 
                $temp = "PM";
            }  
            print ("<br>In 12 hours the time and date is $hour $temp,$date/$month/$year ");

            $nhuan = 0;
            if(($year%4 == 0 && $year % 100 != 0) || ($year % 100 == 0 && $year%400 == 0)){
                $nhuan = 1;
            }
            switch($month) {
                case 1:
                case 3:
                case 5:
                case 7:
                case 8:
                case 10:
                case 12:
                    print ("<br>This month has 31 days");
                    break;
                case 4:
                case 6:
                case 9:
                case 11:
                    print ("<br>This month has 30 days");
                    break;
                case 2:
                    if($nhuan == 0){
                        print ("<br>This month has 28 days");
                    }
                    else{
                        print ("<br>This month has 29 days");
                    }
                    break;
                default:break;
            }
        ?>

    </form>
</body>
</html>