<?php
declare(strict_types=1);
use AppAutoload\PaymentGateway\Stripe\{Transaction, CustomerProfile};


require __DIR__  . '/../vendor/autoload.php';
$id = new \Ramsey\Uuid\UuidFactory();
echo $id->uuid4();
var_dump(new Transaction());