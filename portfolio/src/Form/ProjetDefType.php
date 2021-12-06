<?php

namespace App\Form;

use App\Entity\ProjetDef;
use App\Entity\Groupe;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;


class ProjetDefType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('dateDebut')
            ->add('dateFin')
            ->add('libelle')
            ->add('matiere', EntityType::class, array('class' => 'App\Entity\Matiere','choice_label' => 'libelle', 'multiple' => true ))      
            ->add('enseignant', EntityType::class, array('class' => 'App\Entity\Enseignant','choice_label' => 'nom', 'multiple' => true ))
            ->add('groupe', EntityType::class, [
                'class' => Groupe::class,
                'choice_label' => 'libelle', 
                'multiple' => true,
                'query_builder' => function (EntityRepository $er) { 
                    return $er->createQueryBuilder('groupe')
                    ->where('groupe.groupe_type = :grplib')
                    ->setParameters(['grplib' => '1']);
                },
            ])
            ->add('enregistrer', SubmitType::class, array('label' => 'Nouveau projet '))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ProjetDef::class,
        ]);
    }
}
