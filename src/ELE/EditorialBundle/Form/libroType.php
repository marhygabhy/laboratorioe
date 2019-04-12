<?php

namespace ELE\EditorialBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class libroType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codigo')
            ->add('titulo')
            ->add('subtitulo')
            ->add('autor')
            ->add('pagina')
            ->add('isbn')
            ->add('formato')
            ->add('descripcion')
            ->add('ruta', FileType::class,array(
			    'data_class' => null
			))
            ->add('coleccion', EntityType::class, array(
                'disabled'=>false,
                'class' => 'EditorialBundle:coleccion',
                'label'      =>"Colección",
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
            'data_class' => 'ELE\EditorialBundle\Entity\libro'
        ));
    }

    /**
   * @return string
   */
  public function getDescripcion() {
    return 'ele_editorialbundle_libro';
  }
}
