<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Data Peserta</title>
    <style>
     h1{
     	text-align: center;
     }
      .kartu {
        width: 800px;
        margin: 0 auto;
        margin-top: 70px;
           
    transition: all .3s;
      } 
      .foto {
        padding: 20px;
      }
      tbody {
    font-size: 25px;
    font-weight: 300;
}
.biodata {
    margin-top: 30px;
}
    </style>
    <script type="text/javascript"> window.print();</script>
  </head>


 <body>
<div class="container">
  <div class="card kartu">
    <div class="row">
      <div class="col-md-4">
      	<h1>DATA PESERTA</h1>
      <div class="foto">
        <img src="<?= base_url() ?>/assets/img/data/<?= $data->gambar ?>" alt="" width="200" height="auto">
      </div>
      </div>
      <div class="col-md-8 kertas-biodata">
        <div class="biodata">
        <table width="100%" border="0">
    <tbody><tr>
        <td valign="top">
        <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
          <tbody>
            <tr>
              <td width="25%" valign="top" class="textt">Nama</td>
                <td width="2%">:</td>
                <td style="font-weight: bold;"><?= $data->nama_depan ?></td>
            </tr>
          <tr>
              <td class="textt">Jenis Kelamin</td>
                <td>:</td>
                <td style="font-weight: bold;"><?= $data->jenis_kelamin ?></td>
            </tr>
          <tr>
              <td class="textt">Agama</td>
                <td>:</td>
                <td style="font-weight: bold;"><?= $data->agama ?></td>
            </tr>
          <tr>
              <td class="textt">Tanggal Lahir</td>
                <td>:</td>
                <td style="font-weight: bold;"><?= $data->tanggal_lahir ?></td>
            </tr>
          <tr>
              <td class="textt">Asal</td>
                <td>:</td>
                <td style="font-weight: bold;"><?= $data->asal ?></td>
            </tr>
          <tr>
              <td valign="top" class="textt">Sekolah</td>
                <td valign="top">:</td>
                <td style="font-weight: bold;"><?= $data->asal_sekolah ?></td>
            </tr>
            <tr>
              <td valign="top" class="textt">No.HP</td>
                <td valign="top">:</td>
                <td style="font-weight: bold;"><?= $data->nohp ?></td>
            </tr>
             <tr>
              <td valign="top" class="textt">Instagram</td>
                <td valign="top">:</td>
                <td style="font-weight: bold;"><?= $data->instagram ?></td>
            </tr>
             <tr>
              <td valign="top" class="textt">Email</td>
                <td valign="top">:</td>
                <td style="font-weight: bold;"><?= $data->email ?></td>
            </tr>
             <tr>
              <td valign="top" class="textt">password</td>
                <td valign="top">:</td>
                <td style="font-weight: bold;"><?= $data->pass_apl ?></td>
            </tr>
        </tbody></table>
        </td>
    </tr>
    </tbody></table>
  </div>
      </div>
    </div>
  </div>
</div>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


</body>