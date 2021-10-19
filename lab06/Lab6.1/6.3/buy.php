<html>
    <font size="5" color="blue">Select items we has sold</font>
    <form action="update.php" method="POST">
        Hammer: 
        <input type="radio" name="Product" value="Hammer">
        Ruler: 
        <input type="radio" name="Product" value="Ruler">
        Wrench: 
        <input type="radio" name="Product" value="Wrench"><br>
        <input type="submit" value="Submit"><br>
    </form>
    <?php
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
    
    
    $query = "SELECT * FROM $table_name";
    print "The query is <i>$query </i><br>";
    $connect->select_db($mydb);
    $results_id = $connect->query($query);
    if ($results_id->num_rows > 0) {
        print '<table border=1>';
        print '<th>Num<th>Product<th>Cost<th>Weight<th>Count';

        while ($row = $results_id->fetch_assoc()){
            print '<tr>';
            foreach ($row as $field) {
                print "<td>$field</td> ";
            }
            print '</tr>';
        }
    } else { 
        die ("Query=$query failed!"); 
    }
        mysqli_close($connect);
    ?> 
</table>
</html>

