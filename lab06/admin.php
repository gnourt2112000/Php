<?php
$servername = "localhost";
$username = "thang";
$password = "123456";
$dbname = "weblearn";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

$sql = "SELECT CatID, Title,Description FROM lab06_ex1";
$result = $conn->query($sql);

if (isset($_POST["submit"])) {
    $catID = $_POST["catID"];
    $title = $_POST["title"];
    $description = $_POST["description"];
    $sql = "INSERT INTO lab06_ex1 (CatID, Title, Description) VALUES " . "(" . "'".$catID . "'," . "'". $title. "',"  .  "'".$description . "')";
    if ($conn->query($sql) === TRUE) {
        header("Refresh:0");
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<table>
    <tr>
        <th>CatID</th>
        <th>Title</th>
        <th>Description</th>
    <tr>
        <?php
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                print("<tr>");
                print("<th>$row[CatID]</th><th>$row[Title]</th><th>$row[Description]</th>");
                print("</tr>");
            }
        }
        ?>

        <form action="admin.php" method="post">
    <tr>
        <th><input type="text" name="catID"></th>
        <th><input type="text" name="title"></th>
        <th><input type="text" name="description"></th>
    </tr>
    <tr>
        <th>
            <input type="submit" name="submit">
        </th>
    </tr>
    </form>



</table>