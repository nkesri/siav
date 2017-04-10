<?php
// Le controleur est ne Classe qui contient une première méthode : indexAction. 
// Index étant le nom de la vue (index.php) et ACTION permet de définir qu'il s'agit d'une Méthode

namespace AppBundle\Controller;

// La fonction use sert à appeller une librerie (equivalent du requier_once en php. Permet d'intégrer une Classe dans une autre Classe)
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller // Classe créé par défaut à l'installation de Symfony. 
//Controler est une Classe mère de Symfony qui va nous donner accès à des méthodes de Symfony
{
    /**
     * @Route("index", name="homepage")
     * La route permet d'aller chercher la méthode.
     * Cette méthode va elle même chercher la vue pour la déployer ur un navigateur
     */
    public function indexAction(Request $request)
    {
        $login ="VILLE";
        $tab =array();
        $j =0;
        
        for($i=5; $i<30; $i++){
            $tab[$j] = $i;
            $j++;
        }
        
        // La fonction render set à ouvrir une vue
        return $this->render('default/index.html.twig', 
                
                // "login" est la variable de la vue twig (langage permettant de construr des vues)
                array("login" => $login, "tab"=> $tab));
       
        
        
        
    }
}
