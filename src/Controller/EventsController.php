<?php

namespace App\Controller;

use App\Entity\Event;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EventsController extends AbstractController
{
    #[Route('/events')]
    public function index(EntityManagerInterface $entityManagerInterface): Response
    {
        $events = $entityManagerInterface->getRepository(Event::class)->findAll();

        return $this->render('/events/index.html.twig', compact('events'));
    }
}