<?php

declare(strict_types=1);

namespace App\Entity\Product;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\Product as BaseProduct;
use Sylius\Component\Product\Model\ProductTranslationInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_product")
 */
class Product extends BaseProduct
{
    /**
     * @var string
     * @ORM\Column (type="string")
     */
    private $colorOption;

    public const COLORS = [
        'red' => 'Red',
        'green' => 'Green',
        'blue' => 'Blue'
    ];

    static public function getColors()
    {
        return self::COLORS;
    }

    public function getColorOption(): ?string
    {
        return $this->colorOption;
    }

    public function setColorOption(?string $colorOption): void
    {
        $this->colorOption = $colorOption;
    }

    protected function createTranslation(): ProductTranslationInterface
    {
        return new ProductTranslation();
    }
}
