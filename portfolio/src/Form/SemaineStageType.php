<?php

namespace App\Form;

use App\Entity\SemaineStage;
use App\Entity\TacheSemaine;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use App\Form\TacheSemaineType;

class SemaineStageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numSemaine')
            ->add('apprentissage')
            ->add('bilan')
            //->add('stage')
        ;


        /* Supression car fait avec table + modal
        
        $builder->add('tacheSemaines', CollectionType::class, [
            'entry_type' => TacheSemaineType::class,
            'entry_options' => ['label' => false],
            'allow_add' => true,
        ]);
        */


    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SemaineStage::class,
        ]);
    }
}
