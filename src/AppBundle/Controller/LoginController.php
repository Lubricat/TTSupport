<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use AppBundle\Entity\User;

class LoginController extends Controller
{
    /**
    * @Route("/", name="homepage")
    */
    public function homeAction()
    {
        $exception = $this->get('security.authentication_utils')
            ->getLastAuthenticationError();

	return $this->render('default/index.html.twig', [
            'error' => $exception ? $exception->getMessage() : NULL,
	    'urls' => ['BB scoreboard' => $this->generateUrl('app_default_bb'),
	    	'Star Wars' => $this->generateUrl('roll_dashboard'),
	    ]
        ]);
    }
    
    /**
    * @Route("/logout", name="logout")
    */
    public function logoutAction()
    {
        return $this->redirectToRoute('login');
    }
    
    /**
    * @Route("/login", name="login")
    */
    public function loginAction()
    {
        $exception = $this->get('security.authentication_utils')
            ->getLastAuthenticationError();
        
        $response = $this->render('authentication/login.html.twig', [
            'error' => $exception ? $exception->getMessage() : NULL
        ]);
        
        return $response;
    }
    
    /**
    * @Route("/create", name="create")
    */
    public function createAction()
    {
/*
        $em = $this->getDoctrine()->getManager();
            
        $user = new User();
        $user->setUsername("erwan");
            
        $encoder = $this->get('security.password_encoder');
        $encoded = $encoder->encodePassword($user, "plop123");
        $user->setPassword($encoded);
        $user->setRoles(["ROLE_ADMIN"]);

        $em->persist($user);
        $em->flush();
        
        return new Response($user->getId());
*/
    }
}
