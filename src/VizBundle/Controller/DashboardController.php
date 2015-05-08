<?php

namespace VizBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function indexAction()
    {
        return $this->render('VizBundle:Dashboard:index.html.twig');
    }
}
