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
$curl->setOpt( CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:63.0) Gecko/20100101 Firefox/63.0");

$html = $curl->get('https://pages.lazada.vn/wow/i/vn/LandingPage/flashsale');

$doc = new Document();
$doc->loadHtml($html);
 

$elements = $doc->find('div[class=sale-title]');
var_dump($elements);die();

for($i = 0;$i < count($elements);++$i){
    $e =  $elements[$i];
    
    echo $e->find('div[class=sale-title]')[0]->find('div[class=sale-title]')[0]->text() . '<br />';
}




?>