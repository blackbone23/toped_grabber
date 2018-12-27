<?php

include("simplehtmldom/simple_html_dom.php");

include ('function.php');



// if (empty($_POST)) {
//     echo "tidak ada data";
// } else {
    
    //var_dump($_POST);
    
//     $category = $_POST['category'];
    
//     $url= $_POST['url'];
    $url= 'https://www.tokopedia.com/megacomponline/audio-spliter?trkid=f=Ca0000L000P0W0S0Sh00Co0Po0Fr0Cb0_src=shop-product_page=1_ob=11_q=_po=1_catid=616';
    
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
    //echo $outputc;
    
    $dom = new simple_html_dom();
    $dom->load($outputc);
    //$input = $dom->find('input[name=__RequestVerificationToken]',0);
    
    
    //var_dump($input->getAttribute('value'));
    
    $input = $dom->find('div[class=content-img] img',0);
    
    $url_image = $input->getAttribute('src');
    
    var_dump($url_image);
    
    $image_file = "images/local_image2.jpg";
    downloadFile($url_image, $image_file);
    
//     $product_name = $input->plaintext;
    
// }
    
?>