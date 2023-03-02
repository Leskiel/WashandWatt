<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class c_becomePartnerPage extends AbstractController
{
    public function index()
    {
        return $this->render('v_becomePartnerPage.html.twig');
    }
}

?>