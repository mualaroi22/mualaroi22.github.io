<?php

include 'Curl/CaseInsensitiveArray.php';
include 'Curl/Curl.php';
include 'Curl/MultiCurl.php';

include 'DiDom/Document.php';
include 'DiDom/Element.php';
include 'DiDom/Query.php';

use Curl\Curl;
use DiDom\Document;
use DiDom\Element;

$curl = new Curl();  
$curl->setOpt(CURLOPT_ENCODING , '');
$curl->setOpt(CURLOPT_FAILONERROR, true); 
$curl->setOpt(CURLOPT_FOLLOWLOCATION, true); 
$curl->setOpt(CURLOPT_RETURNTRANSFER, true); 
$curl->setOpt(CURLOPT_SSL_VERIFYHOST, false); 
$curl->setOpt(CURLOPT_SSL_VERIFYPEER, false);  
$curl->setOpt(CURLOPT_ENCODING, ''); 
$curl->setOpt(CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:63.0) Gecko/20100101 Firefox/63.0");
// $curl->setOpt(CURLOPT_REFERER, "https://www.google.com/?gws_rd=ssl");



// var_dump($html);die();

$headers = array();

$headers = "Host: www.sendo.vn";

$headers = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8";
$headers = "Acceot-Language: en-US,en;q=0.5";
$headers = "Connection: keep-alive";
$headers = 'If-None-Match: W/"1d1ad-FM0laNfhSQdyBdi6Pje45/CU9N4"';
$headers = 'Upgrade-Insecure-Requests:1';
$headers = "User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64; rv:56.0) Gecko/20100101 Firefox/56.0";
// $headers = "Cookie: SSID=1pl51e1kvl825j0ot8n2c9fn27; tracking_id=091900966; browserid=4d7d79a5aae3c1faf9a779702fe03055; s_c_id=4d7d79a5aae3c1faf9a779702fe03055%7C%7C%7C; s_c_id_status=return; _gcl_au=1.1.1434283535.1541779307; __utma=147100981.1263628646.1541779307.1541779307.1541779307.1; __utmb=147100981.1.10.1541779307; __utmc=147100981; __utmz=147100981.1541779307.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none); __utmt=1; _ceg.s=phxoiz; _ceg.u=phxoiz; _omappvp=IZT6RhAEHJwDlgn5PIO31uzhzzRY7qasBuLEoI70nO2cWFjX1sXEfLIaIX5oBKS9mIoJ7rWLyZUUOOutIH7wYsL3J8PoWjFq; _omappvs=1541779307390; newWebPush=true; _ga=GA1.2.1263628646.1541779307; _gid=GA1.2.366314806.1541779308; _dc_gtm_UA-32891946-6=1; _fbp=fb.1.1541779311094.932039512";

$curl->setOpt(CURLOPT_HEADER, $headers);
// $curl->setOpt(CURLOPT_HTTPHEADER, $headers);


$html = $curl->get('https://www.sendo.vn/flash-sale/');

// $html = file_get_contents("https://www.sendo.vn/flash-sale/");

$doc = new Document();
$doc->loadHtml($html);


 var_dump($doc);die();

$elements = $doc->find('div[class^=product-item]');


var_dump(count($elements));die();
// var_dump($elements[0]->find('img')[0]->getAttribute('src'));
// echo "<br>";
// var_dump($elements[1]->find('img')[0]->getAttribute('src'));die();

for($i = 0;$i < count($elements)/2;$i++){
	$n = $i*2;
    $e =  $elements[$n];
    
    // echo $e->find('h2')[0]->find('a')[0]->text() . '<br />';
// var_dump($e->find('div[class=product-box-item-inner]')[0]->find('img')[0]->getAttribute('src')[0]);die();
}
?>