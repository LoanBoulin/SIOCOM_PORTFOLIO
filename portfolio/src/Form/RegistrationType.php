<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class,[
                'disabled' => false
            ])    
            ->add('password', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'help' => 'Le mot de passe doit contenir au moins 8 caractères, au moins 1 chiffre et 1 caractère spécial',
                'label' => 'Mot de passe',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez saisir un mot de passe valide',
                    ]),
                    new Length([
                        'min' => 2,
                        'minMessage' => 'Votre mot de passe doit contenir au moins {{ limit }} caractères',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ]);
            
            $builder
            ->add('nom', TextType::class, ['mapped' => false, 'label' =>'Nom'])
            ->add('prenom', TextType::class, ['mapped' => false, 'label' =>'Prénom'])
            ->add('dateNaiss', DateType::class, array('input' => 'datetime',
            'widget' => 'single_text',
            'mapped' => false,
            'required'=> true,
            'label' =>'date de naissance',
            'placeholder' => 'jj/mm/aaaa'))
            ;
       
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
