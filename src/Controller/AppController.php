<?php

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route;

class AppController
{

    /**
     * @Route("/")
     * @Template("bitask/homepage.html.twig")
     * @return array
     */
    public function homepage()
    {
        return [
            "title" => ""
        ];
    }

}