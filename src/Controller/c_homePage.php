<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class c_homePage extends AbstractController
{
    public function index()
    {
        return $this->render('v_homePage.html.twig');
    }
}

?>