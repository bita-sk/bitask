<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController
{

    /**
     * @Route("/")
     * @return Response
     */
    public function homepage()
    {
        return new Response('Bitask');
    }

}