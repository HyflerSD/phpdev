<?php
declare(strict_types=1);
namespace AppAutoload\PaymentGateway\Stripe;
use AppAutoload\Notification\Email;
class Transaction
{
    public function __construct()
    {
        var_dump(new Email());
    }

}