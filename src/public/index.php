<?php
declare(strict_types=1);
require_once '../AppAutoload/PaymentGateway/Stripe/Transaction.php';
require_once '../AppAutoload/PaymentGateway/Stripe/CustomerProfile.php';
require_once '../AppAutoload/Notification/Email.php';

use AppAutoload\PaymentGateway\Stripe\{Transaction, CustomerProfile};
//$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;
//define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
//define('FILE_PATH', $root . '[TBD]' . DIRECTORY_SEPARATOR);
//define('VIEWS_PATH', $root . '[TBD]' . DIRECTORY_SEPARATOR);


var_dump(new Transaction(), new CustomerProfile());
?>