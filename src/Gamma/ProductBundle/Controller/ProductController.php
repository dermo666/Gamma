<?php

namespace Gamma\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductController extends Controller
{
    public function indexAction()
    {
    	$data = array(
    		array('name' => 'Brand Name 1', 'type' => 'Product 1', 'price' => '111.00'),
    		array('name' => 'Brand Name 1', 'type' => 'Product 2', 'price' => '222.00'),
    		array('name' => 'Brand Name 1', 'type' => 'Product 3', 'price' => '333.00'),
    		array('name' => 'Brand Name 1', 'type' => 'Product 4', 'price' => '444.00'),
    		array('name' => 'Brand Name 2', 'type' => 'Product 5', 'price' => '555.00'),
    		array('name' => 'Brand Name 2', 'type' => 'Product 6', 'price' => '666.00'),
    		array('name' => 'Brand Name 4', 'type' => 'Product 7', 'price' => '777.00'),    			
    	);
    	
        return $this->render('GammaProductBundle:Product:index.html.twig', array('data' => $data));
    }
}
