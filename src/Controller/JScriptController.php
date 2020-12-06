<?php
// src/Controller/JScriptController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class JScriptController extends AbstractController
{
    /**
      * @Route("/JScript")
      */
    public function number(): Response
    {
        $number = 1;

        return new Response(
            '<html><body>Java Script testing: '.$number.'</body></html>'
        );
    }
}