<?php
// src/Entity/Product.php
namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * A Product
 * @ORM\Entity()
 * @ApiResource(itemOperations={
 *     "get"={"method"="GET"},
 *     "special"={"route_name"="product_special"}
 * }, attributes={"filters"={"product.search_filter"}}
 *     )
 *
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
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="products")
     *
     */
    private $category;

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

    /**
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param Category $category
     */
    public function setCategory(Category $category): void
    {
        $this->category = $category;
    }





}