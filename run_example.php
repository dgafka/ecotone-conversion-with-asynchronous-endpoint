<?php

use Ecotone\App\Configuration;
use Ecotone\App\Publisher\PlaceOrder;
use Ecotone\Lite\EcotoneLiteApplication;
use Enqueue\AmqpExt\AmqpConnectionFactory;

require __DIR__ . "/vendor/autoload.php";

$application = EcotoneLiteApplication::boostrap([AmqpConnectionFactory::class => new AmqpConnectionFactory("amqp://guest:guest@rabbitmq:5672//")]);

$application->getCommandBus()->send(new PlaceOrder(1, "Milk"));

echo "Receiving event under different class name:\n";
$application->run(Configuration::NOTIFICATION_CHANNEL);