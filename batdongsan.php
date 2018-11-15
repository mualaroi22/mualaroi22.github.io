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
$html = $curl->get('https://batdongsan.com.vn/cho-thue-can-ho-chung-cu');

$doc = new Document();
$doc->loadHtml($html);

// var_dump($doc);die(); 

$elements = $doc->find('div[class=Main]')[0]->find('div[class^=vip0]');
// var_dump($elements);


// var_dump(count($elements));die();
// var_dump($elements[0]->find('img')[0]->getAttribute('src'));
// echo "<br>";
// var_dump($elements[1]->find('img')[0]->getAttribute('src'));die();

for($i = 0;$i < count($elements);$i++){
    $e =  $elements[$i];
    
    echo $e->find('div[class=p-title]')[0]->find('h3')[0]->find('a')[0]->text(). '<br />';
}




?>