<?php
/**
 * Created by PhpStorm.
 * User: datdm
 * Date: 1/13/18
 * Time: 2:19 PM
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    /**
     * @param $name
     * @return Response
     * @Route("/hello/{name}")
     */
    public function index($name)
    {
        return $this->render('default/index.html.twig', [
           'name' => $name,
        ]);
    }

    /**
     * @Route("/simplicity")
     */
    public function simple()
    {
        return new Response('Simple! Easy! Great!');
    }

    /**
     * @param $name
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     * @Route("/api/hello/{name}")
     */
    public function apiExample($name) {
        return $this->json(
        [
            'name'      => $name,
            'symfony'   => 'rocks',
        ]
        );
    }
}