<?php

namespace Ecotone\App\Receiver;

use Ecotone\App\Configuration;
use Ecotone\App\Publisher\OrderWasPlaced;
use Ecotone\Messaging\Attribute\Asynchronous;
use Ecotone\Modelling\Attribute\EventHandler;

class EmailSender
{
    #[Asynchronous(Configuration::NOTIFICATION_CHANNEL)]
    #[EventHandler(OrderWasPlaced::EVENT_NAME, "emailSender")]
    public function sendNotificationWhen(OrderWasMade $event): void
    {
        // the class is different, however Ecotone can deserialize to it.

        echo "Email was sent for order with id " . $event->orderId . " was placed for " . $event->order . "\n";
    }
}