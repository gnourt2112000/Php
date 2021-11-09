<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
<style>
    body {
        display: table;
        margin: auto
    }
    table, th, td {
    border: 1px solid black;
    text-align: left;
}
</style>
<?php
$servername = "localhost";
$username = "thang";
$password = "123456";
$dbname = "weblearn";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    $arrRes = array();
//echo "Connected successfully";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT name FROM lab06_ex2_1 WHERE categories ="."'".$id."'";
    $result = $conn->query($sql);



    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $sql = "SELECT * FROM lab06_ex2 WHERE name ="."'".$row['name']."'";
            $tmp = $conn->query($sql);
            array_push($arrRes,$tmp);
        }
    }
}

$conn->close();
?>

<body>
    <h1>Business Listing</h1>
    <div>
        <table>
            <tr>
                <th></th>
                <h3>Choose categories to find business</h3>
            </tr>
            <tr>
                <th>
                    <a href="?id=food">Food</a>
                </th>
            </tr>
            <tr>
                <th>
                    <a href="?id=school">School</a>
                </th>
            </tr>
            <tr>
                <th>
                    <a href="?id=health">Health</a>
                </th>
            </tr>
            <tr>
                <th>
                    <a href="?id=community">Community</a>
                </th>
            </tr>
            <tr>
                <th>
                    <a href="?id=supplies">Supplies</a>
                </th>
            </tr>
        </table>
    </div>
    <div>
        <table>
        <?php
            if(sizeof($arrRes)>0)
            foreach($arrRes as $res){
                $row = $res->fetch_assoc();
                
                print("<tr>");
                print("<th>");
                print($row["name"]);
                print("</th>");
                print("<th>");
                print($row["address"]);
                print("</th>");
                print("<th>");
                print($row["city"]);
                print("</th>");
                print("<th>");
                print($row["telephone"]);
                print("</th>");
                print("<th>");
                print($row["url"]);
                print("</th>");
                print("</tr>");
            }
        ?>
        </table>
    </div>
</body>