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
                                  <select class="form-control" id="sel1" name="category">
                                    <option value="accessories">ACCESSORIES</option>
                                    <option value="android tv box">ANDROID TV BOX</option>
                                    <option value="notebook">NOTEBOOK</option>
                                    <option value="charger kabel data">CHARGER KABEL DATA</option>
                                    <option value="casing">CASING</option>
                                    <option value="earphone">EARPHONE</option>
                                    <option value="flashdisk">FLASHDISK</option>
                                    <option value="headset">HEADSET</option>
                                    <option value="printer canon">PRINTER CANON</option>
                                    <option value="printer brother">PRINTER BROTHER</option>
                                    <option value="printer hp">PRINTER HP</option>
                                    <option value="printer epson">PRINTER EPSON</option>
                                    <option value="scanner">SCANNER</option>
                                    <option value="tinta epson original">TINTA EPSON ORIGINAL</option>
                                    <option value="tinta canon original">TINTA CANON ORIGINAL</option>
                                    <option value="tinta brother original">TINTA BROTHER ORIGINAL</option>
                                    <option value="networking brand asus">NETWORKING BRAND ASUS</option>
                                    <option value="networking brand dlink">NETWORKING BRAND DLINK</option>
                                    <option value="networking brand tp-link">NETWORKING BRAND TP-LINK</option>
                                    <option value="networking brand tenda">NETWORKING BRAND TENDA</option>
                                    <option value="external hdd 2'5">EXTERNAL HDD 2'5</option>
                                    <option value="external hdd 3'5">EXTERNAL HDD 3'5</option>
                                    <option value="internal hdd 2'5">INTERNAL HDD 2'5</option>
                                    <option value="internal hdd 3'5">INTERNAL HDD 3'5</option>
                                    <option value="modem">MODEM</option>
                                    <option value="ssd">SSD</option>
                                    <option value="memory card">MEMORY CARD</option>
                                    <option value="ram">RAM</option>
                                    <option value="wireless receiver">WIRELESS RECEIVER</option>
                                    <option value="kabel">KABEL</option>
                                    <option value="ip camera">IP CAMERA</option>
                                    <option value="monitor">MONITOR</option>
                                    <option value="power bank">POWER BANK</option>
                                    <option value="toner">TONER</option>
                                    <option value="printer thermal & bluetooth">PRINTER THERMAL & BLUETOOTH</option>
                                    <option value="projector">PROJECTOR</option>
                                    <option value="tablet gambar">TABLET GAMBAR</option>
                                    <option value="layar projector">LAYAR PROJECTOR</option>
                                    <option value="speaker">SPEAKER</option>
                                    <option value="gaming peripheral">GAMING PERIPHERAL</option>
                                    <option value="ups & stabilizer">UPS & STABILIZER</option>
                                    <option value="fingerprint">FINGERPRINT</option>
                                    <option value="kertas foto">KERTAS FOTO</option>
                                    <option value="tinta refill">TINTA REFILL</option>
                                    <option value="keyboard & mouse">KEYBOARD & MOUSE</option>
                                    <option value="pointer">POINTER</option>
                                    <option value="thermal paste">THERMAL PASTE</option>
                                  </select>
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