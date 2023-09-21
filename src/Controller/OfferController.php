<?php

namespace App\Controller;

use App\Entity\Job;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OfferController extends AbstractController
{
    #[Route('/offer/{id}', name: 'offer_item')]
    //je type-hint une entité:
    public function item(Job $job): Response
    {
        return $this->render('offer/item.html.twig', [
            'offer' => $job,
        ]);
    }
}
