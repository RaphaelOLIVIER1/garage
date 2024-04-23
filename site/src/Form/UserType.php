<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\StingType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', null, array(
                'label_attr' => array('class' => 'm-3 form-label'),
                'attr' => array('class' => 'form-control')
            ))
            ->add('password', null, array(
                'label_attr' => array('class' => 'm-3 form-label'),
                'attr' => array('class' => 'form-control')
            ))
            ->add('firstname', null, array(
                'label_attr' => array('class' => 'm-3 form-label'),
                'attr' => array('class' => 'form-control')
            ))
            ->add('lastname', null, array(
                'label_attr' => array('class' => 'm-3 form-label'),
                'attr' => array('class' => 'form-control')
            ))
            ->add('roles', ChoiceType::class, [
                'choices' => [
                    'Utilisateur' => 'ROLE_USER',
                    'Moderateur' => 'ROLE_EDITOR',
                    'Administrateur' => 'ROLE_ADMIN',
                ],
                'attr' => [
                    'multiple' => true,
                    'class' => 'form-select w-75'
                ],
            ])

            ->get('roles')
            ->addModelTransformer(new CallbackTransformer(
                fn ($rolesAsArray) => count($rolesAsArray) ? $rolesAsArray[0] : null,
                fn ($rolesAsString) => [$rolesAsString]
            ));
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
