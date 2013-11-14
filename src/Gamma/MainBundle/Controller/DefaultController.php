<?php

namespace Gamma\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GammaMainBundle:Default:index.html.twig', array());
    }
    
    public function aboutAction()
    {
    	return $this->render('GammaMainBundle:Default:about.html.twig', array());
    }    
}
