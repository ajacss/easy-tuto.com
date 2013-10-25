<?php

namespace intratubeo\Bundle\AuthenticationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="Authentification")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
