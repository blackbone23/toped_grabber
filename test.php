<?php

include("simplehtmldom/simple_html_dom.php");

include ('function.php');

if (empty($_POST)) {
    echo "tidak ada data";
} else {
    
    $category = $_POST['category'];
    
    $url= $_POST['url'];
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Accepts all CAs
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_URL, $url);
    // curl_setopt($ch, CURLOPT_POST, 4);
    // curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
    // curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie); //Uses cookies from the temp file
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // Tells cURL to follow redirects
    //curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_ENCODING,"");
    //curl_setopt($ch, CURLOPT_REFERER,"https://skb.atrbpn.go.id/Account/Index?ReturnUrl=%2f");
    
    $outputc = curl_exec($ch);
    
    $dom = new simple_html_dom();
    $dom->load($outputc);
    
    $input = $dom->find('span[itemprop=name]',0);
    
    $product_name = $input->plaintext; //get nama produk    
    
    $input2 = $dom->find('span[itemprop=price]',0);
    
    $product_price = $input2->getAttribute('content'); //get harga produk
    
    
    $input3 = $dom->find('div[itemprop=description]',0);
    
    $product_desc = htmlentities($input3->innertext); //get deskripsi singkat produk
    
    $input4 = $dom->find('div[class=content-img] img',0);
    
    $url_image = $input4->getAttribute('src'); //get url dari gambar
    
    
    
    
   
    $next_sku = nextSKU($conn, $category); //setup SKU baru 
    
    $new_id = newID($conn); //setup ID baru di database csv
    
    $type = "simple";
    
    $published = 1;
    
    $is_featured = false;
    
    $visibility = "visible";
    
    $tax_status = "taxable";
    
    $in_stock = 1;
    
    $backorder = false;
    
    $individually = false;
    
    $allow_review = false;
    
    $possition = false;
    
    $attribute_1_name = "url_tokopedia";
    
    $attribute_1_visible = false;
    
    $insert = array($new_id, $type, $next_sku, $product_name, $published, $is_featured, $visibility, $product_desc, $tax_status, $in_stock, $backorder, $individually, $allow_review, $product_price, $category, $possition, $attribute_1_name, $attribute_1_visible);

    
    //***cek jika produk belum pernah diinput
    product_checker($conn, $product_name);
    
    
    //***setup insert product image    
    downloadFile($url_image, $category, $product_name); //download file foto
    
    
    //***insert product to csv database
   var_dump(insertProduct($conn, $insert)); //insert product ke database csv
   
    
}




?>