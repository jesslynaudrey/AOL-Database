<!DOCTYPE html>
<html>
<head>
<title>How To upload BLOB Image To Mysql Database Using PHP,SQL And HTML.</title>
</head>
<body>
<form  action="inputproduk.php" method="post" enctype="multipart/form-data">
<input type="text" name="email" id = "email" required value=""> <br>
<input type="password" name="password" id = "password" required value=""> <br>
<br />
<input type="submit" name="submit" value="Upload">

</form>
</body>
<?php
$servername = "localhost:3306";
$username = "root";
$password = "eagle6803";
$conn = mysqli_connect($servername, $username, $password);

if ($conn) {
echo "Connected to server successfully";
} else {
die( "Failed To Connect to server ". mysqli_connect_error() );
}

$selectalreadycreateddatabase = mysqli_select_db($conn, "mixu"); 
if ($selectalreadycreateddatabase) {
echo "<br /> Connected to database successfully \n";
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `user`(`email`, `password` ) VALUES ('$email', '$password')";
    if (mysqli_query($conn, $sql)) {
        echo "<br />Image uploaded successfully" . "\n";
    } else {
        echo "<br />Image Failed to upload.";
    }

    $sql = "SELECT * FROM `user`";
    $dataFromDb = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($dataFromDb)) {
        echo $row['email'] . "\n";
        echo $row['password'] . "\n";
    }
    
    $sql = "UPDATE user SET `email`='cool' WHERE id=1";
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully" . "\n";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    $sql = "DELETE FROM user WHERE id=1";
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully" . "\n";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

// Retrieve image from database and display it on html webpage
// function displayImageFromDatabase(){
// //use global keyword to declare conn inside a function
// global $conn;
// $sqlselectimageFromDb = "SELECT * FROM `produk`";
// $dataFromDb = mysqli_query($conn, $sqlselectimageFromDb);
// while ($row = mysqli_fetch_assoc($dataFromDb)) {
// echo '<img height="250px" width="250px" src=data:image;base64,'.base64_encode($row['image']).'/>';
// }


// }
// //calling the function to display image
// displayImageFromDatabase();

//Finnaly close connection
if (mysqli_close($conn)) {
echo "<br />Connection Closed.......";
}


?>
</html>