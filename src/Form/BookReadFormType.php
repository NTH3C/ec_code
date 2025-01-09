<?php

namespace App\Form;

use App\Entity\BookRead;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Validator\Constraints\NotBlank;

class BookReadFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('user_id')
            ->add('book_id') 
            ->add('rating', NumberType::class, [
                'constraints' => [
                    new Range([
                        'min' => 0,
                        'max' => 5,
                        'notInRangeMessage' => 'Please enter a value between 0 and 5 (with increments of 0.5)',
                    ]),
                ],
            ])
            // Ajout du champ description
            ->add('description', TextType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a description',
                    ]),
                ],
            ])
            // Ajout du champ createdAt
            ->add('createdAt', DateTimeType::class, [
                'data' => new \DateTime(),
                'attr' => ['readonly' => true], // user can't modify
            ])
            // Ajout du champ updatedAt
            ->add('updatedAt', DateTimeType::class, [
                'data' => new \DateTime(),
                'attr' => ['readonly' => true], // user can't modify
            ])
            // Ajout du champ finished
            ->add('is_read', CheckboxType::class, [
                'required' => false, // Non obligatoire
                'label' => 'Lecture terminée',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => BookRead::class, // Corrigez ici si nécessaire
        ]);
    }
}
