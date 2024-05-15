<?php

namespace App\Form;

use App\Entity\Biblioteca;
use App\Entity\Libro;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class EditarLibroType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Titulo')
            ->add('Autor')
            ->add('Sinopsis')
            ->add('AnoPublicacion', DateType::class, [
                'widget' => 'single_text',
            ])
            ->add('Editorial')
            ->add('ISBN')
            ->add('NumEjemplares')
            ->add('Biblioteca', EntityType::class, [
                'class' => Biblioteca::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Libro::class,
        ]);
    }
}
