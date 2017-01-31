<?php

namespace Yann\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('YannCoreBundle:Default:index.html.twig');
    }
}
