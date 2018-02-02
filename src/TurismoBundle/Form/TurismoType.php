<?php

namespace TurismoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class TurismoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('ciudad',TextType::class,array('label'=>'Ciudad: ',
                                             'label_attr'=>array('class'=>'etiqueta'),
                                             'attr'=>array('class'=>'formulario')))
        ->add('fechaEntrada',DateType::class,array('label'=>'Fecha de Entrada: ',
                                                    'label_attr'=>array('class'=>'etiqueta'),
                                                    'attr'=>array('class'=>'formulario')))
        ->add('fechaSalida',DateType::class,array('label'=>'FechaSalida: ',
                                                    'label_attr'=>array('class'=>'etiqueta'),
                                                    'attr'=>array('class'=>'formulario')))
        ->add('localizacion',TextType::class,array('label'=>'Localizacion: ',
                                             'label_attr'=>array('class'=>'etiqueta'),
                                             'attr'=>array('class'=>'formulario')))
        ->add('Enviar',SubmitType::class,array('attr'=>array('class'=>'formulario')));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TurismoBundle\Entity\Turismo'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'turismobundle_turismo';
    }


}
