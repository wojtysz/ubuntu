<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Product;
use Symfony\Component\HttpFoundation\Response;


class ProductController extends Controller
{
    /**
     * @Route("/product", name="product")
     */
    public function index()
    {

          $entityManager = $this->getDoctrine()->getManager();

          $product = new Product();
          $product->setName('Keyboard');
          $product->setPrice(1999);
          $product->setDescription('Ergonomic and stylish!');

          $entityManager->persist($product);

          $entityManager->flush();

          return new Response('Saved new product with id '.$product->getId());


    }

    /**
    * @Route("/product/{id}", name="product_show")
    */

    public function show($id){

      $product = $this->getDoctrine()
          ->getRepository(Product::class)
          ->find($id);

          if (!$product) {
            throw $this->createNotFoundException(
              'No product found for id ' .$id
            );
          }

          return new Response ('Check out this great product: ' .$product->getName());
    }
}
