<?php

namespace App\Controller;
use App\Repository\CardRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/templates", name="templates")
     */
    public function templates(CardRepository $cardRepository)
    {
        $cards = $cardRepository->findAll();

        return $this->render('index/card.html.twig',
        ['cards' =>$cardRepository->findAll()]
     );
    }
}
