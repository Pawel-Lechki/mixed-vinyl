<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class VinylController
{
    #[Route('/')]
    public function homepage(): Response
    {
        return new Response('Title PD and Jams');
    }
}