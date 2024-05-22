<?php

namespace App\Form;

use App\Entity\Libro;
use App\Entity\Biblioteca;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditarLibroType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Titulo', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'El título no puede estar vacío.',
                    ])
                ]
            ])
            ->add('Autor', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'El autor no puede estar vacío.',
                    ]),
                    new Assert\Regex([
                        'pattern' => '/^[^0-9]*$/',
                        'message' => 'El autor no puede contener números.',
                    ])
                ]
            ])
            ->add('Sinopsis', TextType::class, [
                'constraints' => new Assert\NotBlank([
                    'message' => 'La sinopsis no puede estar vacía.',
                ])
            ])
            ->add('AnoPublicacion', DateType::class, [
                'widget' => 'single_text',
                'constraints' => new Assert\NotBlank([
                    'message' => 'El año de publicación no puede estar vacío.',
                ])
            ])
            ->add('Editorial', TextType::class, [
                'constraints' => new Assert\NotBlank([
                    'message' => 'La editorial no puede estar vacía.',
                ])
            ])
            ->add('ISBN', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'El ISBN no puede estar vacío.',
                    ]),
                    new Assert\Regex([
                        'pattern' => '/^[0-9]+-[0-9]+-[0-9]+-[0-9]+$/',
                        'message' => 'El formato del ISBN no es válido.',
                    ])
                ]
            ])
            ->add('NumEjemplares', NumberType::class, [
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'El número de ejemplares no puede estar vacío.',
                    ]),
                    new Assert\Type([
                        'type' => 'number',
                        'message' => 'El número de ejemplares debe ser entero.',
                    ]),
                    new Assert\Positive([
                        'message' => 'El número de ejemplares debe ser positivo.',
                    ])
                ]
            ])
            ->add('Biblioteca', EntityType::class, [
                'class' => Biblioteca::class,
                'choice_label' => 'nombre',
                'constraints' => new Assert\NotBlank([
                    'message' => 'Debe seleccionar una biblioteca.',
                ])
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Libro::class,
        ]);
    }
}
