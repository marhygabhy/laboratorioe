<?php

namespace ELE\EditorialBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class coleccionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('categoria', EntityType::class, array(
            'disabled'=>false,
            'class' => 'EditorialBundle:categoria',
            'label'      =>"Categoria",
            'empty_data' => "0",
            'placeholder'=>"Seleccione...",
            'attr'       => array('class' => 'form-control ','placeholder'=>''),
            'label_attr' => array('class' => 'control-label'),
        ))
        ->add('descripcion')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ELE\EditorialBundle\Entity\coleccion'
        ));
    }

   /**
   * @return string
   */
  public function getDescripcion() {
    return 'ele_editorialbundle_coleccion';
  }
}
