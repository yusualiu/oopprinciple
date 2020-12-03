<?php

//Object composition(combining types to build up a more complex objects)
//It is when one class has a pointer to another class where behaviour is located and deferred to.

// and abstraction.

class Subscription
{
  protected Gateway $gateway;//pointer to another class
  public function __construct(Gateway $gateway)
  {
    $this->gateway = $gateway;
  }
  public function create()
  {

  }

  public function cancel()
  {
    //find stripe customer
    $customer = $this->gateway->findCustomer();//Abstraction

  }

  public function invoice()
  {
    
  }

  public function swap($newPlan)
  {
    
  }
}

interface Gateway{
  public function findCustomer();
 

  public function findSubscriptionByCustomer();
  
}

class StripeGateway implements Gateway{
  public function findCustomer()
  {
die('Stripe customer found');
  }

  public function findSubscriptionByCustomer()
  {
    
  }
}

class BraintreeGateway implements Gateway{
  public function findCustomer()
  {

  }

  public function findSubscriptionByCustomer()
  {
    
  }
}


new Subscription(new StripeGateway);