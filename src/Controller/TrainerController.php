<?php

namespace App\Controller;

use phpDocumentor\Reflection\Types\AbstractList;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TrainerController extends AbstractController
{
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('templates/number.html.twig', [
            'number' => $number,
        ]);
    }
}
