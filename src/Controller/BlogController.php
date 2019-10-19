<?php
// src/Controller/BlogController.php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Services\BlogService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class BlogController extends AbstractController
{

    /**
     * @Route("/blog/{page}", name="number_name_url", requirements={"page"="\d+"})
     */
    public function list(int $page=1)
    {
        $user = new BlogService();
        $user->setName('Sasha');

        // generate a URL with no route arguments
        $signUpPage = $this->generateUrl('number_name_url');
        echo ($signUpPage . "</br>");

        // generate a URL with route arguments
        $userProfilePage = $this->generateUrl('number_name_url', [
            'username' => $user->getname(),
        ]);
        echo ($userProfilePage . "</br>");

        // generated URLs are "absolute paths" by default. Pass a third optional
        // argument to generate different URLs (e.g. an "absolute URL")
        $signUpPageAbsouteUrl = $this->generateUrl('number_name_url', [], UrlGeneratorInterface::ABSOLUTE_URL);
        echo ($signUpPageAbsouteUrl . "</br>");

        // when a route is localized, Symfony uses by default the current request locale
        // pass a different '_locale' value if you want to set the locale explicitly
        $signUpPageInDutch = $this->generateUrl('number_name_url', ['_locale' => 'nl']);
        echo $signUpPageInDutch;

        $statementFact = 'Це нумерована адрема сторінки';

        return $this->render('Blog/Blog.html.twig', [
            'statementFact' => $statementFact,
            'slug' => false
        ]);
    }

    /**
     * @Route("/blog/{slug}", name="text_name_url")
     */
    public function show($slug)
    {
        $statementFact = 'Це текстова адреса сторінки';
        return $this->render('Blog/Blog.html.twig', [
            'statementFact' => $statementFact,
            'slug' => $slug
        ]);
    }
}