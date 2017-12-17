<?php

// /src/AppBundle/Form/Type/BattleType.php

namespace RecipeBundle\Form\Type;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RecipeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px')))
            ->add('description', TextareaType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px')))
            ->add('aliments', EntityType::class, array(
                'class'     => 'RecipeBundle\Entity\Aliment',
                'choice_label' => 'name',
                'label'     => 'Aliments',
                'expanded'  => true,
                'multiple'  => true,
            ))
            ->add('save', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'RecipeBundle\Entity\Recipe',
        ]);
    }
}