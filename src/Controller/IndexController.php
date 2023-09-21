<?php

namespace App\Controller;

use App\Repository\JobRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(JobRepository $jobRepository): Response
    {
        $jobs = $jobRepository->findAll();

        return $this->render('index/index.html.twig', [
            'jobs' => $jobs,
        ]);
    }
}
