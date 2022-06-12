<?php

namespace App\Controller;

use App\Controller\AbstractAppController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EventsController extends AbstractAppController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(): Response
    {
        return new Response("Connected!");
    }
}
