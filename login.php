<?php
session_start();
$username = 'admin';
$password = 'admin';
if (isset($_POST['submit'])) {
    if ($_POST['username'] == $username && $_POST['password'] == $password){
        //Membuat Session
        $_SESSION["username"] = $username;
        echo "Anda Berhasil Login $username";
        /*Jika Ingin Pindah Ke Halaman Lain*/
        // header("Location: admin.php"); //Pindahkan Kehalaman Admin
    } else {
        // Tampilkan Pesan Error
        display_login_form();
        echo '<p>Username Atau Password Tidak Benar</p>';
    }
}
else {
    display_login_form();
}
function display_login_form(){ ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
    <label for="username">username</label>
    <input type="text" name="username" id="username">
    <label for="password">password</label>
    <input type="password" name="password" id="password">
    <input type="submit" name="submit" value="submit">
    </form>
<?php } ?>

<html>
  <title>
    Login
  </title>
  <head>
    <link rel="stylesheet" href="styles.css">
  </head>

    <body >

    <div class="form1">
        <div class="icon">
        <img src="img/iconcowok.png" height="120px" width="120px"/>
        <img src="img/iconcewek.png" height="110px" width="110px"/>
        </div>
          <input type="text" placeholder="Username" required=""  class="inputan">
          <br><br>
          <input type="password" name="password" placeholder="Password" required="" class="inputan">
          <br><br>
          <center>
          <input type="submit" value="Batal" id="batal" class="buttonsimpanbatal">
          <input type="submit" value="Login" class="buttonsimpanbatal">
        </center>
        <br>

    </div>
   <br>
   <br>
   <br>

    </body>

</html>
