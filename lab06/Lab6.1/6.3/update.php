<?php

function Show_all($connect, $table_name){
    $query = "SELECT * from $table_name";
    $results_id = mysqli_query($connect, $query);
    print '<table border=1><th> Num </th>
    <th>Product</th><th>Cost</th>
    <th>Weight</th><th>Count</th>';
    while ($row = mysqli_fetch_row($results_id)) {
        print '<tr>';
        foreach ($row as $field){
            print "<td>$field</td> ";
        }
        print '</tr>';
    }
}
    
    $Product = $_POST["Product"];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $mydb = "mydatabase";
    $table_name = "products";
    // Create connection
    $connect = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$connect) {
        die("Connection failed: <br>" . mysqli_connect_error());
    }
    
    $connect->select_db($mydb);
    print '<font size="5" color="blue">';
    print "Update Results for Table $table_name</font><br>\n";

    $query = "UPDATE $table_name SET Numb = Numb-1 WHERE (Product_desc = '$Product')";
    print "The query is <i> $query </i> <br><br>\n";
    $results_id = $connect->query($query);
    if ($results_id){
        Show_all($connect, $table_name);
    } else {
        print "Update=$query failed";
    }
    mysqli_close($connect);
?>