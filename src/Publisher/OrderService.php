<?php

namespace Ecotone\App\Publisher;

use Ecotone\Modelling\Attribute\CommandHandler;
use Ecotone\Modelling\EventBus;

class OrderService
{
    #[CommandHandler]
    public function placeOrder(PlaceOrder $command, EventBus $eventBus): void
    {
        echo "Order with id {$command->orderId} was placed.\n";
        $eventBus->publish(new OrderWasPlaced($command->orderId, $command->order));
    }
}