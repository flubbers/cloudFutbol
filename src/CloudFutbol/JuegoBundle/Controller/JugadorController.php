<?php

namespace CloudFutbol\JuegoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CloudFutbol\JuegoBundle\Form\JugadorType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;


/**
 * @Route("/jugador", name="jugador")
 */
class JugadorController extends Controller
{

    /**
    * @Route("/red/", name="_redirigeJugador")
    * @Template()
    * @Cache(maxage="600")
    * Funcion : Redirecciona una web a otra, usa como parametro el name del routing
    */
    public function redirigejugadorAction()
    {
        //Funcion de prueba redirige una ruta a otra, usa el parametro name para generar la url.
        return $this->redirect($this->generateUrl('_addJugador'), 301);
    }

	/**
    * @Route("/add/", name="_addJugador")
    * @Template()
    * @Cache(maxage="600")
    */
    public function registerAction()
    {
        $form = $this->get('form.factory')->create(new JugadorType(),array());
        $data = array('form' =>  $form->createView());
        #return $this->render('JuegoBundle:Jugador:register.html.twig', array('form' =>  $form->createView()));
        return $data;
    }


	/**
    * @Route("/!/{name}", name="_perfilJugador")
    * @Template()
    * @Cache(maxage="600")
    */
    public function perfiljugadorAction($name)
    {


        $data = array (
                            'name'=>$name,
                            'puntos'=>'12',
                            'clasificacion'=>'1º'
                    );

        return $data;

    }





}