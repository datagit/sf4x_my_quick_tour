<?php
/**
 * Created by PhpStorm.
 * User: datdm
 * Date: 1/13/18
 * Time: 2:19 PM
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function index($name)
    {
        return new Response("Hello! ${name}");
    }
}