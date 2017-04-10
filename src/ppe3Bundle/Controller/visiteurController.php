<?php

namespace ppe3Bundle\Controller;

// La fonction use sert à appeller une librerie (equivalent du requier_once en php. Permet d'intégrer une Classe dans une autre Classe)
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use \ppe3Bundle\Entity\Utilisateur;

/**
 * Description of visiteurController
 *
 * @author Naamen
 */
class visiteurController extends Controller{
    
    /**
     * 
     * @route ("visiteur", name="visiteur")
     */
    
     public function visiteurAction(Request $request){
         
         return $this->render('default/visiteur.html.twig');         
         
         
     }
    //put your code here
}