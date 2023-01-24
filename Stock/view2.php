<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8" />
    <title>view_page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <link rel="StyleSheet" href="css.css" />
    <script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js?v=6"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
    <div id="content-container">
      <div id="page_input_page_ek1">
        <div id="_bg__input_page_ek2"></div>
        <img src="skins/coffee_beans_with_props_making_coffee_1220_4536_3.png" id="coffee_beans_with_props_making_coffee_1220_4536_3" />
        <img src="skins/rectangle_38.png" id="rectangle_38" />
        
        <div id="input_produk">Stock produk</div>
        <img src="skins/rectangle_38_ek1.png" id="rectangle_38_ek1" />
        <div id="input_produk_ek1">Stock Produk</div>
        <img src="skins/rectangle_10.png" id="rectangle_10" />

        <div style="top:-20px">
          <div id="group_11" style="top: 310px; width: 1600px">
            <div class="table-responsive">
              <table class="table table-bordered" style="text-align: center;">
                  <thead class="table-dark">
                  <tr class="col-3">
                    <th class="col-2">Id produk</th>
                    <th class="col-2">Nama produk</th>
                    <th class="col-2">Jenis produk</th>
                    <th class="col-2">Stok produk</th>
                    <th class="col-2">Harga produk</th>
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

        <form action="search.php">
          <div id="group_15" style="left: 1100px;">
              <input

                type="submit"
                name="Delete"
                value="Search Produk"
                style="width: 382.19px; height: 81.74px; font-size: 30px; border-radius: 30px; border: 5px solid; border-color: blue" 
              />
          </div>
        </form>

        <form action="delete.php">
          <div id="group_15" style="left: 1500px;">
              <input

                type="submit"
                name="Delete"
                value="Delete Produk"
                style="width: 382.19px; height: 81.74px; font-size: 30px; border-radius: 30px; border: 5px solid; border-color: red" 
              />
          </div>
        </form>
        
        <form action="update.php">
        <div id="group_15">
            <input
              href="update.php"
              type="submit"
              name="Update"
              value="Update Produk"
              style="width: 382.19px; height: 81.74px; font-size: 30px; border-radius: 30px; border: 5px solid; border-color: aquamarine" 
            />
        </div>
        </form>
    <script>
      var specialChars = document.querySelectorAll("span.char");
      for (var c = 0; c < specialChars.length; c++) {
        specialChars[c].innerHTML = decodeURIComponent(specialChars[c].innerHTML);
      }
    </script>
  </body>
</html>