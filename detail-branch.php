<?php
session_start();
$nama_user = $_SESSION['nama_user'];
$branch_name = $_SESSION['branch_name'];

$db_host = 'localhost';
$db_port = '3306';
$db_user = 'root';
$db_pswd = '';
$db_name='lastipro_sensorsuhu';

$con = mysqli_connect($db_host, $db_user, $db_pswd, $db_name) or
    die('<body style="font-family: arial;"><div style="padding: 20px;border:dotted 1px gray;color: #f44336;"><b>ERROR !</b><small> Server Connection Lost,'.mysqli_connect_error().'</small></div></body>');

$nama_user = $_SESSION['nama_user'];

$value_suhu = '';
if (isset($_POST['measure_temp'])) {
    $str = 'SELECT temp FROM sensordata';
    $result = mysqli_query($con, $str);
    $row = mysqli_fetch_array($result);
    $value_suhu = $row['temp'];
}
?>

<html>
  <head>
    <title><?php echo 'Branch '.$branch_name ?></title>
    <link rel="stylesheet" href="asset/styles/style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>

  <body>
    <header></header>
    <main>
      <div>
        <h1><?php echo 'Halo, '.$nama_user.'...'?></h1>
        <h1><?php echo 'Selamat Datang di Branch '.$branch_name ?></h1>
      </div>
      <section>
        <div>
          <h2>Lakukan Pengukuran Suhu</h2>
          <div class="container">
            <div class="box card">
                <form action="#" method="POST">
                    <input type="submit" name="measure_temp" value="Ukur Sekarang!">
                </form>
                <h3>Suhu: <?php echo $value_suhu ?></h3>
                <h3>Indikator: XX</h3>
                <h3>Status: XX</h3>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer></footer>
  </body>
</html>