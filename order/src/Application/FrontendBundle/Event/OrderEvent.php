<?php

namespace Application\FrontendBundle\Event;

use Application\FrontendBundle\Entity\Order;
use Symfony\Component\EventDispatcher\Event;

class OrderEvent extends Event
{
    const CREATE = 'application_frontend.event.order_create';

    private $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function getOrder()
    {
        return $this->order;
    }
}