<?php

namespace Rumbo\ProgramaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClienteType extends AbstractType
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
            ->add('apellido2')
            ->add('agente')
            ->add('colectivo')
            ->add('precio')
            ->add('descuento')
            ->add('nif')
            ->add('direccion')
            ->add('codigopostal')
            ->add('localidad')
            ->add('provincia')
            ->add('fechanacimiento','date',array('format'=>'d-M-y'))
            ->add('fechadealta')
            ->add('email')
            ->add('telefono')
            ->add('telefono2')
            ->add('telefono3')
            ->add('iban')
            ->add('notas')
            ->add('abonado')
            ->add('firmaabono')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Rumbo\ProgramaBundle\Entity\Cliente'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'rumbo_programabundle_cliente';
    }
}
