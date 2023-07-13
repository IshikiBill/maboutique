<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType as TypeTextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('prenom', TypeTextType::class, [
                'label' => 'Votre prénom',
                'attr' => [
                    'placeholder' => 'Merci de saisir votre prénom'
                ],
                'constraints' => [
                    // Contrainte de longueur minimale et maximale pour le prénom
                    new Length([
                        'min' => 2,
                        'max' => 50,
                        'minMessage' => 'Votre prénom doit contenir au moins {{ limit }} caractères',
                        'maxMessage' => 'Votre prénom ne peut pas dépasser {{ limit }} caractères',
                    ]),
                ],
            ])

            ->add('nom', TypeTextType::class, [
                'label' => 'Votre nom',
                'attr' => [
                    'placeholder' => 'Merci de saisir votre nom',
                ],
                'constraints' => [
                    // Contrainte de longueur minimale et maximale pour le nom
                    new Length([
                        'min' => 2,
                        'max' => 50,
                        'minMessage' => 'Votre nom doit contenir au moins {{ limit }} caractères',
                        'maxMessage' => 'Votre nom ne peut pas dépasser {{ limit }} caractères',
                    ]),
                ],
            ])

            ->add('email', EmailType::class, [
                'label' => 'Votre email',
                'attr' => [
                    'placeholder' => 'Merci de saisir votre email',
                ],
                'constraints' => [
                    // Contrainte de format d'email
                    new Email([
                        'message' => 'L\'adresse email "{{ value }}" n\'est pas valide',
                    ]),
                ],
            ])

            ->add('content', TextareaType::class, [
                'label' => 'Votre message',
                'attr' => [
                    'placeholder' => 'En quoi pouvons-nous vous aider ?',
                ],
                'constraints' => [
                    // Contrainte de longueur minimale et maximale pour le message
                    new Length([
                        'min' => 10,
                        'max' => 500,
                        'minMessage' => 'Votre message doit contenir au moins {{ limit }} caractères',
                        'maxMessage' => 'Votre message ne peut pas dépasser {{ limit }} caractères',
                    ]),
                ],
            ])
            
            ->add('submit', SubmitType::class, [
                'label' => 'Envoyer',
                'attr' => [
                    'class' => 'btn-block btn-success',
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
