<?php
/**
 * Created by PhpStorm.
 * User: datdm
 * Date: 1/13/18
 * Time: 2:19 PM
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
USE Symfony\Component\Routing\Annotation\Route;

class DefaultController
{
    /**
     * @param $name
     * @return Response
     * @Route("/hello/{name}")
     */
    public function index($name)
    {
        return new Response("Hello! ${name}");
    }

    /**
     * @Route("/simplicity")
     */
    public function simple()
    {
        return new Response('Simple! Easy! Great!');
    }
}