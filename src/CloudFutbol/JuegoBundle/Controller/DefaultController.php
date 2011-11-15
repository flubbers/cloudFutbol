<?php

namespace CloudFutbol\JuegoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;




class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('JuegoBundle:Default:index.html.twig', array('name' => $name));
    }

    public function inicioAction()
    {
        return new Response("Probando vista indice");
    }
    
    public function perfilAction($name)
    {
        return $this->render('JuegoBundle:User:perfil.html.twig', array('name' => $name));
    }
    
    /**
    * @Route("/clasificacion/{name}", name="_hola")
    * @Template()
    * @Cache(maxage="600")
    */
    public function clasificacionAction($name)
    {
        $data = array (
                            'name'=>$name,
                            'puntos'=>'12',
                            'clasificacion'=>'1º'
                    );

        return $data;

    }

    /**
    * @Route("/clasificacionJson/{name}",defaults={"_format"="json"}, name="_clasificacionJson")
    * Template()
    * @Cache(maxage="600")
    */
    public function clasificacionJsonAnction($name)
    {
        $data = array (
                            'name'=>$name,
                            'puntos'=>'12',
                            'clasificacion'=>'Primero'
                    );
        return new Response(json_encode( $data));
    }

}
