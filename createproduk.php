<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quella</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body style="background:url('assets/img/xx.png')" width="20%">
    <script type="text/javascript">
      $(document).ready(function (e) {
    $("#inputdata").on('submit',(function(e) {
            e.preventDefault();
            $.ajax({
              url : 'http://localhost/Quellaxx/idp.php',
              method: "POST",
              data: new FormData(this),
              contentType: false,
              cache: false,
              processData: false,
              beforeSend:function(){
                $("#head").html("Sedang Mengunggah Data");
              },
              success:function(result){
                $("#head").html("Data Berhasil Ditambahkan");
                 setTimeout(function() {
                  window.location = "http://localhost/Quellaxx/lihatdp.php"}, 2000);
                 // location.reload();
              },
              error: function(xhr, Status, err) {
                $("#head").html("Terjadi error : "+Status);
              }
            });
  }));
    });
</script>
  <center><img src="assets/img/1-1.png" width="25%" style="margin-top:20px;"></center>
  <br>
  <div class="container">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="collapse navbar-collapse fixed-on-top" id="navcol-1">
          <ul class="nav navbar-nav">
            <li role="presentation"><a href="index.php">Home</a></li>
            <!-- <li role="presentation"><a href="#">Kelola Produk</a></li> -->
            <li class="active" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Kelola Produk<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li class="disabled" role="presentation">
                  <a href="#"> </a>
                </li>
                <li role="presentation"><a href="#">Input Data Produk</a></li>
                <li role="presentation"><a href="lihatdp.php">Lihat Data Produk</a></li>
              </ul>
            </li>
            <li role="presentation"><a href="transaksi.php">Transaksi</a></li>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> LOGOUT</a></li>
        </ul>
      </nav>
    </div>
  </div>
</div>
<center>
  <div class="register">
<?php
if(isset($_SESSION['message'])){
echo $_SESSION['message'];
unset($_SESSION['message']);
}
?>
      <br><div id="head">Input Data Produk</div>
      <br><br>
      <div class="form">
        <form enctype="multipart/form-data" id="inputdata" method="POST">
          <label for="">Nama</label><br>
          <input type="text" name="nama" value="" placeholder="Nama" required>
          <br>
          <label for="">Jumlah Produk</label><br>
          <input min="1" type="number" name="jumlah" value="" placeholder="Masukkan Jumlah Produk" required>
          <br>
          <label for="">Harga Produk</label><br>
          <input min="1" type="number" name="harga" value="" placeholder="Masukkan Harga" required>
          <br>
          <label for="">Gambar</label><br>
          <input  type="file" name="gambar" value="" placeholder="Gambar" required>
          <br>
          <input type="submit" name="submit" value="Masukkan">
          <br><br><br>
        </form>
      </div>
    </div>
  </center>

</body>
</html>
