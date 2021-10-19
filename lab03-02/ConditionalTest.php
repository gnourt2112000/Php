<html>

<head>
    <title>Conditional Test</title>
</head>

<body>
    <?php
    function getResult($final){
        if ($final > 89) {
            print("Your final grade is $final. You got an A. Congratulation!");
            $rate = "A";
        } elseif ($final > 79) {
            print("Your final grade is $final. You got a B");
            $rate = "B";
        } elseif ($final > 69) {
            print("Your final grade is $final. You got a C");
            $rate = "C";
        } elseif ($final > 59) {
            print("Your final grade is $final. You got a D");
            $rate = "D";
        } elseif ($final >= 0) {
            print("Your final grade is $final. You got a F");
            $rate = "F";
        } else {
            print("Illegal grade less than 0. Final grade = $final");
            $rate = "Illegal";
        }
        return $rate;
    }
    $first = $_GET["firstName"];
    $middle = $_GET["middleName"];
    $last = $_GET["lastName"];
    print("Hi $first! Your full name is $last $middle $first. <br>");
    if ($first == $last) {
        print("$first and $last are equal");
    }
    if ($first < $last) {
        print("$first is less than $last");
    }
    if ($first > $last) {
        print("$first is greater than $last");
    }
    print("<br>");

    $grade1 = $_GET["grade1"];
    $grade2 = $_GET["grade2"];
    $final = (2 * $grade1 + 3 * $grade2) / 5;

    $rate = getResult($final);
    
    print("<br>");
    switch ($rate) {
        case 'A':
            # code...
            print("Excelent!");
            break;
        case 'B':
            print("Good!");
            # code...
            break;
        case 'C':
            # code...
            print("Not Bad!");
            break;
        case 'D':
            # code...
            print("Normal!");
            break;
        case 'F':
            # code...
            print("You have to try again!");
            break;
        default:
            # code...
            print("Illegal grade");
            break;
    }
    ?>
</body>

</html>