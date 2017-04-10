<?php
namespace ppe3Bundle\Controller;

//1) On ajoute les librairies suivantes :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use \ppe3Bundle\Entity\Utilisateur;

class DefaultController extends Controller {

   //1bis) Ajouter la route(URL) pour executer la méthode indexAction 
   /**
     * @Route("login", name="pagelogin")
     */
public function indexAction(Request $request){          
// Request est une Classe native qui va permettre de gérer un formulaire

//2) création de l'objet $user de type utilisateur.
//   L'objet est vide pour le mement'
$user = new Utilisateur();
    


//3)Utilisation du service Doctrine
/*On utilise le gestionnaire d’entités EntityManager de Doctrine.*/
$em = $this->getDoctrine()->getManager();
//pointer l'entité Utilisateur sur la table Utilisateur
$repository = $em->getRepository('ppe3Bundle:Utilisateur');



//4) Cliquer sur le boutton "Valider" du formaulaire de connexion
  // Récupérer le login et le mot de passe saisi par l'utilisateur
         if ($request->isMethod('POST')) {          // équivalent à if(isset) en php
            $login = $request->get('login');
            $pass = MD5($request->get('password'));     // MD5 permet de crypter le mot de passe

 //5) Verifier avec un var_dump si les données login et pass sont bien récupérées en les affichant dans un tableau
            $tab[0] = $login;
            $tab[1] = $pass;
            var_dump($tab);
            
               
//6) Executer la requête pour vérifier si l'utilisateur existe dans la BDD
//findOneBy  c'est la requete SELECT * FROM Utilisateur where login = $login
// findOneBy retourne 0 ou 1 objet 
//Ici $repository selectionne la Entity Utilisateur associée à la table utilisateur
           
            $user = $repository->findOneBy(array('login' => $login));
            // équivalent de "SELECT * FROM utilisateur WHERE login = $this->$login"

            
            
//7)Afficher le contenu de l'objet $user
             //var_dump($user) ; die ;



//8) Tester si $user est non vide 
if ($user) {

//9) Si oui recupérer le pass de l'objet $user en utilisant getPass()

    		$monPass = $user->getPass();
							
 //10) Tester si le pass saisi est identique au pass de la table utilisateur 
		if ($monPass == $pass) {
		
//11) On ouvre une session on n'utilise plus session_start()		  
		   $session = new Session();

//12) On stocke id, nom, prenom , idRegion et role dans le tableau session
		   $session->set('id', $user->getId());
		   
		   $session->set('nom', $user->getNom());
		   $session->set('prenom', $user->getPrenom());
		   $session->set('idRegion', $user->getIdregion());
		   $session->set('role', $user->getRole());
		 
		   $role = $user->getRole();
//13) Si le role est RH on dirige l'utilisateur vers la liste des regions
			//Le RH qui va gérer les regions
			if ($role == "RH") {
				return $this->redirectToRoute('region');
			}
			//14) Si visiteur on le dirige vers la gestion des voeux
			if ($role == "V") {					
				return $this->redirectToRoute('visiteur');
			}
		} else {
		//15 ) Gestion des erreurs de MDP ou LOGIN
		//MSSG ERREUR MDP
			return $this->render('ppe3Bundle:Default:index.html.twig', 
			           array('nom' => 'Erreur de connexion  MDP!')); 
		}
	} else {
		//MSSG ERREUR LOGIN
		return $this->render('ppe3Bundle:Default:index.html.twig', 
		              array('nom' => 'Erreur de connexion LOGIN !')); 
	}
} else {
	// PAGE D'ACCUEIL
	return $this->render('ppe3Bundle:Default:index.html.twig', 
	                  array('nom' => ''));  

}
}





/**
  * @Route("logout",name="logout")
  */

 public function logoutAction() {
     // Vider la session
     $session = new Session();
     $session->remove("id");
     $session->remove("role");
     
     // Suprime la session
     $session->invalidate();
        
     // Redirection vers indexAction (login)
 return $this->redirectToRoute('pagelogin');
     
 }

}

