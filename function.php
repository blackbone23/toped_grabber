<?php
$servername = "localhost"; //host mysql
$username = "root"; //user mysql
$password = "";  //password mysql
$db_name = "test"; //database name mysql

// Create connection
$conn = mysql_connect($servername, $username, $password); //koneksi ke mysql


// Check connection
if (!$conn) { //cek koneksi ke mysql
    die('Gagal Koneksi: ' . mysql_error());
}


mysql_select_db("test",$conn) or die("Couldn't select database."); //koneksi ke database

// ****kumpulan fungsi sistem

function getLastSKU($conn, $category) { //mendapatkan sku terakhir dari kategori yang dipilih
    $sql_sku_cat = 'SELECT SKU from mytable WHERE Categories = "'.$category.'" ORDER by ID DESC LIMIT 1' ;
    
    
    $ambildata = mysql_query($sql_sku_cat, $conn) or die("Cannot select db.");
    if(!$ambildata ) {
        die('Gagal ambil data: ' . mysql_error());
    }
    
    $check = mysql_fetch_array($ambildata);
    
    return $check['SKU'];
    
}

function product_checker($conn, $product_name){
    $sql_name = 'SELECT * FROM `mytable` WHERE Name = "'.$product_name.'"' ;
    
    
    $ambildata = mysql_query($sql_name, $conn) or die("Cannot select db.");
    if(!$ambildata ) {
        die('Gagal ambil data: ' . mysql_error());
    }
    
    $check = mysql_fetch_array($ambildata);
    
    if ($check != NULL) {
        header("Location: index.php?message=produk_ada");
    }

}


function insertProduct($conn, $insert) { //insert product baru ke database csv
    list($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m, $n, $o, $p, $q, $r) = $insert;
    $insert_product = "INSERT INTO mytable (`ID`,`TYPE`,`SKU`,`Name`,`Published`,`Is_featured`,`Visibility_in_catalog`,`Short_description`,`Tax_status`,`In_stock`,`Backorders_allowed`,`Sold_individually`,`Allow_customer_reviews`,`Regular_price`,`Categories`,`Position`,`Attribute_1_name`,`Attribute_1_visible`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r')";    
    $query_input = mysql_query($insert_product, $conn);
//     return $query_input;
    header("Location: index.php?sku=".$c."&progress=".$query_input);
}

function newID($conn) { //menambahkan ID baru pada database csv (database csv tidak berformat auto increment
    $sql_last_id = 'SELECT ID from mytable ORDER by ID DESC LIMIT 1 ';
    
    $ambildata = mysql_query($sql_last_id, $conn) or die("Cannot select db.");
    if(!$ambildata ) {
        die('Gagal ambil data: ' . mysql_error());
    }
    
    $check = mysql_fetch_array($ambildata);
    
    $new_id = $check['ID'] + 1;
    return $new_id; 
}

function nextSKU($conn, $category) { //menambah SKU baru sesuai urutan sku yang sudah ada
    $last_sku = getLastSKU($conn, $category);
    $split = explode('-', $last_sku);
    
    if (isset($split[1])) {
        $sku = $split[1];
    } else {
        $sku = $split[0];
    }
    
    $new_sku_num = $sku + 1;
    $digit = count(str_split($new_sku_num));
    
    if ($digit == 1) {
        $new_sku_num = '000'.$new_sku_num;
    } elseif ($digit ==  2) {
        $new_sku_num = '00'.$new_sku_num;
    } elseif ($digit == 3) {
        $new_sku_num = '0'.$new_sku_num;
    } else {
        $new_sku_num = $new_sku_num;
    }
    
    $sku_letter = skuLetter($category); //menggunakan convert kategori ke SKU
    $new_sku = $sku_letter.'-'.$new_sku_num;

    return $new_sku;

}

function skuLetter($category){ //redirect kategori ke SKU
    switch ($category){
        case "accessories":
            return "ACC";
            break;
        case "android tv box":
            return "ATB";
            break;
        case "notebook":
            return "NTB";
            break;
        case "charger kabel data":
            return "CKD";
            break;
        case "casing":
            return "CS";
            break;
        case "earphone":
            return "EP";
            break;
        case "flashdisk":
            return "FDD";
            break;
        case "headset":
            return "HS";
            break;
        case "printer canon":
            return "PCN";
            break;
        case "printer brother":
            return "PBR";
            break;
        case "printer hp":
            return "PHP";
            break;
        case "printer epson":
            return "PEP";
            break;
        case "scanner":
            return "SCN";
            break;
        case "tinta epson original":
            return "TEO";
            break;
        case "tinta canon original":
            return "TCO";
            break;
        case "tinta brother original":
            return "TBO";
            break;
        case "networking brand asus":
            return "NBA";
            break;
        case "networking brand dlink":
            return "NBD";
            break;
        case "networking brand tp-link":
            return "NBT";
            break;
        case "networking brand tenda":
            return "NBTD";
            break;
        case "external hdd 2'5":
            return "EHF";
            break;
        case "external hdd 3'5":
            return "EHN";
            break;
        case "internal hdd 2'5":
            return "IHF";
            break;
        case "internal hdd 3'5":
            return "IHN";
            break;
        case "modem":
            return "MDM";
            break;
        case "ssd":
            return "SSD";
            break;
        case "memory card":
            return "MMC";
            break;
        case "ram":
            return "RAM";
            break;
        case "wireless receiver":
            return "WRC";
            break;
        case "kabel":
            return "KBL";
            break;
        case "ip camera":
            return "IPCM";
            break;
        case "monitor":
            return "MNTR";
            break;
        case "power bank":
            return "PWBK";
            break;
        case "toner":
            return "TNR";
            break;
        case "printer thermal & bluetooth":
            return "PTB";
            break;
        case "projector":
            return "PJT";
            break;
        case "tablet gambar":
            return "TBGR";
            break;
        case "layar projector":
            return "LYPJ";
            break;
        case "speaker":
            return "SPKR";
            break;
        case "gaming peripheral":
            return "GMPL";
            break;
        case "ups & stabilizer":
            return "USTB";
            break;
        case "fingerprint":
            return "FGPR";
            break;
        case "kertas foto":
            return "KSFT";
            break;
        case "tinta refill":
            return "TRFL";
            break;
        case "keyboard & mouse":
            return "KYMS";
            break;
        case "pointer":
            return "PNTR";
            break;
        case "thermal paste":
            return "TMPS";
            break;
        default:
            return "NULL";
    }
}

function directory_check($category) { //membuat folder baru berdasarkan kategori jika belum ada
    
    $dirname = $category;
    $filename = "/images/" . $dirname . "/";
    
    if (!file_exists($filename)) {
        @mkdir("images/" . $dirname, 0777);
    } 
    
    
}

function image_name_cleaner($name) { //menghilangkan garis miring di nama foto
    $matches = preg_replace('/\//', '', $name);
    return $matches;
}

function downloadFile($url, $category, $product_name) { //download image dari tokopedia dan menyimpan di folder images/$category/$filename
    $product_name = image_name_cleaner($product_name); //menggunakan image_name_cleaner()
    
    directory_check($category); //menggunakan directory_check()
    
    $path = 'images/'.$category.'/'.$product_name.'.jpg'; //merangkai path foto di folder
    
    $newfname = $path;
    $file = fopen($url, 'rb');
    if ($file) {
        $newf = fopen($newfname, 'wb');
        if ($newf) {
            while (!feof($file)) {
                fwrite($newf, fread($file, 1024 * 8), 1024 * 8);
            }
        }
    }
    if ($file) {
        fclose($file);
    }
    if ($newf) {
        fclose($newf);
    }
}