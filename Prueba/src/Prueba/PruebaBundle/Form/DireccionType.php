<?php

namespace Prueba\PruebaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class DireccionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('calle')
            ->add('numInt')
            ->add('numExt')
            ->add('colonia')
            ->add('municipio')
            ->add('estado')
            ->add('codPost')
            ->add('pais')
            /*->add('personal', EntityType::class, array(
                  'class' => 'PruebaBundle:Personal',
                  'choice_label' => 'id',))*/
            //->add('personal')
            ->add('personal')//, new PersonalType())


        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Prueba\PruebaBundle\Entity\Direccion'
        ));
    }
}
