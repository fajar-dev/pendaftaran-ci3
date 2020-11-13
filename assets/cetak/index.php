    <?php 
        
		$koneksi = mysqli_connect("localhost","root","","oprec3");
 
    ?>
    <html>
    <head>
        <title>Export to Excel</title>
    </head>
    <body>
        <h3>Cara Mudah Membuat Script PHP Export to Excel - Rajaputramedia.Com</h3>
        <label>Export :</label>
        <a href="export.php"><button>Export to Excel</button></a><br />
        <hr />

        <?php 
            include 'data.php';
        ?>
    </body>
    </html>
