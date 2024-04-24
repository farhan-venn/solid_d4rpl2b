<?php

require_once 'C:\laragon\www\solid_d4rpl2b\lsp\case1\whatsapp.php';
require_once 'C:\laragon\www\solid_d4rpl2b\lsp\case1\instagram.php';

use SocialMedia\WhatsApp;
use SocialMedia\Instagram;

$whatsapp = new WhatsApp();
$instagram = new Instagram();

echo "WhatsApp Actions:\n";
$whatsapp->chat();
$whatsapp->sendPhotosAndVideos();
$whatsapp->callGroupVideo();

echo "\nInstagram Actions:\n";
$instagram->chat();
$instagram->sendPhotosAndVideos();
$instagram->publishPost();