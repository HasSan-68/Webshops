<?php

namespace App\Form;

use App\Entity\Factuurr;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FactuurrType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('factuurdatum')
            ->add('vervaldatum')
            ->add('inzakeopdracht')
            ->add('korting')
            ->add('klant_id')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Factuurr::class,
        ]);
    }
}
