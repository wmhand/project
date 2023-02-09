<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class LuckyController extends AbstractController
{
    #[Route('/lucky/number')]

    public function number(): Response
    {

            $number = random_int(0, 1000000);

        return $this->render('bezoeker/lucky.html.twig', [
            'number' => $number,
        ]);
        }
}