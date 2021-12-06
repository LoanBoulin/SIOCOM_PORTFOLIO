<?php

namespace App\Form;

use App\Entity\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('dateTimePost')
            ->add('description', TextareaType::class, array('attr' => array(
                'class' => 'form-control postInput',
                'style' => 'background-color: rgba(215, 215, 215, 0.5);border-radius: 20px 20px 0px 20px;',
                'placeholder' => 'Entrez du texte...',
                'maxlength' => 800,
                )))
            //->add('id_groupe')
            //->add('type_id')
            //->add('ressources')
            //->add('user')
            ->add('enregistrer', SubmitType::class, array('label' => 'Poster ', 'attr' => array(
                'class' => 'btn btn-primary',
                )))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}
