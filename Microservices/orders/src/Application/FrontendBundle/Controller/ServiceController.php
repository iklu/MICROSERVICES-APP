<?php

namespace Application\FrontendBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

/**
 * @Route("service", service="application_frontend.controller.service")
 */
class ServiceController
{

    /**
     * @param Request $request
     *
     * @Method({"POST"})
     * @Route("/start")
     *
     * @return Response
     */
    public function startAction(Request $request)
    {

        $process = new Process('cd .. & php bin/console rabbitmq:consumer prepare_order_audi_mercedes');
        $process->run();

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        return new Response($process->getOutput());
    }
}