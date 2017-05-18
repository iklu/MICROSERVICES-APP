<?php

namespace Application\InfrastructureBundle\Event;

class OnConsumeEvent extends AMQPEvent
{
    const NAME = AMQPEvent::ON_CONSUME;

    /**
     * OnConsumeEvent constructor.
     *
     * @param Consumer $consumer
     */
    public function __construct(Consumer $consumer)
    {
        $this->setConsumer($consumer);
    }
}