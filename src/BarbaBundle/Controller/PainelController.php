<?php

namespace BarbaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PainelController extends Controller {

    /**
     * @Route ("/painel")
     */
    public function indexAction() {
        return $this->render('BarbaBundle:Painel:index.html.twig');
    }

}
