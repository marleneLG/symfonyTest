<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * Page d'accueil
     * 
     * @Route('/home', name='home')
     */
    public function home()
    {
        return $this->render('base.html.twig');
    }
}
