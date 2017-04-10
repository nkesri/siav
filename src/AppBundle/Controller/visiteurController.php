<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

// La fonction use sert à appeller une librerie (equivalent du requier_once en php. Permet d'intégrer une Classe dans une autre Classe)
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Description of visiteurController
 *
 * @author Naamen
 */
class visiteurController extends Controller{
    
    /**
     * 
     * @route ("visiteur", name="page_visiteur")
     */
    
     public function visiteurAction(Request $request){
         
         return $this->render('default/visiteur.html.twig');         
         
         
     }
    //put your code here
}
