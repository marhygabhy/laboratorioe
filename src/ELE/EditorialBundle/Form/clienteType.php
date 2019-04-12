<?php

namespace ELE\EditorialBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class clienteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('apellido')
            ->add('correo')
            ->add('usuario')
            ->add('clave')
            ->add('pais', EntityType::class, array(
                'disabled'=>false,
                'class' => 'EditorialBundle:pais',
                'label'      =>"Pais",
                'empty_data' => "0",
                'placeholder'=>"Seleccione...",
                'attr'       => array('class' => 'form-control ','placeholder'=>''),
                'label_attr' => array('class' => 'control-label'),
            ))
        ;
    } 
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ELE\EditorialBundle\Entity\cliente'
        ));
    }

    /**
    * @return string
    */
    public function getDescripcion() {
       return 'ele_editorialbundle_cliente';
    }
}
