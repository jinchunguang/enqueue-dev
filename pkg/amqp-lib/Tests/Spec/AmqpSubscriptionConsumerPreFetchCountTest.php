<?php

namespace Enqueue\AmqpLib\Tests\Spec;

use Enqueue\AmqpLib\AmqpConnectionFactory;
use Interop\Amqp\AmqpContext;
use Interop\Queue\Spec\Amqp\SubscriptionConsumerPreFetchCountSpec;

/**
 * @group functional
 */
class AmqpSubscriptionConsumerPreFetchCountTest extends SubscriptionConsumerPreFetchCountSpec
{
    protected function createContext(): AmqpContext
    {
        $factory = new AmqpConnectionFactory(getenv('AMQP_DSN'));

        return $factory->createContext();
    }
}
