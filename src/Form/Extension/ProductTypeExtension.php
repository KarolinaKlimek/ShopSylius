<?php

namespace App\Form\Extension;

use App\Entity\Product\Product;
use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class ProductTypeExtension extends AbstractTypeExtension
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('colorOption', ChoiceType::class, [
                'required' => false,
                'choices' => Product::COLORS,
                'label' => 'sylius.ui.colorOption',
                'placeholder' => 'sylius.ui.color.options'
            ]);
    }


    public static function getExtendedTypes(): iterable
    {
        return [ProductType::class];
    }
}
