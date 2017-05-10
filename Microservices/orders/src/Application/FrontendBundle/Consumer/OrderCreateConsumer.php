<?php

namespace Application\FrontendBundle\Consumer;

use Application\FrontendBundle\Entity\OrderLog;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use OldSound\RabbitMqBundle\RabbitMq\ConsumerInterface;
use PhpAmqpLib\Message\AMQPMessage;
//use Symfony\Component\HttpKernel\Log\LoggerInterface;

class OrderCreateConsumer implements ConsumerInterface
{
    private $entityManager;
    private $logger;

    public function __construct(
        EntityManagerInterface $entityManager
        // LoggerInterface $logger
    ) {
        $this->entityManager = $entityManager;
        //$this->logger = $logger;
    }

    public function execute(AMQPMessage $message)
    {
        $body = json_decode($message->body, true);

        try {
            $this->log($body);

            echo sprintf('Order create - ID:%s @ %s ...', $body['order_id'], date('Y-m-d H:i:s')).PHP_EOL;
        } catch (Exception $e) {
           // $this->logError($message, $e->getMessage());
        }
    }

    private function log($message)
    {
        $log = new OrderLog();
        $log->setAction(OrderLog::CREATE);
        $log->setMessage($message);

        $this->entityManager->persist($log);
        $this->entityManager->flush();
    }

    private function logError($message, $error)
    {
        $data = [
            'error' => $error,
            'class' => __CLASS__,
            'message' => $message
        ];

        $this->logger->error(json_encode($data));
    }
}