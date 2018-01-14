<?php
/**
 * Created by PhpStorm.
 * User: datdm
 * Date: 1/13/18
 * Time: 2:19 PM
 */

namespace App\Controller;


use App\GreetingGenerator;
use Psr\Log\LoggerInterface;
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
    public function index($name, LoggerInterface $logger, GreetingGenerator $generator)
    {
        $greeting = $generator->getRandomGreeting();
        $logger->info("Saying hello to $name!, greeting:${greeting}");
        return $this->render('default/index.html.twig', [
           'name'       => $name,
            'greeting'  => $greeting,
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

    //product_special

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     * @Route("/api/product/{id}/special", name="product_special")
     */
    public function apiGetProductSpecial($id) {
        //https://api-platform.com/docs/core/operations#creating-custom-operations-and-controllers
        return $this->json(
            [
                'id'      => $id,
                'symfony'   => 'apiGetProductSpecial',
            ]
        );
    }
}