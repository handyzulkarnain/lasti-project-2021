<?php
session_start();
$nama_user = $_SESSION['nama_user'];
$branch_name = $_SESSION['branch_name'];
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
              <img src="asset/img/transmart bandung.jpg"/>
              <h3>Suhu: XX</h3>
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