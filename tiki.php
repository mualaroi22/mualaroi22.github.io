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
$html = $curl->get('https://tiki.vn/lp/flash-sales');

$doc = new Document();
$doc->loadHtml($html);

// var_dump($doc);die(); 

$elements = $doc->find('div[id=thoi-trang]')[0]->find('div[class*=box1]')[0]->find('div[class*=product-box-item]');

// var_dump(count($elements));die();
// var_dump($elements[0]->find('img')[0]->getAttribute('src'));
// echo "<br>";
// var_dump($elements[1]->find('img')[0]->getAttribute('src'));die();

for($i = 0;$i < count($elements)/2;$i++){
	$n = $i*2;
    $e =  $elements[$n];
    
    // echo $e->find('h2')[0]->find('a')[0]->text() . '<br />';
// var_dump($e->find('div[class=product-box-item-inner]')[0]->find('img')[0]->getAttribute('src')[0]);die();
    echo $e->find('div[class=product-box-item-inner]')[0]->find('div[class=deal-info]')[0]->find('div[class=deal-info_name]')[0]->find('p[class=name]')[0]->find('a')[0]->text(). '<br />';
    echo $e->find('div[class=product-box-item-inner]')[0]->find('span[class=sale-tag]')[0]->text(). '<br />';
    // echo $e->find('div[class=product-box-item-inner]')[0]->find('img')[0]->getAttribute('src'). '<br />';
    echo '<img class="img-responsive" src="'.$e->find('div[class=product-box-item-inner]')[0]->find('img')[0]->getAttribute('src').'" alt="Đồng Hồ Nữ Dây Da Daniel Wellington 0951DW 34mm - Màu Trắng (Hàng Nhập Khẩu)">';
    echo $e->find('div[class=product-box-item-inner]')[0]->find('span[class=price-regular]')[0]->text(). '<br />';
    echo $e->find('div[class=product-box-item-inner]')[0]->find('div[class=deal-info_detail]')[0]->find('span')[1]->text(). '<br />';
    echo $e->find('div[class=product-box-item-inner]')[0]->find('div[class=remain]')[0]->text(). '<br />';
    echo $e->find('div[class=product-box-item-inner]')[0]->find('p[class=buycta]')[0]->text(). '<br />';
}
?>