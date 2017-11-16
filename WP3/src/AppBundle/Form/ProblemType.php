<?php

namespace AppBundle\Form;

use AppBundle\Entity\ProblemMessage;
use AppBundle\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ProblemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('locationId', EntityType::class, array(
                'required' => true,
                'expanded' => false,
                'multiple' => false,
                'mapped' => false,
                'class' => 'AppBundle\Entity\Location',
                'empty_data' => '',
                'choice_label' => 'name',
                'label' => 'Location'))
            ->add('locationId', IntegerType::class)
            ->add('date', DateTimeType::class)
            ->add('problem', TextareaType::class)
            ->add('image', FileType::Class, array('label' => 'Image (.jpg/.png/.gif)'))
            ->add('finished', CheckboxType::class)
            ->add('save', SubmitType::class,
                array('label' => 'Save Problem'));

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => ProblemMessage::class,
        ));
    }
}