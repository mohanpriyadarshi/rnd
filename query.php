<?php
$url="http://query.yahooapis.com/v1/public/yql?q=";
$handle=fopen("php://stdin",r);
$queryr=fgets($handle);
$query=urlencode($queryr);
$urlq="$url"."$query";
print "$urlq \n";
$call=curl_init($urlq);
$page=curl_exec($call);
print "page \n" ;
?>
