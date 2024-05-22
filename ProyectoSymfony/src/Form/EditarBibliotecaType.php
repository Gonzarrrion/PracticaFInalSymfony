<?php

namespace App\Form;

use App\Entity\Biblioteca;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;

class EditarBibliotecaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nombre')
            ->add('Direccion')
            ->add('Ciudad')
            ->add('HorarioApertura', TimeType::class, [
                'widget' => 'single_text',
            ])
            ->add('HorarioCierre', TimeType::class, [
                'widget' => 'single_text',
            ])
            ->add('FechaFundacion', DateType::class, [
                'widget' => 'single_text',
            ])
        ;
    }


    
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Biblioteca::class,
        ]);
    }
}
