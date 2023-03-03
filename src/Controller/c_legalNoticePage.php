<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class c_legalNoticePage extends AbstractController
{
    public function index()
    {
        return $this->render('v_legalNoticePage.html.twig');
    }
}

?>