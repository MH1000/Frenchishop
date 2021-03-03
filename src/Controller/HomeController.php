<?php

namespace App\Controller;

use App\Entity\Header;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

    private $manager;

    public function __construct(EntityManagerInterface $manager)
    {
        $this->manager = $manager;
    }

    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        $products = $this->manager->getRepository(Product::class)->findByIsBest(1);
        $headers = $this->manager->getRepository(Header::class)->findAll();

        return $this->render('home/index.html.twig',[
            'products' => $products,
            'headers' => $headers
        ]);
    }
}
