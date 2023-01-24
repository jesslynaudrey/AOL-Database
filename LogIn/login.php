<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8" />
    <title>login_page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <link rel="StyleSheet" href="web.css" />
  </head>
  <body>
    <div id="content-container">
      <div id="page_login_page_ek1">
        <div id="_bg__login_page_ek2"></div>
        <img src="skins/coffee_beans_with_props_making_coffee_1220_4536_3.png" id="coffee_beans_with_props_making_coffee_1220_4536_1" />
        <div id="rectangle_3_ek1"></div>
        <div id="rectangle_4" style="left: 410px"></div>

        <div id="mixu_cafe">MIXU<span class="char">%E2%80%A2C</span>CAFE</div>
        <div id="rectangle_2"></div>
        <form  action="" method="post" enctype="multipart/form-data">
            <div id="id_staff">ID STAFF</div>
            <div id="id_staff2">
            <input type="text" name="email" id="staff" style="border: 0ch; outline: 0ch; font-size: 30px" required/>
            </div>
            <div id="password">PASSWORD</div>
            <div id="password2">
            <input type="text" name="password" id="pass" style="border: 0ch; outline: 0ch; font-size: 30px" required/>
            </div>
            <div id="login" style="left: 465px">
            <input type="submit" name="submit" style="border: 0ch; outline: 0ch; font-size: 45px; font-family: sans-serif; background-color: white">
                
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
  <?php
    $servername = "localhost:3306";
    $username = "root";
    $password = "eagle6803";
    $conn = mysqli_connect($servername, $username, $password);
    $selectalreadycreateddatabase = mysqli_select_db($conn, "mixu"); 

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $show = 1;

        $sql = "SELECT * FROM `user`";
        $dataFromDb = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($dataFromDb)) {
            if($row['email'] ==  $email && $row['password'] ==  $password){
              if (mysqli_close($conn)) {
                $show = 0;
              }
                echo "<script>window.location.href='../Menu/menu_page_admin.html';</script>";
            }
        }

        if (mysqli_close($conn)) {
        }
    }
?>
</html>
