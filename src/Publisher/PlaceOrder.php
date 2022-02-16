<?php

namespace Ecotone\App\Publisher;

class PlaceOrder
{
    public function __construct(
        public readonly int $orderId,
        public readonly string $order
    ) {}
}