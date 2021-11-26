<?php 
session_start();

$db_host = 'localhost';
$db_port = '3306';
$db_user = 'root';
$db_pswd = '';
$db_name='lastipro_sensorsuhu';

$con = mysqli_connect($db_host, $db_user, $db_pswd, $db_name) or
    die('<body style="font-family: arial;"><div style="padding: 20px;border:dotted 1px gray;color: #f44336;"><b>ERROR !</b><small> Server Connection Lost,'.mysqli_connect_error().'</small></div></body>');

$nama_user = $_SESSION['nama_user'];

$str = 'SELECT COUNT(id) FROM sensordata';
$result = mysqli_query($con, $str);
$row = mysqli_fetch_array($result);
$value_keramaian = $row['COUNT(id)'];
?>

<html>
  <head>
    <title>Transmart Smart Service</title>
    <link rel="stylesheet" href="asset/styles/style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>

  <body>
    <header></header>
    <main>
      <div>
        <h1>Transmart Monitoring & Controlling System</h1>
      </div>
      <section>
        <div>
          <h2><?php echo 'Hi, '.$nama_user.'...' ?></h2>
          <h2>Pilih Branch Transmart</h2>
          <div class="container">
            <div class="box card">
              <img src="asset/img/transmart bandung.jpg"/>
              <h3>Nama Branch: Transmart Buah Batu Bandung</h3>
              <h3>Lokasi: Jalan Bojongsoang Raya No. 269, Cipagalo, Bojongsoang, Cipagalo, Bojongsoang, Bandung, Jawa Barat 40287</h3>
              <h3>Tingkat Keramaian: <?php echo $value_keramaian?></h3>
              <form action="#" method="POST">
                <input type="submit" name="branch1" value="Pilih">
              </form>
            </div>
            <div class="box card">
              <img src="asset/img/transmart bandung.jpg"/>
              <h3>Nama Branch: Lorem Ipsum</h3>
              <h3>Lokasi: Lorem Ipsum</h3>
              <h3>Tingkat Keramaian: <?php echo $value_keramaian?></h3>
              <form action="#" method="POST">
                <input type="submit" name="branch2" value="Pilih">
              </form>
            </div>
            <div class="box card">
              <img src="asset/img/transmart bandung.jpg"/>
              <h3>Nama Branch: Lorem Ipsum</h3>
              <h3>Lokasi: Lorem Ipsum</h3>
              <h3>Tingkat Keramaian: <?php echo $value_keramaian?></h3>
              <form action="#" method="POST">
                <input type="submit" name="branch3" value="Pilih">
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer></footer>
  </body>
</html>

<?php 
if (isset($_POST['branch1'])) {
  $branch_name = 'Transmart Buah Batu Bandung';
  $_SESSION['branch_name'] = $branch_name;
  header('location: detail-branch.php');
}
elseif (isset($_POST['branch2'])) {
  $branch_name = 'Transmart B';
  $_SESSION['branch_name'] = $branch_name;
  header('location: detail-branch.php');
}
elseif (isset($_POST['branch3'])) {
  $branch_name = 'Transmart C';
  $_SESSION['branch_name'] = $branch_name;
  header('location: detail-branch.php');
}
?>
