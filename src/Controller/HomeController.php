<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller{

    /**
     * @Route("/hello/{prenom}/{age}", name="hello")
     * @Route("/bonjour", name="hello_base")
     * @Route("/hello/{prenom}", name="hello_prenom")
     * 
     * Montre la page qui dit bonjour
     */
    public function hello($prenom ="anonyme", $age = 0) {
        return $this->render(
            'hello.html.twig', 
            [
                'prenom' => $prenom,
                'age' => $age
            ]
            );
    }

    /**
     * @Route("/", name="homepage")
     */
     public function home(){
        $prenoms = ["Lior" => 31, "Joseph" => 12, "Anne" => 55];

        return $this->render(
            'home.html.twig',
            [ 
                'title' => "Salut tout le monde !!",
                'age' => 12,
                'tableau' => $prenoms
                
            ]
        );

     }

}

?>