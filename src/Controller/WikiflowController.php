<?php

namespace App\Controller;

use App\Entity\Address;
use App\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WikiflowController extends AbstractController
{
    /**
     * @Route("/wikiflow", name="wikiflow")
     */
    public function index(): Response
    {
        return $this->render('wikiflow/index.html.twig', [
            'controller_name' => 'WikiflowController',
        ]);
    }

    /**
     * @Route("/users", name="users")
     */
    public function showUser(): Response
    {
        $users = $this->getDoctrine()->getRepository(Users::class)->findAll();
        $adresses = $this->getDoctrine()->getRepository(Address::class)->findAll();

        return $this->render('wikiflow/user.html.twig', [
            'users' => $users, 'adresses' => $adresses
        ]);
    }


}
