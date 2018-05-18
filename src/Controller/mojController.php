<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class mojController extends Controller{

  /**
  *@Route("/zmienna")
  */
  public function zmn() {

  $zmienna = 'lol';

  return $this->render('zmienna.html.twig', array(

    'zmienna' => $zmienna

  ));

  }

  public $lol = 'papa';

}


 ?>
