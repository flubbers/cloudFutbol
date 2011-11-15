<?php

namespace CloudFutbol\JuegoBundle\Form;

/**
 * 
 *
 * @author Flubbers <flubbers@me.com>
 */

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
 
class JugadorType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('nombre','text',array('label'=>'Nombre'))
                ->add('pais','choice',array(
                                            'choices'=> array(
                                                            'es' => 'España', 
                                                            'en' => 'Inglaterra'
                                                            ),
                                            'required'  => true)
                                            )
                ->add('fecha Nacimiento','date')
                ->add('posicion','choice',array(
                                            'choices'=> array(
                                                            'de' => 'delantero', 
                                                            'po' => 'portero',
                                                            'df' => 'defensa'
                                                            ),
                                            'required'  => true)
                                            );
    }
 
    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'CloudFutbol\JuegoBundle\Entity\Jugador',
            'csrf_protection'=>true,

        );
    } 
    public function getName()
    {
        return "jugador";
    } 
}