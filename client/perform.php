<?php
include 'class.php';
use GuzzleHttp\Client;
use GuzzleHttp\Cookie;
use GuzzleHttp\Pool;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\ClientException;
set_time_limit(0);
while(true){
$requests=new_requests('http://localhost/test/han/phpddos/tests/test.php?id=1', 10);//生成请求数量
$c=new Client();
$pinkie=[];
for($i=0;$i<10;$i++){
	$pinkie[]=new_pool($c, $requests);
	echo 'create'.$i.PHP_EOL;
}
$promise=[];
for($i=0;$i<count($pinkie);$i++){
	$promise[]=$pinkie[$i]->promise();
}
for($i=0;$i<count($promise);$i++){
	$promise[$i]->wait();
}
}