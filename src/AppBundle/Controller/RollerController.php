<?php

namespace AppBundle\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use AppBundle\Entity\User;

/**
* @Route("/roll", name="roll_")
*/
class RollerController extends BaseAdminController
{
    /**
    * @Route("/dashboard", name="dashboard")
    */
    public function dashboardAction()
    {
	$em = $this->getDoctrine()->getManager();
	$user = $this->getUser();

	return $this->render('eote/dashboard.html.twig', ["user" => $user]);
    }
    
    /**
    * @Route("/board", name="board")
    */
    public function boardAction()
    {
        $blue = $dark = $green = $purple = $yellow = $red = $forcedie = 0;
        
        return $this->render('eote/board.html.twig',
            [
                'dicelist' => [['green', 'yellow', 'blue'], ['purple', 'red', 'dark'], ['force']],
                'blue' => $blue,
                'dark' => $dark,
                'green' => $green,
                'purple' => $purple,
                'red' => $red,
                'yellow' => $yellow,
                'forcedie' => $forcedie,
                'token' => $this->getUser()->getToken(),
            ]);
    }
    
    /**
    * @Route("/viewer", name="viewer")
    */
    public function rollViewerdAction()
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository(User::class)->findAll();

	return $this->render('eote/viewer.html.twig', ["users" => $users]);
    }
}
