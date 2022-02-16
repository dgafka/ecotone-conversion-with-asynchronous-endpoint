<?php

namespace Ecotone\App\Publisher;

use Ecotone\Modelling\Attribute\NamedEvent;

#[NamedEvent(self::EVENT_NAME)]
class OrderWasPlaced
{
    const EVENT_NAME = "order.was.placed";

    public function __construct(
        public readonly int $orderId,
        public readonly string $order
    ) {}
}