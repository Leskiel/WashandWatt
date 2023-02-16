<?php
//php -S 127.0.0.1:8000 -t public
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Home extends AbstractController
{
    public function number()
    {
        $number = random_int(0, 100);
        return $this->render(
            'Home/index.html.twig',
            [
                'number' => $number,
            ]
        );
    }
}
