<?php

namespace BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Base/Default/index.html.twig');
    }

    public function contactAction()
    {
        return $this->render('@Base/Default/contact.html.twig');
    }

    public function backAction()
    {
        return $this->render('@Base/Default/back.html.twig');

    }
}
