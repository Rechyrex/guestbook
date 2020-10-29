<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    /**
     * @Route("/conference", name="conference")
     * @Route("/{name}", name="homepage")
     */
    public function index(string $name = ''): Response
    {
        $greet = '';
        if ($name) {
            $greet = sprintf('<h1>Hello %s!</h1>', \htmlspecialchars($name));
        }
        // dump($request);
        return new Response(<<<EOF
                <html>
                    <body>
                        $greet
                        <img src="/images/megazord.png"/>
                    </body>       
                </html>
            EOF
        );
    }
}
