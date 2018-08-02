<?php

namespace AppBundle\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use AppBundle\Entity\User;

/**
* @Route("/admin", name="admin_")
*/
class AdminController extends BaseAdminController
{
}
