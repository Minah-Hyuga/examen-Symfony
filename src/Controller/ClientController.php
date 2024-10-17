<?php

namespace App\Controller;

use App\Repository\ClientRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Request;
use Symfony\Component\Routing\Attribute\Route;

class ClientController extends AbstractController
{
    #[Route('/clients', name: 'clients.index', methods: ['GET'])]
    public function index(ClientRepository $clientRepository): Response
    {
        $clients = $clientRepository->findAll();
        // dd($clients);
        return $this->render('client/index.html.twig', [
            'datas' => $clients,
        ]);
    }
    // fonction pour sauvegarder
    #[Route('/clients/store/', name: 'clients.store', methods: ['GET','POST'])]
    public function store(): Response
    {
        return $this->render('client/index.html.twig', [
            'controller_name' => 'ClientController',
        ]);
    }
    //fonction pour la recherche
    //utilisation des path variable
    #[Route('/clients/show/{id?}', name: 'clients.show', methods: ['GET'])]
    public function show(): Response
    {
        return $this->render('client/index.html.twig', [
            'controller_name' => 'ClientController',
        ]);
    }
    //fonction pour la recherche d un client par son telephone
    //utilisation des query params
    #[Route('/clients/search/telephone', name: 'clients.searchClientByTelephone', methods: ['GET'])]
    //injection de dependence avec les Request $request
    public function searchClientByTelephone(): Response
    {
        return $this->render('client/index.html.twig', [
            'controller_name' => 'ClientController',
        ]);
    }
}
