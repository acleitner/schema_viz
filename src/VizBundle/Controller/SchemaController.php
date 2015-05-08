<?php

namespace VizBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SchemaController extends Controller
{
    public function newAction()
    {
        return $this->render('VizBundle:Dashboard:index.html.twig');
    }
}
