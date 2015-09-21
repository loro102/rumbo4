<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends Controller
{
    public function numberAction()
    {
        $number=rand(0,100);
        return new Response(
            '<html><body>Lucky number:'.$number.'</body></html>'
        );
    }
}
