<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/** Product informations
 * 
 * @ORM\Entity
*/
#[ApiResource]
class Product {
    /** ID of the product 
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

    /** Name of the product 
     * 
     * @ORM\Column()
    */
    #[Assert\NotBlank]
    public string $name = '';

    /** Description of the product 
     * 
     * @ORM\Column(type="text")
    */
    public string $description = '';

}