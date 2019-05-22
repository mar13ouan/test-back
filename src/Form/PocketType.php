<?php

namespace App\Form;

use App\Entity\Pocket;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use EasyCorp\Bundle\EasyAdminBundle\Form\Type\EasyAdminAutocompleteType;

class PocketType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('__self',EasyAdminAutocompleteType::class, [
                'class'=> Pocket::class
                // 'allow_delete' => true,
                // 'allow_add' => true,
                // 'by_reference' => false
            ]
            )
            ->add('pocket')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Pocket::class,
        ]);
    }
}
