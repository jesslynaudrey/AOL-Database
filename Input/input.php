<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input</title>
    <meta http-equiv = "refresh" content = "3; url = inputproduk.php" />
</head>
<body>
<?php
        $servername = "localhost:3306";
        $username = "root";
        $password = "";
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

        $sql = "SELECT * FROM `produk`";
        $dataFromDb = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($dataFromDb)) {
            echo $row['name'] . "\n";
            echo $row['jenis'] . "\n";
            echo $row['stok'] . "\n";
            echo $row['harga'] . "\n";
        }

        if (mysqli_close($conn)) {
            echo "<br />Connection Closed.......";
        }
    ?>
</body>
</html>