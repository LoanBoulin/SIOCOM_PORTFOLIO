<?php

namespace App\Form;

use App\Entity\Groupe;
use App\Entity\GroupeType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;



class GroupeTypeForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        if($options['champDesactive'] == true){
   
            $builder
                ->add('libelle', TextType::class)           
                ->add('enregistrer', SubmitType::class, array('label' => 'Nouveau groupe'))
                ;
        }else{

            $builder
                ->add('libelle', TextType::class)
                ->add('groupe_type', EntityType::class, array('class' => 'App\Entity\GroupeType','choice_label' => 'libelle'))    
                ->add('enregistrer', SubmitType::class, array('label' => 'Nouveau groupe'))
                ;         
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Groupe::class,
            'champDesactive'=> true,
            
        ]);
    }
}
