<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * Route("/{_locale}/bb", name="bb", defaults={"_locale" = "fr"}, requirements={"_locale" = "en|fr"})
     * @Route("/bb")
     */
    public function bbAction(Request $request)
    {
	return $this->render('bb/clock.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
