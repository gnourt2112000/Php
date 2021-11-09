<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<style>
label {display: block}
body {display: table; margin : auto}
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
//echo "Connected successfully";
if (isset($_POST["submit"])) {
    // $catID = $_POST["catID"];
    // $title = $_POST["title"];
    // $description = $_POST["description"];
    // $sql = "INSERT INTO lab06_ex2 (CatID, Title, Description) VALUES " . "(" . "'" . $catID . "'," . "'" . $title . "',"  .  "'" . $description . "')";
    // if ($conn->query($sql) === TRUE) {
    //     header("Refresh:0");
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }
    $name = $_POST["name"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $telephone = $_POST["telephone"];
    $url = $_POST["url"];
    $categories = $_POST["categories"];
    $sql = "INSERT INTO lab06_ex2 VALUES " . "(" . "'" . $name . "'," . "'" . $address . "',"  .  "'" . $city . "'". "," . "'" . $telephone . "'". "," . "'" . $url ."')";
    if ($conn->query($sql) === TRUE) {
            header("Refresh:0");
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    foreach($categories as $cate){
        $sql = "INSERT INTO lab06_ex2_1 (name,categories) VALUES" . "('".$name."','".$cate."')";
        $conn->query($sql);
    }
    //echo $name.$address.$city.$telephone.$url\;
}

$conn->close();
?>
<body>
<h1>Business Registration</h1><br>
<form method="post" action="ex2.php" text-align="center" style="display: flex">
    <div >
    <label for="categories" style="display:block">Choose a categories:</label>
    <select name="categories[]" id="categories" multiple>
        <option value="food">Food</option>
        <option value="school">School</option>
        <option value="health">Health</option>
        <option value="community">Community</option>
        <option value="supplies">Supplies</option>
    </select>
    </div>
    <div style="margin:10px">
        <label for="name">Business Name</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="address">Address</label>
        <input type="text" name="address" id="address">
        <br>
        <label for="city">City</label>
        <input type="text" name="city" id="city">
        <br>
        <label for="telephone">Telephone</label>
        <input type="text" name="telephone" id="telephone">
        <br>
        <label for="url">URL</label>
        <input type="text" name="url" id="url">
        <br>
        <input type="submit" name="submit" value="Add">
    </div>
</form>
</body>