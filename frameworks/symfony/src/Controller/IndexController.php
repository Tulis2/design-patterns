<?php


namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends AbstractAppController
{
    /**
     * @Route("/", defaults={"_locale"="en"}, name="index")
     * @return Response
     */
    public function index()
    {
        $this->setTitle('Главная');

        return $this->render('@tmpl/index.html.twig', $this->getRenderParams());
    }
}