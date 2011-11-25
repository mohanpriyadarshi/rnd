<?php
dsd
#Input like stdin
$han=fopen("php://stdin",r) ;
$urlr=fgets($han) ;
print "$urlr \n";
$url=urlencode($urlr);
print "$url \n";
$urld=urldecode($url);
print "$urld \n";
#Input like stdin
$urlp=curl_init($url) ;
#curl_setopt($urlp, CURLOPT_RETURNTRANSFER, 1);
$page=curl_exec($urlp);
print "$page \t ok \n";
?>
