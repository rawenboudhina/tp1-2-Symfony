<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
   
    /*#[Route('/', name: 'home')]*/
    #[Route('/{name}/{adr}', name: 'home')]



 public function home($name,$adr)
 
 /* return new Response('<h1>Ma première page Symfony</h1>');*/
 /*return $this->render('index.html.twig');*/
 {
    return $this->render('index.html.twig', 
    ['name' => $name,'adresse' => $adr]);
}

 
 
}
