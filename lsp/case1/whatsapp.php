<?php

namespace socialmedia;

require_once 'C:\laragon\www\solid_d4rpl2b\lsp\case1\socialmedia.php';
require_once 'C:\laragon\www\solid_d4rpl2b\lsp\case1\videogroupmanager.php';

class WhatsApp implements \SocialMedia, \VideoGroupManager
{
    public function chat(): void
    {
        echo "Chatting on WhatsApp...\n";
    }

    public function sendPhotosAndVideos(): void
    {
        echo "Sending photos and videos on WhatsApp...\n";
    }

    public function callGroupVideo(): void
    {
        echo "Calling group video on WhatsApp...\n";
    }
}