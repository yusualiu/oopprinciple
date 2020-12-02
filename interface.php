<?php
// An interface is a class without behaviour, only method signatures.
//It does not care about what is happening in other classess as long as you expose the method signature when implementing it.
interface Newsletter
{
  public function subscribe($email);
}

class CampaignMonitor implements Newsletter
{
  public function subscribe($email){
    die('subscribing with campaign monitor');
  }
}

class Drip implements Newsletter
{
  public function subscribe($email){
    die('subscribing with drip');
  }
}


class NewsletterSubscriptionController
{
  public function store($newsletter)
  {
    $email = 'jfway@yahoo.com';
    $newsletter->subscribe($email);
  }
}

$controller = new NewsletterSubscriptionController;

$controller->store(new CampaignMonitor());