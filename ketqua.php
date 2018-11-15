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
$html = $curl->get('https://ketqua.net/');

$doc = new Document();
$doc->loadHtml($html);
 

$elements = $doc->find('table[id=result_tab_mb]');
$db = $doc->find('td[id=rs_0_0]')[0]->text();

echo "giai dac biet: ".$db."<br />";

$giai_nhat = $doc->find('td[id=rs_1_0]')[0]->text();

echo "giai nhat: ".$giai_nhat."<br />";

$giai_nhi_1 = $doc->find('td[id=rs_2_0]')[0]->text();
$giai_nhi_2 = $doc->find('td[id=rs_2_1]')[0]->text();

echo "giai nhi: ".$giai_nhi_1."&nbsp;".$giai_nhi_2."<br />";

$giai_ba_1 = $doc->find('td[id=rs_3_0]')[0]->text();
$giai_ba_2 = $doc->find('td[id=rs_3_1]')[0]->text();
$giai_ba_3 = $doc->find('td[id=rs_3_2]')[0]->text();
$giai_ba_4 = $doc->find('td[id=rs_3_3]')[0]->text();
$giai_ba_5 = $doc->find('td[id=rs_3_4]')[0]->text();
$giai_ba_6 = $doc->find('td[id=rs_3_5]')[0]->text();

echo "giai ba: ".$giai_ba_1."&nbsp;".$giai_ba_2."&nbsp;".$giai_ba_3."<br />";

$giai_tu_1 = $doc->find('td[id=rs_4_0]')[0]->text();
$giai_tu_2 = $doc->find('td[id=rs_4_1]')[0]->text();
$giai_tu_3 = $doc->find('td[id=rs_4_2]')[0]->text();
$giai_tu_4 = $doc->find('td[id=rs_4_3]')[0]->text();

echo "giai tu: ".$giai_tu_1."&nbsp;".$giai_tu_2."&nbsp;".$giai_tu_3."&nbsp;".$giai_tu_4."<br />";

$giai_nam_1 = $doc->find('td[id=rs_5_0]')[0]->text();
$giai_nam_2 = $doc->find('td[id=rs_5_1]')[0]->text();
$giai_nam_3 = $doc->find('td[id=rs_5_2]')[0]->text();
$giai_nam_4 = $doc->find('td[id=rs_5_3]')[0]->text();
$giai_nam_5 = $doc->find('td[id=rs_5_4]')[0]->text();
$giai_nam_6 = $doc->find('td[id=rs_5_5]')[0]->text();

echo "giai nam: ".$giai_nam_1."&nbsp;".$giai_nam_2."&nbsp;".$giai_nam_3."&nbsp;".$giai_nam_4."&nbsp;".$giai_nam_5."&nbsp;".$giai_nam_6."<br />";

$giai_sau_1 = $doc->find('td[id=rs_6_0]')[0]->text();
$giai_sau_2 = $doc->find('td[id=rs_6_1]')[0]->text();
$giai_sau_3 = $doc->find('td[id=rs_6_2]')[0]->text();

echo "giai sau: ".$giai_sau_1."&nbsp;".$giai_sau_2."&nbsp;".$giai_sau_3."<br />";

$giai_bay_1 = $doc->find('td[id=rs_7_0]')[0]->text();
$giai_bay_2 = $doc->find('td[id=rs_7_1]')[0]->text();
$giai_bay_3 = $doc->find('td[id=rs_7_2]')[0]->text();
$giai_bay_4 = $doc->find('td[id=rs_7_3]')[0]->text();

echo "giai bay: ".$giai_bay_1."&nbsp;".$giai_bay_2."&nbsp;".$giai_bay_3."&nbsp;".$giai_bay_4."<br />";


?>