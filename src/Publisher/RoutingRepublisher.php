<?php

namespace Ecotone\App\Publisher;

use Ecotone\Modelling\Attribute\EventHandler;
use Ecotone\Modelling\EventBus;

class RoutingRepublisher
{
    private const mapping = [
        OrderWasPlaced::class => OrderWasPlaced::EVENT_NAME
    ];

    #[EventHandler]
    public function republishByRoutingName(object $event, EventBus $eventBus): void
    {
        $eventBus->publishWithRouting(self::mapping[$event::class], $event);
    }
}