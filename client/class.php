<?php
include '../vendor/autoload.php';
use GuzzleHttp\Client;
use GuzzleHttp\Cookie;
use GuzzleHttp\Pool;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\ClientException;
function new_requests($url,$num){
	$arr=array();
	for($i=0;$i<$num;$i++){
		$arr[$i]=new Request('GET',$url);
	}
	return $arr;
}
function new_pool($client,$requests,$concurrency=500){
	return new Pool($client,$requests,[
    'concurrency' => $concurrency,//并发数
    'fulfilled' => function ($response, $index) {
        // this is delivered each successful response
        echo 'success '.time().PHP_EOL;
    },
    'rejected' => function ($reason, $index) {
        // this is delivered each failed request
        echo 'failure'.PHP_EOL;
    },
]);
}
