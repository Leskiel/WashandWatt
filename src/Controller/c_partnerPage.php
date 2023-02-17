<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class c_partnerPage extends AbstractController
{
    public function index()
    {
        return $this->render('v_partnerPage.html.twig');
    }
}

?>