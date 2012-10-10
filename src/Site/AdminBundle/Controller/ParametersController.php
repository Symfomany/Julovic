<?php

namespace Site\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Site\AdminBundle\Entity\Articles;
use Site\AdminBundle\Form\SearchType;
use Doctrine\Common\Util\Debug;
use Symfony\Component\HttpFoundation\Request;

/**
 * Params Main
 *
 */
class ParametersController extends Controller {

    public function indexAction() {
        return $this->render('SiteAdminBundle:Params:index.html.twig');
    }

}
