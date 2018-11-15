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
$html = $curl->get('https://www.minhngoc.net.vn/xo-so-truc-tiep/mien-bac.html');

$doc = new Document();
$doc->loadHtml($html);
 
$db = $doc->find('div[id=giaidb_48]')[0]->text();

echo "giai dac biet: ".$db."<br />";

$giai_nhat = $doc->find('div[id=giai1_48]')[0]->text();

echo "giai nhat: ".$giai_nhat."<br />";

$giai_nhi_1 = $doc->find('div[id=giai2_1_48]')[0]->text();
$giai_nhi_2 = $doc->find('div[id=giai2_2_48]')[0]->text();

echo "giai nhi: ".$giai_nhi_1."&nbsp;".$giai_nhi_2."<br />";

$giai_ba_1 = $doc->find('div[id=giai3_1_48]')[0]->text();
$giai_ba_2 = $doc->find('div[id=giai3_2_48]')[0]->text();
$giai_ba_3 = $doc->find('div[id=giai3_3_48]')[0]->text();
$giai_ba_4 = $doc->find('div[id=giai3_4_48]')[0]->text();
$giai_ba_5 = $doc->find('div[id=giai3_5_48]')[0]->text();
$giai_ba_6 = $doc->find('div[id=giai3_6_48]')[0]->text();

echo "giai ba: ".$giai_ba_1."&nbsp;".$giai_ba_2."&nbsp;".$giai_ba_3."&nbsp;".$giai_ba_4."&nbsp;".$giai_ba_5."&nbsp;".$giai_ba_6."<br />";

$giai_tu_1 = $doc->find('div[id=giai4_1_48]')[0]->text();
$giai_tu_2 = $doc->find('div[id=giai4_2_48]')[0]->text();
$giai_tu_3 = $doc->find('div[id=giai4_3_48]')[0]->text();
$giai_tu_4 = $doc->find('div[id=giai4_4_48]')[0]->text();

echo "giai tu: ".$giai_tu_1."&nbsp;".$giai_tu_2."&nbsp;".$giai_tu_3."&nbsp;".$giai_tu_4."<br />";

$giai_nam_1 = $doc->find('div[id=giai5_1_48]')[0]->text();
$giai_nam_2 = $doc->find('div[id=giai5_2_48]')[0]->text();
$giai_nam_3 = $doc->find('div[id=giai5_3_48]')[0]->text();
$giai_nam_4 = $doc->find('div[id=giai5_4_48]')[0]->text();
$giai_nam_5 = $doc->find('div[id=giai5_5_48]')[0]->text();
$giai_nam_6 = $doc->find('div[id=giai5_6_48]')[0]->text();

echo "giai nam: ".$giai_nam_1."&nbsp;".$giai_nam_2."&nbsp;".$giai_nam_3."&nbsp;".$giai_nam_4."&nbsp;".$giai_nam_5."&nbsp;".$giai_nam_6."<br />";

$giai_sau_1 = $doc->find('div[id=giai6_1_48]')[0]->text();
$giai_sau_2 = $doc->find('div[id=giai6_2_48]')[0]->text();
$giai_sau_3 = $doc->find('div[id=giai6_3_48]')[0]->text();

echo "giai sau: ".$giai_sau_1."&nbsp;".$giai_sau_2."&nbsp;".$giai_sau_3."<br />";

$giai_bay_1 = $doc->find('div[id=giai7_1_48]')[0]->text();
$giai_bay_2 = $doc->find('div[id=giai7_2_48]')[0]->text();
$giai_bay_3 = $doc->find('div[id=giai7_3_48]')[0]->text();
$giai_bay_4 = $doc->find('div[id=giai7_4_48]')[0]->text();

echo "giai bay: ".$giai_bay_1."&nbsp;".$giai_bay_2."&nbsp;".$giai_bay_3."&nbsp;".$giai_bay_4."<br />";


?>