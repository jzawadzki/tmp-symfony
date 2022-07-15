<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route(path: '/test-route', name: 'test-route-name', methods: ['POST'])]
    public function doSth(): JsonResponse
    {
        return new JsonResponse('',Response::HTTP_OK);
    }
}
