<?php

namespace ELE\EditorialBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class solicitudType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('cliente', EntityType::class, array(
            'disabled'=>false,
            'class' => 'EditorialBundle:cliente',
            'label'      =>"Cliente",
            'empty_data' => "0",
            'placeholder'=>"Seleccione...",
            'attr'       => array('class' => 'form-control ','placeholder'=>''),
            'label_attr' => array('class' => 'control-label'),
        ))
        ->add('libro', EntityType::class, array(
            'label' => 'Libro',
            'class' => 'EditorialBundle:libro',
            'choice_label' => 'titulo',
            'multiple' => true, 
            'expanded' => true
        ))
        
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ELE\EditorialBundle\Entity\solicitud'
        ));
    }

    /**
    * @return string
    */
    public function getNombre() {
        return 'ele_editorialbundle_solicitud';
     }

    /**
    * @return string
    */
    public function getTitulo() {
        return 'ele_editorialbundle_solicitud';
     }
}
