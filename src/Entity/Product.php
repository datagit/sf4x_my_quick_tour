<?php
// src/Entity/Product.php
namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * A Product
 * data type: http://docs.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/types.html
 * validator: http://symfony.com/doc/current/reference/constraints.html
 * @ORM\Entity()
 * @ApiResource()
 */
class Product
{
    /**
     * @var int The id of this product.
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     *
     */
    private $id;

    /**
     * @var string the name of the product.
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     *
     */
    private $name;

    /**
     * @var string the price of product
     * @ORM\Column(type="decimal")
     *
     */
    private $price;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * @param string $price
     */
    public function setPrice(string $price): void
    {
        $this->price = $price;
    }



}