<?php

// src/Controller/OldBlogController.php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

class OldBlogController extends AbstractController
{
    /**
     * @Route("/old-blog")
     */

    public function redirectToOtherUrl()
    {
        return $this->redirectToRoute('number_name_url');
    }
    public function index()
    {
        $this -> redirectToOtherUrl();
    }
}