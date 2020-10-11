<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\Category;
use App\Entity\Idea;
use App\Repository\CategorieRepository;
use Doctrine\DBAL\Types\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MyFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', null, [
                'label' => 'Ton idée :'
            ])
            ->add('description', null, [
                'label' => 'Décris-la!'
            ])
            ->add('categorie', EntityType::class, [
                'class' => Category::class,

                'choice_label' => 'categorie',
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Idea ::class,
        ]);
    }
}
