<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr>
         <th>Id produk</th>
         <th>Nama produk</th>
         <th>Jenis produk</th>
         <th>Stok produk</th>
         <th>Harga produk</th>
    </thead>
    <tbody>
    <?php
      $servername = "localhost:3306";
      $username = "root";
      $password = "eagle6803";

      $conn = mysqli_connect($servername, $username, $password);
      $selectalreadycreateddatabase = mysqli_select_db($conn, "mixu"); 

      $sql = "SELECT * FROM `produk`";
      $dataFromDb = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($dataFromDb)) {?>
        <tr>
        <td><?php echo $row['id']??''; ?></td>
        <td><?php echo $row['name']??''; ?></td>
        <td><?php echo $row['jenis']??''; ?></td>
        <td><?php echo $row['stok']??''; ?></td>
        <td><?php echo $row['harga']??''; ?></td>
      </tr>
      <?php
      }?>

      
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>