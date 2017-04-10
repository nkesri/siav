<?php


namespace ppe3Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use \ppe3Bundle\Entity\Utilisateur;
/**
 * Description of RegionController
 *
 * @author Naamen
 */
class RegionController extends Controller{
   
     /**
     * @Route("region", name="region")
     */
    
    public function regionAction(Request $request){
    
   /*  $repository=$this->getDoctrine()->getManager()>getRepository('ppe3Bundle:Region');   
     $regions = $repository->findAll(); */
        
   // Pointer la table region associé à la Classe Region
        // getDoctrine pour activer la bibliothèque de Classe native Symfony
        // getManager pour activer la methode getManager de Doctrine
        // getRepository est une méthode qui pemet de pointer la classe associée à la Classe Region
  // $depot = $this->getDoctrine()->getManager()->getRepository('ppe3Bundle:Region');

        $d = $this->getDoctrine();
        $m = $d->getManager();
        $depot = $m->getRepository('ppe3Bundle:Region');
        
        // findAll() équivaut à SELECT * FROM region mais en passant par des méthoses successives        
        $lesRegions = $depot->findAll();   
        
    return $this->render('ppe3Bundle:Region:region.html.twig', array("lesRegions"=>$lesRegions));
    }

    
    
    
    //La route(URL) pour executer la mise à jour les palces dispo d'une région

/**
 * @Route("/updateRegion/{id}", name=" updateRegion ")
 */
public function updateRegionAction($id, Request $request) {
	 //EntityManager de doctrine
	$repository = $this->getDoctrine()
			->getEntityManager()
	 //Selectionner l'entite
			->getRepository('ppe3Bundle:Region');
	//findAll = select * from region
	$lesRegions = $repository->findAll();

    
}
}