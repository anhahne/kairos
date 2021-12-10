<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LiturgicalCalendarController extends AbstractController
{
    #[Route('/liturgical-calendar', name: 'liturgical_calendar')]
    public function index(): Response
    {
        return $this->render('liturgical_calendar/index.html.twig', [
            'controller_name' => 'LiturgicalCalendarController',
        ]);
    }
}
