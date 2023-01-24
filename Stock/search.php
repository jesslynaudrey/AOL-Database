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
        
        <div style="top:-20px; left: 10px;">
          <div id="group_11" style="top: 310px; width: 1600px">
          <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7" style="bottom: -20px;">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data" style="width: 1000px; font-size: 20px;" >
                                        <button type="submit" class="btn btn-primary" style="margin-left: 575px; margin-top: -40px;">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br>
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                      <div div class="table-responsive" style="width: 1570px; left: -2px">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Produk</th>
                                    <th>Jenis Produk</th>
                                    <th>Stok Produk</th>
                                    <th>Harga Produk</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost:3306","root","eagle6803","mixu");

                                    if(isset($_GET['search']))
                                    {
                                        $name = $_GET['search'];
                                        $query = "SELECT * FROM produk WHERE name LIKE '%$name%'";
                                        $query_run = mysqli_query($con, $query);

                                        if($query_run)
                                        {
                                            while ($row = mysqli_fetch_assoc($query_run))
                                            {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['id']??''; ?></td>
                                                    <td><?php echo $row['name']??''; ?></td>
                                                    <td><?php echo $row['jenis']??''; ?></td>
                                                    <td><?php echo $row['stok']??''; ?></td>
                                                    <td><?php echo $row['harga']??''; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
        
        <form action="../Menu/menu_page_admin.html">
        <div id="group_15">
            <input
              href="update.php"
              type="submit"
              name="Update"
              value="Menu"
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