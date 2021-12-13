<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

use Doctrine\ORM\EntityRepository;

use App\Entity\Post;
use App\Entity\Groupe;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

         if($options['insertHome'] == true){

                $builder
                ->add('description', TextareaType::class, array('attr' => array(
                    'class' => 'form-control postInput',
                    'style' => 'background-color: rgba(215, 215, 215, 0.5);border-radius: 20px 20px 0px 20px;',
                    'placeholder' => 'Entrez du texte...',
                    'maxlength' => 800,
                    )))
                ->add('id_groupe', EntityType::class, [
                    'class' => Groupe::class,
                    'choice_label' => 'libelle', 
                    'multiple' => true,
                    'expanded' => true,
                    'choices' => $options['groups'],
                ])

                //->add('type_id')
                //->add('ressources')
                ->add('enregistrer', SubmitType::class, array('label' => 'Poster ', 'attr' => array(
                    'class' => 'btn btn-primary',
                    )))
                ;


        }else{

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

        
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
            'insertHome'=> false,
            'groups'=>  [],
        ]);
    }
}
