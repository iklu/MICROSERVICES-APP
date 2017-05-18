<?php

namespace Application\FrontendBundle\Controller;

use Application\FrontendBundle\Service\OrderService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("order", service="application_frontend.controller.order")
 */
class OrderController
{
    private $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    /**
     * @param Request $request
     *
     * @Method({"POST"})
     * @Route("/create")
     *
     * @return Response
     */
    public function createAction(Request $request)
    {

        $result = $this->orderService->create(json_decode($request->getContent(), true));

        // $process = new Process('php bin/console hello:word');
        // $process->start();

        return new Response($result);
    }
}