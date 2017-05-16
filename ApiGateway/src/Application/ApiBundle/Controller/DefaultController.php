<?php

namespace Application\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Application\ApiBundle\Util\ApiResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function getTokenAction(Request $request)
    {
    	$loginData["message"] = "ok";
    	$loginData["status"] = 200;

        return ApiResponse::setResponse($loginData["message"], $loginData["status"]);
    }
}
