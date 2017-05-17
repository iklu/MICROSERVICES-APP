<?php

namespace Application\FrontendBundle\Producer;

use Application\FrontendBundle\Entity\Order;
use OldSound\RabbitMqBundle\RabbitMq\ProducerInterface;

class OrderCreateProducer
{
    private $producer;

    public function __construct(ProducerInterface $producer,  array $routingKeys=[])
    {
        $this->producer = $producer;
        $this->routingKeys = $routingKeys;
    }

    public function add(Order $order)
    {

        $message = [
            'order_id' => $order->getId(),
            'customer_name' => $order->getCustomerName(),
            'car_make' => $order->getCarMake(),
            'car_model' => $order->getCarModel(),
            'timestamp' => date('Y-m-d H:i:s')
        ];

        //single consumer
        //$this->producer->publish(json_encode($message), $this->routingKeys[0]);

        //multiple consumers and the "car_make" is the actual consumer 
        $this->producer->publish(json_encode($message), $message['car_make']);
    }
}