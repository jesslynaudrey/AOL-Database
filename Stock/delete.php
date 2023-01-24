<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8" />
    <title>update_page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <link rel="StyleSheet" href="css.css" />
    <script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js?v=6"></script>
    <!-- Add your custom HEAD content here -->
  </head>
  <body>
    <div id="content-container">
      <div id="page_input_page_ek1">
        <div id="_bg__input_page_ek2"></div>
        <img src="skins/coffee_beans_with_props_making_coffee_1220_4536_3.png" id="coffee_beans_with_props_making_coffee_1220_4536_3" />
        <img src="skins/rectangle_38.png" id="rectangle_38" />
        
        <div id="input_produk">Delete produk</div>
        <img src="skins/rectangle_38_ek1.png" id="rectangle_38_ek1" />
        <div id="input_produk_ek1">Delete Produk</div>
        <img src="skins/rectangle_10.png" id="rectangle_10" />

        <div style="top: -170px">
        <div id="rectangle_37"></div>
        <div style="top:-20px">
        <div id="group_11">
          <div id="id_produk_nama_produk_jenis_produk_stok_produk_harga">
          <br /><br /><br />Produk Name<br>
          </div>
          <div id="___p021________">
          <br /><br />
            <br />
            : <br />
          </div>
        </div>
        <form  action="" method="post" enctype="multipart/form-data">
        <br /><br />
        <div id="stok_produk" style="top:0px">
            <input type="text" value='0' name ="name" id="name" style="border: 0ch; margin-left: -85px; height: 20px; width: 250px; outline: 0ch; font-size: 20px" />
          </div>
          </div>
        </div>
        
        
          <div id="group_15">
            <input
              type="submit"
              name="submit"
              value="Delete Produk"
              style="width: 382.19px; height: 81.74px; font-size: 30px; border-radius: 30px; border: 5px solid; border-color: red" 
            />
            
          </div>
        </form>
      </div>
    </div>
    <script>
      var specialChars = document.querySelectorAll("span.char");
      for (var c = 0; c < specialChars.length; c++) {
        specialChars[c].innerHTML = decodeURIComponent(specialChars[c].innerHTML);
      }
    </script>
  </body>
</html>
<?php
$servername = "localhost:3306";
$username = "root";
$password = "eagle6803";

$conn = mysqli_connect($servername, $username, $password);
$selectalreadycreateddatabase = mysqli_select_db($conn, "mixu"); 

if (isset($_POST['submit'])) {
    $name = $_POST['name'];


    // $sql = "INSERT INTO `produk`(`name`, `jenis`, `stok`, `harga`) VALUES ('$nama', '$jenis','$stok','$harga')";
    // if (mysqli_query($conn, $sql)) {
    //   if (mysqli_close($conn)) {
    //   }
    //   echo "<script> alert('Input Produk Sukses'); window.location.href='';</script>";
    // } else {
    //   echo "<br />Image Failed to upload.";
    // }

    // $sql = "SELECT * FROM `produk`";
    // $dataFromDb = mysqli_query($conn, $sql);
    // while ($row = mysqli_fetch_assoc($dataFromDb)) {
    //     echo $row['name'] . "\n";
    //     echo $row['jenis'] . "\n";
    //     echo $row['stok'] . "\n";
    //     echo $row['harga'] . "\n";
    // }
    
    // $sql = "UPDATE produk SET stok ='$stok', harga ='$harga' WHERE 'name' = '$name'";
    // if (mysqli_query($conn, $sql)) {
    //   echo "<script> alert('Update Produk Sukses'); window.location.href='../Menu/menu_page_admin.html';</script>";
    // } else {
    //   echo "<script> alert('No Product'); window.location.href='../Menu/menu_page_admin.html';</script>";
    // }

    $sql = "DELETE FROM produk WHERE name = '$name'";
    if (mysqli_query($conn, $sql)) {
      if (mysqli_close($conn)) {
      }
      echo "<script> alert('Delete Produk Sukses'); window.location.href='../Menu/menu_page_admin.html';</script>";
    } else {
      echo "<script> alert('Delete Produk Gagal'); window.location.href='../Menu/menu_page_admin.html';</script>";
    }
}
?>
</html>