<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Laasti\Controllers;

use Symfony\Component\HttpFoundation\Response;

/**
 * Description of HelloWorld
 *
 * @author Sonia
 */
class HelloWorld
{
    

    public function output()
    {
        $response = new Response();
      
        $response->setContent('Hello World!');
        
        return $response;
    }
    
    public function hello($name)
    {           
        $response = new Response();
        $response->setContent(sprintf('Hello %s!', $name));
        
        return $response;
    }
    

}