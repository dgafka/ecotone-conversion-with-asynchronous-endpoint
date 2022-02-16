<?php

namespace Ecotone\App;

use Ecotone\Amqp\AmqpBackedMessageChannelBuilder;
use Ecotone\Messaging\Attribute\ServiceContext;
use Ecotone\Messaging\Endpoint\PollingMetadata;

class Configuration
{
    const NOTIFICATION_CHANNEL = "notifications";

    #[ServiceContext]
    public function registerChannel()
    {
        return [
            AmqpBackedMessageChannelBuilder::create(self::NOTIFICATION_CHANNEL),
            PollingMetadata::create(self::NOTIFICATION_CHANNEL)
                ->setHandledMessageLimit(1)
        ];
    }
}