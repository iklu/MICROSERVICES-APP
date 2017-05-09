<?php

namespace Application\FrontendBundle\EventListener;

use Application\FrontendBundle\Event\OrderEvent;
use Application\FrontendBundle\Producer\OrderCreateProducer;
use Symfony\Component\HttpKernel\Log\LoggerInterface;

class OrderListener
{
    private $orderCreateProducer;

    public function __construct(
        OrderCreateProducer $orderCreateProducer
    ) {
        $this->orderCreateProducer = $orderCreateProducer;
    }

    public function onOrderCreate(OrderEvent $orderEvent)
    {
        $this->orderCreateProducer->add($orderEvent->getOrder());

        $orderEvent->stopPropagation();
    }
}