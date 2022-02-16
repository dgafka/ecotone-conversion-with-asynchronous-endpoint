<?php

namespace Ecotone\App\Receiver;

class OrderWasMade
{
    public function __construct(
        public readonly int $orderId,
        public readonly string $order
    ) {}
}