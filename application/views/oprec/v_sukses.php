
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   

    <!-- Title Page-->
    <title>congratulations !!</title>

    <!-- Icons font CSS-->
    <link href="<?= base_url(); ?>/assets/css-form/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/assets/css-form/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?= base_url(); ?>/assets/css-form/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/assets/css-form/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url(); ?>/assets/css-form/css/main.css" rel="stylesheet" media="all">

    <style>
  body { text-align: center; padding-top: 20px; }
  h1 { font-size: 40px; }
  p { font: 16px Helvetica, sans-serif; color: #333; }
  
  a { color: #3498db; text-decoration: none; }
  a:hover { color: #333; text-decoration: none; }

/* -----------------tabel data peserta----------------------------------- */
  table{
  width: 100%; /* Ganti menjadi 100% untuk tampilan responsif */
  border-collapse: collapse;
  padding-right: 30px;
  margin: 0px 0px  0px;
  background-color: #fff;
  font-size: 14px;
  }
table tr {
    height: 30px;
    }
table th {
  background: #3498db;
  color: white;
  font-weight: bold;
 font: 16px Helvetica;
}
table td, th {
  padding: 6px 6px 6px 10px;
  border: 1px solid #ccc;
}

/* CSS3 untuk pewarnaan baris selang-seling */
table tr:nth-of-type(odd) {
  background: #eee;
}

/* Penomoran otomatis pada baris */
.css-serial {
  counter-reset: serial-number;  /* Atur penomoran ke 0 */
}
.css-serial td:first-child:before {
  counter-increment: serial-number;  /* Kenaikan penomoran */
  content: counter(serial-number);  /* Tampilan counter */
}
</style>

</head>

<body>
    <div class="page-wrapper bg-gra-04 p-t-45 p-b-50">
        <div class="wrapper wrapper--w1200">
            <div class="card card-5">
                
                <div class="card-body">
                     <h2><b>CONGRATULATIONS !!</b></h2>
    <div>
      <br>
        <h4><b>DATA ANDA BERHASIL DI INPUT !</b></h4>
        <p><br><BR>Apabila ada pertanyaan, silahkan hubungi<br><a href="https://wa.me/0895611024559">0895611024559 (Fajar)</a></p>
        <p>~ FORUM SHARE FILE DAN TANYA JAWAB ~</p>
    </div>


    <br>
    <br>
    <table class="css-serial">
  <thead>
      <tr>   
      <b><u>DATA PESERTA YANG TERDAFTAR</u></b>
        <th>NO</th>
        <th>NAMA</th>
        <th>JENIS KELAMIN</th>
        <th>TANGGAL LAHIR</th>
        <th>ASAL SEKOLAH</th>
     </tr>
  </thead> 
  <tbody>
     <?php foreach ($content->result() as $key): ?>
    <tr>
     <td align="center"></td>
      <td><?php echo $key->nama_depan; ?></td>
       <td><?php echo $key->jenis_kelamin; ?></td>
      <td><?php echo $key->tanggal_lahir; ?></td>
      <td><?php echo $key->asal_sekolah; ?></td>
    </tr>
     <?php endforeach; ?>
   </tbody>
  </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?= base_url(); ?>/assets/css-form/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?= base_url(); ?>/assets/css-form/vendor/select2/select2.min.js"></script>
    <script src="<?= base_url(); ?>/assets/css-form/vendor/datepicker/moment.min.js"></script>
    <script src="<?= base_url(); ?>/assets/css-form/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="<?= base_url(); ?>/assets/css-form/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->