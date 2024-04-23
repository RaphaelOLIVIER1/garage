<?php

namespace App\Form;

use App\Entity\Horraire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HorraireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('lundi_m', null, [
                'widget' => 'single_text',
                'attr' => ['class' => 'm-3 form-control w-50']
            ])
            ->add('lundi_s', null, [
                'widget' => 'single_text',
                'attr' => ['class' => 'm-3 form-control w-50']

            ])
            ->add('mardi_m', null, [
                'widget' => 'single_text',
                'attr' => ['class' => 'm-3 form-control w-50']

            ])
            ->add('mardi_s', null, [
                'widget' => 'single_text',
                'attr' => ['class' => 'm-3 form-control w-50']

            ])
            ->add('mercredi_m', null, [
                'widget' => 'single_text',
                'attr' => ['class' => 'm-3 form-control w-50']

            ])
            ->add('mercredi_s', null, [
                'widget' => 'single_text',
                'attr' => ['class' => 'm-3 form-control w-50']

            ])
            ->add('jeudi_m', null, [
                'widget' => 'single_text',
                'attr' => ['class' => 'm-3 form-control w-50']

            ])
            ->add('jeudi_s', null, [
                'widget' => 'single_text',
                'attr' => ['class' => 'm-3 form-control w-50']

            ])
            ->add('vendredi_m', null, [
                'widget' => 'single_text',
                'attr' => ['class' => 'm-3 form-control w-50']

            ])
            ->add('vendredi_s', null, [
                'widget' => 'single_text',
                'attr' => ['class' => 'm-3 form-control w-50']

            ])
            ->add('samedi_m', null, [
                'widget' => 'single_text',
                'attr' => ['class' => 'm-3 form-control w-50']

            ])
            ->add('samedi_s', null, [
                'widget' => 'single_text',
                'attr' => ['class' => 'm-3 form-control w-50']

            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Horraire::class,
        ]);
    }
}
