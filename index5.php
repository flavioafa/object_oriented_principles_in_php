<?php

interface Newsletter
{
    public function subscrible($email);
}

class CampaignMonitor implements Newsletter
{
    public function subscrible($email)
    {
        die('Subscribring with Campaign Monitor');
    }
}

class Drip implements Newsletter
{
    public function subscrible($email)
    {
        die('Subscribring with Drip');
    }
}

class NewsLetterSubscriptionsController
{
    public function store(Newsletter $newsletter)
    {
        $email = 'john@example.com';

        $newsletter->subscrible($email);
    }
}

$controller = new NewsLetterSubscriptionsController();

$controller->store(new CampaignMonitor());