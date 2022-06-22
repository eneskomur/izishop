<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/** Customer order informations
 * 
 * @ORM\Entity
*/
#[ApiResource]
class CustomerOrder
{
    /** ID of the order 
     * 
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
    */
    private ?int $id = null;

    /**
    * @return int
    */
    public function getId(): int
    {
        return $this->id;
    }

    /** Order code 
     * 
     * @ORM\Column(unique=true)
    */
    private string $orderCode = '';

    /**
    * @return string
    */
    public function getOrderCode(): string
    {
        return $this->orderCode;
    }

    public function setOrderCode(): void
    {
        $this->orderCode = 'IZI-'.(string)rand(10,20).'-'.(string)rand(100,999);
    }

    /** ID of the product 
     * 
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="customer_orders")
     * @ORM\JoinColumn(name="product_id", nullable=false, referencedColumnName="id")
    */
    #[ApiSubResource]
    public $product;

    /** Quantity of the product 
     * 
     * @ORM\Column(type="integer")
    */
    #[Assert\NotBlank]
    public int $quantity = 0;

    /** Address of the customer 
     * 
     * @ORM\Column(type="text")
    */
    #[Assert\NotBlank]
    public string $address = '';

    /** The date that the order was shipped 
     * 
     * @ORM\Column(type="datetime", nullable=true)
    */
    private ?\DateTimeInterface $shippingDate = null;

    /**
    * @return \DateTimeInterface|null
    */
    public function getShippingDate(): ?\DateTimeInterface
    {
        return $this->shippingDate;
    }
    
}