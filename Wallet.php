<?php

namespace Strategy;

// TODO: Implement Wallet Class
class Wallet implements PaymentStrategy{

    private $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function pay($price)
    {
        if ($price <= $this->amount){
            echo "Paying $price using Wallet";
        }else{
           echo "Wallet: Insufficient inventory!";
        }
    }

    public function addAmount($amount){
        $this->amount += $amount;
    }

    public function getAmount(){
        return $this->amount;
    }

}