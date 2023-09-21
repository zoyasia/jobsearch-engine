<?php

namespace App\Controller;

use App\Entity\ContractType;
use App\Entity\Job;
use App\Repository\ContractTypeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContractController extends AbstractController
{
    #[Route('/contract', name: 'app_contract')]
    public function index(ContractTypeRepository $contractTypeRepository): Response
    {
        $types = $contractTypeRepository->findAll();
        return $this->render('contract/index.html.twig', [
            'types' => $types,
        ]);
    }

    #[Route('/contract/{name}', name: 'contract_type_item')]
    public function item(ContractType $contractType): Response
    {
        return $this->render('contract/contract.html.twig', [
            'contract_type' => $contractType
        ]);
    }
}
