<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class c_about extends AbstractController
{
    public function index()
    {
        return $this->render('v_about.html.twig');
    }
}

?>