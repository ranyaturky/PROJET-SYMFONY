<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ProductRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Product;


class ProductController extends AbstractController
{
    #[Route('/product', name: 'app_product')]
    public function index(ProductRepository $ProductRepository ,ManagerRegistry $doctrine): Response
    {

        $repository=$doctrine->getRepository(Product::class);
        $Products=$repository->findAll();
        dd($Products);
        // return $this->render('product/index.html.twig', [
        //     'Products' => $ProductRepository.findAllProducts(),
        // ]);

    }

}
