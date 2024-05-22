<?php
namespace App\Form;

use App\Entity\Biblioteca;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormError; 
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class InsertarBibliotecaFormType extends AbstractType
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nombre', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'El nombre no puede estar vacío.']),
                ],
            ])
            ->add('Direccion', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'La dirección no puede estar vacía.']),
                    new Assert\Regex([
                        'pattern' => '/\d+$/',
                        'message' => 'La dirección debe terminar con un número.',
                    ]),
                ],
            ])
            ->add('Ciudad', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'La ciudad no puede estar vacía.',
                    ]),
                    new Assert\Regex([
                        'pattern' => '/^[^\d]*$/',
                        'message' => 'La ciudad no puede contener números.',
                    ]),
                ],
            ])
            ->add('HorarioApertura', TimeType::class, ['widget' => 'single_text'])
            ->add('HorarioCierre', TimeType::class, ['widget' => 'single_text'])
            ->add('FechaFundacion', DateType::class, ['widget' => 'single_text']);

        $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {
            $data = $event->getData();
            $form = $event->getForm();
            
            // Verificar si ya existe una biblioteca con los mismos datos
            $existenteBiblioteca = $this->entityManager->getRepository(Biblioteca::class)->findOneBy([
                'nombre' => $data->getNombre(),
                'direccion' => $data->getDireccion(),
                'ciudad' => $data->getCiudad()
            ]);

            if ($existenteBiblioteca) {
                $form->addError(new FormError('error, biblioteca existente '));
            }
        });
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Biblioteca::class,
        ]);
    }
}
