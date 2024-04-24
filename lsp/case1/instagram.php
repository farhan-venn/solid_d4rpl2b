<?php

namespace socialmedia;

require_once 'C:\laragon\www\solid_d4rpl2b\lsp\case1\socialmedia.php';
require_once 'C:\laragon\www\solid_d4rpl2b\lsp\case1\postmediavideo.php';

class Instagram implements \SocialMedia, \PostMediaManager
{
    public function chat(): void
    {
        echo "Chatting on Instagram...\n";
    }

    public function sendPhotosAndVideos(): void
    {
        echo "Sending photos and videos on Instagram...\n";
    }

    public function publishPost(): void
    {
        echo "Publishing post on Instagram...\n";
    }
}