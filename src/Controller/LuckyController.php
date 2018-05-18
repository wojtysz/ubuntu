<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller {

/**
*@Route("/lucky/number")
*/

  public function number1() {

    $number = mt_rand(0,100);
    $wiocha = mt_rand(0,4);
    $no = 'olo';
    $zmienna = 'loleki';

    return $this->render('base.html.twig', array(
      'number' => $number,
      'fik' => $wiocha,
      'fak' => $no,
      'zmienna' => $zmienna
    ));
  }

}
?>
