<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\PersonType;

class PersonController extends AbstractController
{
    /**
     * @Route("/person", name="person")
     */
    public function new(Request $request): Response
    {
        $form = $this->createForm(PersonType::class);

        return $this->render('person/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
