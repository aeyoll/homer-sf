<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Yaml\Yaml;

class IndexController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        $config = Yaml::parseFile(__DIR__ . '/../../config.yml');

        return $this->render('index/index.html.twig', [
            'config' => $config,
        ]);
    }
}
