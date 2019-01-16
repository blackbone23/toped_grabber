<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Toped Grabber</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body>

		<div class="container">
			<?php if (!empty($_GET)) {
			    if (@$_GET['progress'] == "1") {
			        echo '<div class="alert alert-info">Produk dengan SKU : '.$_GET['sku'].' berhasil diinput</div>';
			    } elseif (@$_GET['message'] == "produk_ada") {
			        echo '<div class="alert alert-danger">Produk sudah ada</div>';
			    }else {
			        echo '<div class="alert alert-danger">Produk dengan SKU : '.$_GET['sku'].' tidak berhasil diinput</div>';
			    }
			} ?>
			<div class="row">
        		<div class="col-md-6 col-md-offset-3">
        			<div class="panel panel-default">
                        <div class="panel-heading">Input Barang ke CSV</div>
        				<div class="panel-body">
        					<form action="test.php" method="post" autocomplete="off">
        						 <div class="form-group">
                                  <label for="sel1">Kategori:</label>
                                  <!--  select class="form-control" id="sel1" name="category"-->
                                  	<br/>
                                    <input type="checkbox" name="category" value="accessories"> ACCESSORIES</input><br/>
                                    <input type="checkbox" name="category" value="android tv box"> ANDROID TV BOX</input><br/>
                                    <input type="checkbox" name="category" value="notebook"> NOTEBOOK</input><br/>
                                    <input type="checkbox" name="category" value="charger kabel data"> CHARGER KABEL DATA</input><br/>
                                    <input type="checkbox" name="category" value="casing"> CASING</input><br/>
                                    <input type="checkbox" name="category" value="earphone"> EARPHONE</input><br/>
                                    <input type="checkbox" name="category" value="flashdisk"> FLASHDISK</input><br/>
                                    <input type="checkbox" name="category" value="headset"> HEADSET</input><br/>
                                    <input type="checkbox" name="category" value="printer canon"> PRINTER CANON</input><br/>
                                    <input type="checkbox" name="category" value="printer brother"> PRINTER BROTHER</input><br/>
                                    <input type="checkbox" name="category" value="printer hp"> PRINTER HP</input><br/>
                                    <input type="checkbox" name="category" value="printer epson"> PRINTER EPSON</input><br/>
                                    <input type="checkbox" name="category" value="scanner"> SCANNER</input><br/>
                                    <input type="checkbox" name="category" value="tinta epson original"> TINTA EPSON ORIGINAL</input><br/>
                                    <input type="checkbox" name="category" value="tinta canon original"> TINTA CANON ORIGINAL</input><br/>
                                    <input type="checkbox" name="category" value="tinta hp original"> TINTA HP ORIGINAL</input><br/>
                                    <input type="checkbox" name="category" value="tinta brother original"> TINTA BROTHER ORIGINAL</input><br/>
                                    <input type="checkbox" name="category" value="networking brand asus"> NETWORKING BRAND ASUS</input><br/>
                                    <input type="checkbox" name="category" value="networking brand dlink"> NETWORKING BRAND DLINK</input><br/>
                                    <input type="checkbox" name="category" value="networking brand tp-link"> NETWORKING BRAND TP-LINK</input><br/>
                                    <input type="checkbox" name="category" value="networking brand tenda"> NETWORKING BRAND TENDA</input><br/>
                                    <input type="checkbox" name="category" value="networking brand mikrotik"> NETWORKING BRAND Mikrotik</input><br/>
                                    <input type="checkbox" name="category" value="external hdd 2.5"> EXTERNAL HDD 2'5</input><br/>
                                    <input type="checkbox" name="category" value="external hdd 3.5"> EXTERNAL HDD 3'5</input><br/>
                                    <input type="checkbox" name="category" value="internal hdd 2.5"> INTERNAL HDD 2'5</input><br/>
                                    <input type="checkbox" name="category" value="internal hdd 3.5"> INTERNAL HDD 3'5</input><br/>
                                    <input type="checkbox" name="category" value="modem"> MODEM</input><br/>
                                    <input type="checkbox" name="category" value="ssd"> SSD</input><br/>
                                    <input type="checkbox" name="category" value="memory card"> MEMORY CARD</input><br/>
                                    <input type="checkbox" name="category" value="ram"> RAM</input><br/>
                                    <input type="checkbox" name="category" value="wireless receiver"> WIRELESS RECEIVER</input><br/>
                                    <input type="checkbox" name="category" value="kabel"> KABEL</input><br/>
                                    <input type="checkbox" name="category" value="ip camera"> IP CAMERA</input><br/>
                                    <input type="checkbox" name="category" value="monitor"> MONITOR</input><br/>
                                    <input type="checkbox" name="category" value="power bank"> POWER BANK</input><br/>
                                    <input type="checkbox" name="category" value="toner"> TONER</input><br/>
                                    <input type="checkbox" name="category" value="printer thermal & bluetooth"> PRINTER THERMAL & BLUETOOTH</input><br/>
                                    <input type="checkbox" name="category" value="projector"> PROJECTOR</input><br/>
                                    <input type="checkbox" name="category" value="tablet gambar"> TABLET GAMBAR</input><br/>
                                    <input type="checkbox" name="category" value="layar projector"> LAYAR PROJECTOR</input><br/>
                                    <input type="checkbox" name="category" value="speaker"> SPEAKER</input><br/>
                                    <input type="checkbox" name="category" value="gaming peripheral"> GAMING PERIPHERAL</input><br/>
                                    <input type="checkbox" name="category" value="psu, ups & stabilizer"> PSU, UPS & STABILIZER</input><br/>
                                    <input type="checkbox" name="category" value="fingerprint"> FINGERPRINT</input><br/>
                                    <input type="checkbox" name="category" value="kertas foto"> KERTAS FOTO</input><br/>
                                    <input type="checkbox" name="category" value="tinta refill"> TINTA REFILL</input><br/>
                                    <input type="checkbox" name="category" value="keyboard & mouse"> KEYBOARD & MOUSE</input><br/>
                                    <input type="checkbox" name="category" value="pointer"> POINTER</input><br/>
                                    <input type="checkbox" name="category" value="thermal paste"> THERMAL PASTE</input><br/>
                                  <!-- /select-->
                                </div>
        						<div class="form-group">
        							<label for="name">URL tokopedia</label>
        							<input type="text" name="url" id="url" class="form-control">
        						</div>
        						<button type="submit" class="btn btn-default">Input</button>
        					</form>
        				</div>
        			</div>
        		</div>
        	</div>
		</div>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/boostrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>
</html>
